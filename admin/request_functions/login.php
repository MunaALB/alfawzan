<?php
session_start();
ob_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include '../includes/db_connection.php';


    $email = '';
    $password = '';

    if (isset($_POST['email'])) {
        $email = $_POST['email'];
        $_SESSION['isLogged'] = true;
    } else {
        header("Location: ../login.php");
    }

    if (isset($_POST['password'])) {
        $password = $_POST['password'];
        $_SESSION['isLogged'] = true;
    } else {
        header("Location: login.php");
    }

    global $con;
    $query = $con->prepare("SELECT * from users WHERE email = ? AND password = ?;");
    $query->execute(
        array($email, $password)
    );
    $count = $query->rowCount();

    $result = $query->fetch();

    if ($count > 0) {
        $_SESSION['userId'] = $result['ID'];
        header("Location: ../index.php");
    } else {
        echo " تأكد من البريد الإلكتروني او كلمة المررور ";
    }
} else {
    header("Location: ../login.php");
    die();
}
