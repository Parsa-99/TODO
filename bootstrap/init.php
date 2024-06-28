<?php 
include "bootstrap/constants.php";
include "bootstrap/config.php";
include "vendor/autoload.php";
include "libs/helpers.php";
include "libs/lib-auth.php";
include "libs/lib-tasks.php";
try{
$pdo = new PDO("mysql:dbname=$database_config->db;host=$database_config->host","$database_config->user","$database_config->pass");
}catch(PDOException $e){
    diePage('Connection faild: ' . $e->getMessage());
}
echo ".";
?>