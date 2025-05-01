CREATE DATABASE proyecto;

USE proyecto;

CREATE TABLE rols (
  id INT PRIMARY KEY AUTO_INCREMENT,
  rol VARCHAR(50),
  description TEXT,
  state BOOLEAN
);

CREATE TABLE users (
  ci VARCHAR(20) PRIMARY KEY,
  names VARCHAR(50),
  lastnames VARCHAR(100),
  age INT,
  mail VARCHAR(100),
  phone INT,
  id_rol INT,
  FOREIGN KEY (id_rol) REFERENCES rols (id)
);

INSERT INTO
  rols (rol, description, state)
VALUES
  ('Gerente', 'Gerente de la empresa', TRUE),
  (
    'Recursos Humanos',
    'Administra los recursos humanos de la empresa',
    TRUE
  ),
  (
    'Ing. en Sistemas',
    'Administra los sistemas de la empresa',
    TRUE
  ),
  (
    'Ing. en Redes',
    'Administra las redes de la empresa',
    FALSE
  ),
  (
    'Ing. en Marketing',
    'Administra el marketing de la empresa',
    TRUE
  );

INSERT INTO
  users (ci, names, lastnames, age, mail, phone, id_rol)
VALUES
  (
    '12783464',
    'Juana',
    'Quispe Gutierrez',
    24,
    'quispejuana@gmail.com',
    74563267,
    2
  ),
  (
    '24672718-E',
    'Maria Elena',
    'Flores Campos',
    27,
    'florescamposmaria@gmail.com',
    65738592,
    5
  );

CREATE VIEW UserList AS
SELECT
  u.ci,
  u.names,
  u.lastnames,
  u.age,
  u.mail,
  u.phone,
  r.rol
FROM
  users AS u
  JOIN rols AS r ON u.id_rol = r.id;

CREATE VIEW RolsList AS
SELECT
  id,
  rol,
  description,
  CASE
    WHEN state = 1 THEN 'Activo'
    ELSE 'Inactivo'
  END AS state
FROM
  rols;
