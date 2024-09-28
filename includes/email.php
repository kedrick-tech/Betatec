<?php
// email.php

// Função para enviar um e-mail
function sendEmail($to, $subject, $message) {
    $headers = 'From: Loja <loja@example.com>' . "\r\n";
    $headers .= 'Reply-To: loja@example.com' . "\r\n";
    $headers .= 'X-Mailer: PHP/' . phpversion();
    mail($to, $subject, $message, $headers);
}

// Função para enviar um e-mail com anexo
function sendEmailWithAttachment($to, $subject, $message, $attachment) {
    $headers = 'From: Loja <loja@example.com>' . "\r\n";
    $headers .= 'Reply-To: loja@example.com' . "\r\n";
    $headers .= 'X-Mailer: PHP/' . phpversion();
    $headers .= 'Content-Type: multipart/mixed; boundary="boundary"' . "\r\n";
    $message = '--boundary' . "\r\n";
    $message .= 'Content-Type: text/plain; charset=UTF-8' . "\r\n";
    $message .= 'Content-Transfer-Encoding: 8bit' . "\r\n";
    $message .= $message . "\r\n";
    $message .= '--boundary' . "\r\n";
    $message .= 'Content-Type: application/octet-stream; name="' . $attachment . '"' . "\r\n";
    $message .= 'Content-Transfer-Encoding: base64' . "\r\n";
    $message .= 'Content-Disposition: attachment; filename="' . $attachment . '"' . "\r\n";
    $message .= base64_encode(file_get_contents($attachment)) . "\r\n";
    $message .= '--boundary--' . "\r\n";
    mail($to, $subject, $message, $headers);
}

?>