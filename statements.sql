CREATE DATABASE brokenauth;

USE brokenauth;

CREATE TABLE user(
id int NOT NULL auto_increment,
email varchar(255) NOT NULL,
password varchar(255) NOT NULL,
PRIMARY KEY(id) 
);