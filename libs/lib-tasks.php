<?php 
function getFolders(){
    global $pdo;
    $sql = "SELECT * FROM Folders";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $records = $stmt->fetchAll();
    return $records;
}
function getTasks(){
    return [1,2,3,4,5];
}
?>