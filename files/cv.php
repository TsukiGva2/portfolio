<?php
// Defina o caminho para o arquivo PDF existente
$arquivoPDF = './Currículo - Kerlon.pdf';

if (file_exists($arquivoPDF)) {
  
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="' . basename($arquivoPDF) . '"');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($arquivoPDF));

    readfile($arquivoPDF);
    exit;
} else {
    echo 'O arquivo não foi encontrado.';
}
