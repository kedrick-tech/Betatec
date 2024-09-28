<?php
// reports.php

// Função para gerar relatório de vendas por período
function getSalesReport($startDate, $endDate) {
    $conn = db_connect();
    $sql = "SELECT * FROM pedidos WHERE data_pedido BETWEEN '$startDate' AND '$endDate'";
    $result = $conn->query($sql);
    $sales = array();
    while ($row = $result->fetch_assoc()) {
        $sales[] = $row;
    }
    return $sales;
}

// Função para gerar relatório de vendas por produto
function getSalesReportByProduct($productId) {
    $conn = db_connect();
    $sql = "SELECT * FROM pedidos WHERE produto_id = '$productId'";
    $result = $conn->query($sql);
    $sales = array();
    while ($row = $result->fetch_assoc()) {
        $sales[] = $row;
    }
    return $sales;
}

// Função para gerar relatório de vendas por cliente
function getSalesReportByClient($clientId) {
    $conn = db_connect();
    $sql = "SELECT * FROM pedidos WHERE cliente_id = '$clientId'";
    $result = $conn->query($sql);
    $sales = array();
    while ($row = $result->fetch_assoc()) {
        $sales[] = $row;
    }
    return $sales;
}

?>