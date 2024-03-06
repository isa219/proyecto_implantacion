CREATE DATABASE proyecto_imp;
USE proyecto_imp;
CREATE TABLE usuario (
usuario_id INT(5) NOT NULL AUTO_INCREMENT PRIMARY KEY,
nombres VARCHAR(35) NOT NULL,
correo VARCHAR(100) NOT NULL,
clave VARCHAR(80) NOT NULL,
tipo_usuario VARCHAR(20)
);
CREATE TABLE pisos (
Codigo_piso INT AUTO_INCREMENT,
calle VARCHAR(40) NOT NULL,
numero INT NOT NULL,
piso INT NOT NULL,
puerta VARCHAR(5) NOT NULL,
cp INT NOT NULL,
metros INT NOT NULL,
zona VARCHAR (15),
precio FLOAT NOT NULL,
imagen VARCHAR(100) NOT NULL,
usuario_id INT(5)references usuario,
PRIMARY KEY (Codigo_piso,usuario_id)
);
CREATE TABLE comprados (
usuario_comprador INT(5) REFERENCES usuario (usuario_id),
Codigo_piso INT REFERENCES pisos,
Precio_final FLOAT NOT NULL
);