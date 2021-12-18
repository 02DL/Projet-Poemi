<?php

//----------PDO----------
$config = require('config.php');
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
];

$pdo = new PDO($config['dsn'], "", "", $options);
//----------PDO----------

//mettre les clé primaire en bas
$pdo->query('
  CREATE TABLE user (
    id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
    username varchar(100) NOT NULL,
    password text NOT NULL,
    image blob,
    image_nom varchar(100),
    CONSTRAINT U_username UNIQUE(username)
  )
');

$pdo->query('
  CREATE TABLE post (
    id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
    author varchar(100) NOT NULL,
    post_content varchar(1000) NOT NULL,
    FOREIGN KEY(author) REFERENCES user(username)
  )
');
