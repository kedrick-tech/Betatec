<?php
// products.php

// Função para buscar produtos
function getProducts() {
    $conn = db_connect();
    $sql = "SELECT * FROM produtos";
    $result = $conn->query($sql);
    $products = array();
    while ($row = $result->fetch_assoc()) {
        $products[] = $row;
    }
    return $products;
}

// Função para buscar produto por ID
function getProductById($id) {
    $conn = db_connect();
    $sql = "SELECT * FROM produtos WHERE id = '$id'";
    $result = $conn->query($sql);
    $product = $result->fetch_assoc();
    return $product;
}

// Função para adicionar produto
function addProduct($title, $description, $price, $image) {
    $conn = db_connect();
    $sql = "INSERT INTO produtos (titulo, descricao, preco, imagem) VALUES ('$title', '$description', '$price', '$image')";
    $conn->query($sql);
}

// Função para atualizar produto
function updateProduct($id, $title, $description, $price, $image) {
    $conn = db_connect();
    $sql = "UPDATE produtos SET titulo = '$title', descricao = '$description', preco = '$price', imagem = '$image' WHERE id = '$id'";
    $conn->query($sql);
}

// Função para deletar produto
function deleteProduct($id) {
    $conn = db_connect();
    $sql = "DELETE FROM produtos WHERE id = '$id'";
    $conn->query($sql);
}

?>