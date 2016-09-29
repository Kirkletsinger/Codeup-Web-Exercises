<?php
const DB_HOST = '127.0.0.1';
const DB_NAME = 'parks_db';
const DB_USER = 'parks_user';
const DB_PASS = 'codeup';
$dbc = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . "", DB_USER, DB_PASS);
// var_dump($dbc);
$dbc->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// echo $dbc->getAttribute(PDO::ATTR_CONNECTION_STATUS) . "\n";
