<?php
// auth.php

// Função para autenticar um usuário
function authenticateUser($username, $password) {
    $conn = db_connect();
    $sql = "SELECT * FROM usuarios WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        return true;
    } else {
        return false;
    }
}

// Função para criar um novo usuário
function createUser($username, $password, $email) {
    $conn = db_connect();
    $sql = "INSERT INTO usuarios (username, password, email) VALUES ('$username', '$password', '$email')";
    $conn->query($sql);
}

// Função para atualizar um usuário
function updateUser($id, $username, $password, $email) {
    $conn = db_connect();
    $sql = "UPDATE usuarios SET username = '$username', password = '$password', email = '$email' WHERE id = '$id'";
    $conn->query($sql);
}

// Função para excluir um usuário
function deleteUser($id) {
    $conn = db_connect();
    $sql = "DELETE FROM usuarios WHERE id = '$id'";
    $conn->query($sql);
}

?>