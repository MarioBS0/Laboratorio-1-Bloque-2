CREATE DATABASE crud_juegos;

USE crud_videojuegos;

CREATE TABLE videojuegos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(255) NOT NULL,
    genero VARCHAR(100) NOT NULL,
    plataforma VARCHAR(100) NOT NULL,
    precio DECIMAL(10, 2) NOT NULL
);


