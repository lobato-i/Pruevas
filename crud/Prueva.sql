CREATE DATABASE IF NOT EXISTS Prueba;

USE Prueba;

CREATE TABLE IF NOT EXISTS Test (
  id INT(11) NOT NULL AUTO_INCREMENT,
  a int(11) NOT NULL,
  b varchar(255) NOT NULL,
  CONSTRAINT id PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


