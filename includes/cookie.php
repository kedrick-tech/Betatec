<?php
// cookie.php

// Função para criar um cookie
function createCookie($name, $value, $expire) {
    setcookie($name, $value, $expire);
}

// Função para recuperar o valor de um cookie
function getCookie($name) {
    return $_COOKIE[$name];
}

// Função para excluir um cookie
function deleteCookie($name) {
    setcookie($name, '', time() - 3600);
}

?>