<?php
include '../includes/db_connection.php';

session_start();
ob_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $isError = false;




    $title     = $_POST["title"];
    $category     = $_POST["category"];
    $description = $_POST["description"];




    if (empty($title)) {

        $isError = true;
    }



    if (empty($description)) {

        $isError = true;
    }

    $imageName = "";
    if (isset($_FILES["image"]["name"])) {
        $image = $_FILES['image'];
        $imageName = rand(0, 100000) . "_" . $image['name'];
        move_uploaded_file($image['tmp_name'], "../../assets/images/" . $imageName);
    } else {
        $imageName = "delal-libya.png";
    }



    if ($isError == false) {
        global $con;
        $query = $con->prepare("INSERT INTO projects
         SET 
         title = ? ,
         image=? ,
         category_id=?,
         description = ? ;  ");

        $query->execute(
            array(
                $title, $imageName, $category, $description
            )
        );
    } else {
        echo '<div class="alert alert-danger" role="alert">حدث خطأ </div>';
    }
}
