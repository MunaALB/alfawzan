<?php

include '../includes/db_connection.php';

session_start();
ob_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $isError = false;
    $id             = $_POST['id'];
    $title          = $_POST["title"];
    $category       = $_POST["category"];
    $description    = $_POST["description"];
    
    if (empty($title)) {

        $isError = true;
    }



    if (empty($description)) {

        $isError = true;
    }

    $imageName = "";
    if (isset($_FILES["image"]["name"])) {
        
        $image = $_FILES['image'];
        if($image['name'] == ''){
            $imageName = $_POST['old_image'];

        }else{

        $imageName = rand(0, 100000) . "_" . $image['name'];
        move_uploaded_file($image['tmp_name'], "../../assets/images/" . $imageName);
    } 
}

$query1 = $con->prepare(" UPDATE projects SET title = ? , description = ? , image = ? , category_id = ?   WHERE ID = ?" );
$query1->execute(array($title , $description , $imageName , $category ,$id ));



}