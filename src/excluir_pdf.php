<?php
$pdfDirectory = 'uploads/';

if (isset($_POST['pdfFile'])) {
    $pdfFileName = $_POST['pdfFile'];
    $pdfPath = $pdfDirectory . $pdfFileName;

    if (file_exists($pdfPath)) {
        if (unlink($pdfPath)) {
            echo "O PDF '$pdfFileName' foi excluído com sucesso.";
            header('Location: index.php');
            exit;
        } else {
            echo "Erro ao excluir o PDF '$pdfFileName'.";
        }
    } else {
        echo "O PDF '$pdfFileName' não existe.";
    }
} else {
    echo "Selecione um PDF para excluir.";
}
?>