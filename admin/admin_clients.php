<?php
// admin_clients.php

// Função para listar todos os clientes
function listClients() {
    $conn = db_connect();
    $sql = "SELECT * FROM clientes";
    $result = $conn->query($sql);
    $clients = array();
    while ($row = $result->fetch_assoc()) {
        $clients[] = $row;
    }
    return $clients;
}

// Função para adicionar um novo cliente
function addClient($name, $email, $password) {
    $conn = db_connect();
    $sql = "INSERT INTO clientes (nome, email, senha) VALUES ('$name', '$email', '$password')";
    $conn->query($sql);
}

// Função para editar um cliente
function editClient($id, $name, $email, $password) {
    $conn = db_connect();
    $sql = "UPDATE clientes SET nome = '$name', email = '$email', senha = '$password' WHERE id = '$id'";
    $conn->query($sql);
}

// Função para excluir um cliente
function deleteClient($id) {
    $conn = db_connect();
    $sql = "DELETE FROM clientes WHERE id = '$id'";
    $conn->query($sql);
}

?>