<?php
include "bootstrap/init.php";
use Hekmatinasser\Verta\Verta;
$datetime = verta();
// if now friday
// output 6
if(isset($_GET['delete_folder']) && is_numeric($_GET['delete_folder'])){
    $deletedCount = deleteFolder($_GET['delete_folder']);
    // echo "$deletedCount folders succesfully deleted!";
    // var_dump($_GET['delete_folder']);
}
// connect to db and get tasks
$folders = getFolders();

// var_dump($folders[1]->name);
// $tasks = getTasks();
include "tpl/tpl-index.php";