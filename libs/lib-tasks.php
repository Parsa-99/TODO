<?php 
/*** Folder Function ***/
function deleteFolder($folder_id){
    global $pdo;
    $sql = "DELETE FROM Folders WHERE id = $folder_id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    return $stmt->rowCount();
}
function addFolders($Folder_Name){
    global $pdo;
    $current_user_id = getCurrentUserId();
    $sql = "INSERT INTO folders (name,user_id) VALUES(:folder_name, :user_id)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([':folder_name'=>$Folder_Name, ':user_id'=>$current_user_id]);
    return $stmt->rowCount();
}
// function getCurrentUserId(){
// // get login user id!!
//     return 1;
// }
function addFolder($data){
    global $pdo;
    $sql = "SELECT * FROM Folders";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $records = $stmt->fetchAll(PDO::FETCH_OBJ);
    return $records;
}
function getFolders(){
    global $pdo;
    $current_user_id = getCurrentUserId();
    $sql = "SELECT * FROM Folders WHERE user_id = $current_user_id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $records = $stmt->fetchAll(PDO::FETCH_OBJ);
    return $records;
}
function removeTasks(){
    return 1;
}
function addTasks(){
    return 1;
}
function getTasks(){
    return 1;
}
// function getTasks(){
//     return [1,2,3,4,5];
// }
?>