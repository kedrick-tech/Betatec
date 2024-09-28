<?php
// stats.php

// Função para gerar estatística de vendas por período
function getSalesStats($startDate, $endDate) {
    $conn = db_connect();
    $sql = "SELECT COUNT(*) AS total_sales, SUM(total) AS total_revenue FROM pedidos WHERE data_pedido BETWEEN '$startDate' AND '$endDate'";
    $result = $conn->query($sql);
    $stats = $result->fetch_assoc();
    return $stats;
}

// Função para gerar estatística de vendas por produto
function getSalesStatsByProduct($productId) {
    $conn = db_connect();
    $sql = "SELECT COUNT(*) AS total_sales, SUM(total) AS total_revenue FROM pedidos WHERE produto_id = '$productId'";
    $result = $conn->query($sql);
    $stats = $result->fetch_assoc();
    return $stats;
}

// Função para gerar estatística de vendas por cliente
function getSalesStatsByClient($clientId) {
    $conn = db_connect();
    $sql = "SELECT COUNT(*) AS total_sales, SUM(total) AS total_revenue FROM pedidos WHERE cliente_id = '$clientId'";
    $result = $conn->query($sql);
    $stats = $result->fetch_assoc();
    return $stats;
}

?>