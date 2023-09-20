<?php
require './database.php';
require '../config/constant.php';
session_start();

if (isset($_POST['signin-submit'])) {
    //get form data
    $username = filter_var($_POST['username'], FILTER_SANITIZE_SPECIAL_CHARS);
    $password = filter_var($_POST['password'], FILTER_SANITIZE_SPECIAL_CHARS);
    if (!$username) {
        $_SESSION['signin'] = "Vui lòng nhập thông tin";
    } elseif (!$password) {
        $_SESSION['signin'] = "Vui lòng nhập mật khẩu";
    } else {
        // fecth user from database
        $fetch_user_query = "SELECT * FROM users WHERE user = '$username'  ";
        $fecth_user_result = mysqli_query($conn, $fetch_user_query); 

        if (mysqli_num_rows($fecth_user_result) == 1) {
            $user_record = mysqli_fetch_assoc($fecth_user_result);
            $db_password = $user_record['password'];
            // compare form password with database
            if (md5($password)==$db_password) {
                $_SESSION['sigin-succes'] = 'login thành công';
                echo $_SESSION['sigin-succes'];
                header('location: ' . ROOT_URL_ADMIN . '/index.php');
            } else {
                $_SESSION['signin'] = "Sai mật khẩu, vui lòng nhập lại!";
            }
        } else {
            $_SESSION['signin'] = "Người dùng không tồn tại";
        }
    }

    // if any problem, redirect back to signin page with login data
    if (isset($_SESSION['signin'])) {
        $_SESSION['signin-data'] = $_POST;
        echo 'loi o day 1';
        header('location: ' . ROOT_URL . '/login.php');
        die();
    }
} else {

    echo $_SESSION['sigin-succes'];
}
