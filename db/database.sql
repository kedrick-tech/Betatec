-- Criação do banco de dados
CREATE DATABASE betatec_ecommerce;

USE betatec_ecommerce;

CREATE TABLE clientes (
  id INT PRIMARY KEY,
  nome VARCHAR(255),
  endereco VARCHAR(255),
  email VARCHAR(255),
  senha VARCHAR(255)
);

CREATE TABLE produtos (
  id INT PRIMARY KEY,
  titulo VARCHAR(255),
  descricao TEXT,
  preco DECIMAL(10, 2),
  imagem VARCHAR(255)
);

CREATE TABLE pedidos (
  id INT PRIMARY KEY,
  cliente_id INT,
  produto_id INT,
  quantidade INT,
  data_pedido DATE,
  FOREIGN KEY (cliente_id) REFERENCES clientes(id),
  FOREIGN KEY (produto_id) REFERENCES produtos(id)
);

CREATE TABLE administradores (
  id INT PRIMARY KEY,
  nome VARCHAR(255),
  senha VARCHAR(255)
);