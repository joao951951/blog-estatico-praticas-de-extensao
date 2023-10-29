<?php
    session_start();

    $pdfDirectory = 'uploads/';

    if (isset($_POST['pdfFile'])) {
        $pdfFileName = $_POST['pdfFile'];
        $pdfPath = $pdfDirectory . $pdfFileName;

        if (file_exists($pdfPath)) {
            if (unlink($pdfPath)) {
                $_SESSION['uploadMessage'] = "Arquivo '$pdfFileName' excluido com sucesso.";
                header('Location: index.php#uploadSection');
                exit;
            } else {
                $_SESSION['uploadMessage'] = "Erro ao excluir o arquivo '$pdfFileName'.";
                header('Location: index.php#uploadSection');
            }
        } else {
            $_SESSION['uploadMessage'] = "O arquivo especificado não existe.";
            header('Location: index.php#uploadSection');
        }
    } else {
        $_SESSION['uploadMessage'] = "Selecione um pdf para excluir.";
        header('Location: index.php#uploadSection');
    }
?>