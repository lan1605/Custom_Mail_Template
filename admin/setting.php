<?php
        session_start();
        require ('../config/constant.php');
        require '../handle/database.php';
        $username = $_SESSION['signin-data']['username'] ?? null;
        $password = $_SESSION['signin-data']['password'] ?? null;
        unset($_SESSION['signin-data']);
        $Logger = false;
        if (isset($_SESSION['sigin-succes'])) {
        $Logger = true;
        }
        if (!$Logger) {
            header("Location: ".ROOT_URL."login.php");
        }
        require ('./components/header.php');
        require ('./components/sidebar.php');
        require ('./components/notication.php');
?>

