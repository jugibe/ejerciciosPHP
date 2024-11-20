Script para crear la tabla e insertar varios usuarios de prueba
CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(50) NOT NULL,
    apellido VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE
);

INSERT INTO usuarios (nombre, apellido, email) VALUES ('Juan', 'Pérez', 'juan.perez@example.com');
INSERT INTO usuarios (nombre, apellido, email) VALUES ('Ana', 'Martínez', 'ana.martinez@example.com');
INSERT INTO usuarios (nombre, apellido, email) VALUES ('Carlos', 'García', 'carlos.garcia@example.com');
INSERT INTO usuarios (nombre, apellido, email) VALUES ('María', 'López', 'maria.lopez@example.com');
INSERT INTO usuarios (nombre, apellido, email) VALUES ('Luis', 'Hernández', 'luis.hernandez@example.com');
INSERT INTO usuarios (nombre, apellido, email) VALUES ('Elena', 'Rodríguez', 'elena.rodriguez@example.com');
INSERT INTO usuarios (nombre, apellido, email) VALUES ('Miguel', 'González', 'miguel.gonzalez@example.com');
INSERT INTO usuarios (nombre, apellido, email) VALUES ('Sofía', 'Fernández', 'sofia.fernandez@example.com');
INSERT INTO usuarios (nombre, apellido, email) VALUES ('Javier', 'Sánchez', 'javier.sanchez@example.com');
INSERT INTO usuarios (nombre, apellido, email) VALUES ('Laura', 'Díaz', 'laura.diaz@example.com');
