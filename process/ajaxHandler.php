<?php 
// include "../bootstrap/constants.php";
// include "../libs/helpers.php";
include "../bootstrap/init.php";
if(!isAjaxRequest()){
    diePage("Invalid Request!");
}
if(!isset($_POST['action']) || empty($_POST['action'])){
    diePage("Invalid Action!");
}
switch($_POST['action']){
    case "addFolder":
        if(!isset($_POST['folderName']) || strlen($_POST['folderName']) < 3){
            echo "Your folder name must be bigger than two letters!";
            die();
        }
        echo addFolders($_POST['folderName']);
    break;
    case "addTask":
        // var_dump($_POST);
    break;
    default:
        diePage("Invalid Request!");
}
?>