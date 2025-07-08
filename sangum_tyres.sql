CREATE DATABASE sangum_tyres;

USE sangum_tyres;

CREATE TABLE tyres (
    id INT(10) PRIMARY KEY,
    tyresize VARCHAR(100) NOT NULL,
    tyrenumber VARCHAR(100) NOT NULL,
    price DECIMAL(10, 2) NOT NULL,
    quantity INT NOT NULL
);