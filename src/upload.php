<?php
    session_start();

    $targetDirectory = "./uploads/";
    $targetFile = $targetDirectory . basename($_FILES["arquivo"]["name"]);
    $fileType = pathinfo($targetFile, PATHINFO_EXTENSION);

    $allowedExtensions = array('pdf', 'docx');

    if (!in_array($fileType, $allowedExtensions)) {
        $_SESSION['uploadMessage'] = "Formato de arquivo não permitido. Apenas PDF e DOCX são aceitos.";
        header('Location: index.php#uploadSection');
        exit;
    }

    // Verifica se o arquivo já existe
    if (file_exists($targetFile)) {
        $_SESSION['uploadMessage'] = "Arquivo enviado já existe.";
        header('Location: index.php#uploadSection');
        exit;
    }

    $maxSize = 10 * 1024 * 1024; // 15MB em bytes
    if ($_FILES["arquivo"]["size"] > $maxSize) {
        $_SESSION['uploadMessage'] = "O arquivo é muito grande. O tamanho máximo permitido é de 15MB.";
        header('Location: index.php#uploadSection');
        exit;
    }

    // Move o arquivo para a pasta de destino
    if (move_uploaded_file($_FILES["arquivo"]["tmp_name"], $targetFile)) {
        $_SESSION['uploadMessage'] = "Arquivo enviado enviado com sucesso.";
        header('Location: index.php#uploadSection');
        exit;
    } else {
        $_SESSION['uploadMessage'] = "Ocorreu um erro ao enviar o arquivo.";
        header('Location: index.php#uploadSection');
    }
?>