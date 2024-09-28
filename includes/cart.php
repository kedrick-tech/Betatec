<?php
// cart.php

// Função para adicionar produto ao carrinho
function addToCart($productId, $quantity) {
    $conn = db_connect();
    $sql = "SELECT * FROM produtos WHERE id = '$productId'";
    $result = $conn->query($sql);
    $product = $result->fetch_assoc();
    if ($product) {
        $cart = $_SESSION['cart'];
        if (!isset($cart[$productId])) {
            $cart[$productId] = array('quantity' => $quantity, 'product' => $product);
        } else {
            $cart[$productId]['quantity'] += $quantity;
        }
        $_SESSION['cart'] = $cart;
    }
}

// Função para remover produto do carrinho
function removeFromCart($productId) {
    $cart = $_SESSION['cart'];
    unset($cart[$productId]);
    $_SESSION['cart'] = $cart;
}

// Função para atualizar quantidade de produto no carrinho
function updateCartQuantity($productId, $quantity) {
    $cart = $_SESSION['cart'];
    $cart[$productId]['quantity'] = $quantity;
    $_SESSION['cart'] = $cart;
}

// Função para calcular o total do carrinho
function calculateCartTotal() {
    $cart = $_SESSION['cart'];
    $total = 0;
    foreach ($cart as $product) {
        $total += $product['product']['preco'] * $product['quantity'];
    }
    return $total;
}

?>