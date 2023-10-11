<?php
    $targetDirectory = "./uploads/";
    $targetFile = $targetDirectory . basename($_FILES["arquivo"]["name"]);

    // Verifica se o arquivo já existe
    if (file_exists($targetFile)) {
        echo "O arquivo já existe.";
        header('Location: index.php');
        exit;
    }

    // Move o arquivo para a pasta de destino
    if (move_uploaded_file($_FILES["arquivo"]["tmp_name"], $targetFile)) {
        echo "Arquivo enviado com sucesso.";
        header('Location: index.php');
        exit;
    } else {
        echo "Ocorreu um erro ao enviar o arquivo.";
    }
?>