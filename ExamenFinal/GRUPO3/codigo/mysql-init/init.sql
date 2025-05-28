CREATE DATABASE IF NOT EXISTS casa_del_cafe CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

USE casa_del_cafe;

CREATE TABLE IF NOT EXISTS usuario (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    correo VARCHAR(100) NOT NULL UNIQUE,
    clave VARCHAR(255) NOT NULL
);

INSERT INTO usuario (nombre, correo, clave) 
VALUES ('Administrador', 'administrador@gmail.com', 'Test123');

