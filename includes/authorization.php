<?php
// authorization.php

// Função para verificar se o usuário está autenticado
function isAuthenticated() {
    return isset($_SESSION['user_id']);
}

// Função para verificar se o usuário tem permissão para acessar uma página
function hasPermission($permission) {
    $user_id = $_SESSION['user_id'];
    $conn = db_connect();
    $sql = "SELECT * FROM usuarios WHERE id = '$user_id' AND permission = '$permission'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        return true;
    } else {
        return false;
    }
}

// Função para autorizar o acesso a uma página
function authorize($permission) {
    if (!isAuthenticated()) {
        header('Location: login.php');
        exit;
    }
    if (!hasPermission($permission)) {
        header('Location: access_denied.php');
        exit;
    }
}

?>