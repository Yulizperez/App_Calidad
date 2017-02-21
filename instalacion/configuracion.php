<?php
include_once 'baseDeDatos.php';
$host = $_POST['host'];
$user = $_POST['user'];
$password = $_POST['password'];
$db = new Create_database($host,$user,$password);
$db->my_db();
$db->clie();

echo "La base de datos se ha creado con éxito";
                               
//header('Location: PSP0/../../../index.php');