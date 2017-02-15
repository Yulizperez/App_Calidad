<?php
include_once 'baseDeDatos.php';
$host = $_POST['host'];
$user = $_POST['user'];
$password = $_POST['password'];
$db = new Create_database($host,$user,$password);
$db->my_db();
$db->clie();

echo "Base de datos creada con exito";
                               
//header('Location: PSP0/../../../index.php');