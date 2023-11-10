CREATE DATABASE mi_proyecto;


USE mi_proyecto;

CREATE TABLE usuarios (
    id INT PRIMARY KEY,
    nombre VARCHAR(50),
    apellido VARCHAR(50),
    cedula INT
);


INSERT INTO usuarios (id, nombre, apellido, cedula) VALUES
(1, 'Andrés', 'Pineda', 100000000),
(2, 'Camilo', 'Gutiérrez', 200000000),
(3, 'José', 'Pardo', 300000000),
(4, 'Nicolás', 'Pérez', 300000000),
(5, 'Laura', 'Espitia', 400000000);
