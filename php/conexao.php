<?php 

session_start();

$server = 'localhost';
$db_name = 'heitor';
$username = 'root';
$password = '';

$conn = mysqli_connect($server, $username, $password, $db_name) or die('A conexão com o banco falhou: ' . mysqli_connect_error());