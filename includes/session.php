<?php
// session.php

// Função para iniciar uma sessão
function startSession() {
    session_start();
}

// Função para verificar se uma sessão está ativa
function isSessionActive() {
    return isset($_SESSION['user_id']);
}

// Função para encerrar uma sessão
function endSession() {
    session_destroy();
}

// Função para armazenar dados em uma sessão
function storeSessionData($key, $value) {
    $_SESSION[$key] = $value;
}

// Função para recuperar dados de uma sessão
function retrieveSessionData($key) {
    return $_SESSION[$key];
}

?>