CREATE DATABASE reparto;

/* Tabla Usuario */

CREATE TABLE usuario (
idUsuario int primary key auto_increment,
nombre varchar(30),
correo varchar(30),
sexo varchar(10),
fechaNacimiento varchar(30)
);

INSERT INTO usuario (idUsuario, nombre, correo, sexo, fechaNacimiento)
VALUES ('','Jonathan', 'jonathan@gmail.com', 'Hombre', '01-Febrero-1997');

INSERT INTO usuario (idUsuario, nombre, correo, sexo, fechaNacimiento)
VALUES ('','Dorian', 'dorian@gmail.com', 'Hombre', '18-Octubre-2018');

INSERT INTO usuario (idUsuario, nombre, correo, sexo, fechaNacimiento)
VALUES ('','Omar', 'omar@gmail.com', 'Hombre', '19-Septiembre-1991');

INSERT INTO usuario (idUsuario, nombre, correo, sexo, fechaNacimiento)
VALUES ('','Micaela', 'micaela@gmail.com', 'Mujer', '11-Agosto-1995');

INSERT INTO usuario (idUsuario, nombre, correo, sexo, fechaNacimiento)
VALUES ('','Andrea', 'andrea@gmail.com', 'Mujer', '21-Mayo-1998');

/* Tabla Administrador */

CREATE TABLE administrador (
id int primary key auto_increment,
nombre varchar(30),
contrasena varchar(30)
);

INSERT INTO administrador (id, nombre, contrasena)
VALUES ('','Dorian','eoidmi3');

INSERT INTO administrador (id, nombre, contrasena)
VALUES ('','Jonathan','roeoij');

/* Tabla Repartidor */

CREATE TABLE Repartidor(
ID_Repartidor int primary key auto_increment,
Nombre varchar(30),
Apellido varchar(30),
Correo varchar(30),
Sexo varchar(30),
FechaNacimiento varchar(30)
);

INSERT INTO Repartidor (ID_Repartidor, Nombre, Apellido, Correo, Sexo, FechaNacimiento)
VALUES ('','Oscar','Sanchez','oscar@gmail.com','Hombre','17-Abril-1995');

INSERT INTO Repartidor (ID_Repartidor, Nombre, Apellido, Correo, Sexo, FechaNacimiento)
VALUES ('','Irving','Reyes','irving@gmail.com','Hombre','10-Septiembre-1991');

INSERT INTO Repartidor (ID_Repartidor, Nombre, Apellido, Correo, Sexo, FechaNacimiento)
VALUES ('','David','Poot','david@gmail.com','Hombre','05-Diciembre-1991');

/* Llave Foranea ID_VehiculoRepartidor */
ALTER TABLE Repartidor
Add ID_VehiculoRepartidor int,
ADD FOREIGN KEY (ID_VehiculoRepartidor) 
REFERENCES VehiculoRepartidor (ID_VehiculoRepartidor);

/* Tabla VehiculoRepartidor */

CREATE TABLE VehiculoRepartidor(
ID_VehiculoRepartidor int primary key auto_increment,
Tipo varchar(30) ,
Marca varchar(30),
Modelo varchar(30),
Anio int,
Color varchar(30),
Placa varchar(30)
);

INSERT INTO VehiculoRepartidor (ID_VehiculoRepartidor, Tipo, Marca, Modelo, Anio, Color, Placa)
VALUES ('','Motocicleta','Yamaha','Fazer','2018','Gris','FHG-324');

INSERT INTO VehiculoRepartidor (ID_VehiculoRepartidor, Tipo, Marca, Modelo, Anio, Color, Placa)
VALUES ('','Motocicleta','Honda','XX20','2019','Negro','RGR-443');

INSERT INTO VehiculoRepartidor (ID_VehiculoRepartidor, Tipo, Marca, Modelo, Anio, Color, Placa)
VALUES ('','Motocicleta','Suzuki','S200','2018','Blanca','DFS-117');
