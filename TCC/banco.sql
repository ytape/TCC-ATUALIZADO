
CREATE DATABASE IF NOT EXISTS angellips;
USE angellips;

CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100),
    usuario VARCHAR(50) UNIQUE,
    email VARCHAR(100) UNIQUE,
    senha VARCHAR(255),
    codigo_verificacao VARCHAR(6),
    verificado BOOLEAN DEFAULT FALSE
);
