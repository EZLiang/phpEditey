CREATE DATABASE phpdb;
CREATE TABLE users (
  uname VARCHAR(255),
  pswd VARCHAR(255)
);

CREATE TABLE files (
  user VARCHAR(255),
  fname VARCHAR(255),
  contents VARCHAR(65535)
);
