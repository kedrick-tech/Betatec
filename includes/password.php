<?php
// password.php

// Função para criar um hash de senha
function createPasswordHash($password) {
    return password_hash($password, PASSWORD_DEFAULT);
}

// Função para verificar uma senha
function verifyPassword($password, $hash) {
    return password_verify($password, $hash);
}

?>