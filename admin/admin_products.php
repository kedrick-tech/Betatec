<?php
// admin_products.php

// Função para listar todos os produtos
function listProducts() {
    $conn = db_connect();
    $sql = "SELECT * FROM produtos";
    $result = $conn->query($sql);
    $products = array();
    while ($row = $result->fetch_assoc()) {
        $products[] = $row;
    }
    return $products;
}

// Função para adicionar um novo produto
function addProduct($title, $description, $price, $image) {
    $conn = db_connect();
    $sql = "INSERT INTO produtos (titulo, descricao, preco, imagem) VALUES ('$title', '$description', '$price', '$image')";
    $conn->query($sql);
}

// Função para editar um produto
function editProduct($id, $title, $description, $price, $image) {
    $conn = db_connect();
    $sql = "UPDATE produtos SET titulo = '$title', descricao = '$description', preco = '$price', imagem = '$image' WHERE id = '$id'";
    $conn->query($sql);
}

// Função para excluir um produto
function deleteProduct($id) {
    $conn = db_connect();
    $sql = "DELETE FROM produtos WHERE id = '$id'";
    $conn->query($sql);
}

?>