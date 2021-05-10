-- create database -- 
CREATE DATABASE dbname;
CREATE DATABASE IF NOT EXISTS DBName;

-- create tables --
    -- create table admin --
CREATE TABLE admin(
    id SMALLINT NOT NULL auto_increment primary key ,
    name VARCHAR(40) NOT NULL ,
    email VARCHAR(40) NOT NULL ,
    phone INT(9) NOT NULL
);

-- add column -- 
ALTER TABLE admin ADD COLUMN password VARCHAR(225) NOT NULL AFTER email;
