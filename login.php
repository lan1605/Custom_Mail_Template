<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập vào hệ thống</title>
    <link rel="stylesheet" href="./assets/css/login.css">
</head>
<body>
    <?php 
        require('./config/constant.php');
        session_start();
        $username = $_SESSION['signin-data']['username'] ?? null;
        $password = $_SESSION['signin-data']['password'] ?? null;
        unset($_SESSION['signin-data']);
    ?>
    <div class="wrapper">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                    <img src="./assets/images/logo-mdsco-blue.png" alt="Logo-MDSCO">
                </div>
                    <?php if (isset($_SESSION['signin'])) :  ?>
                        <div class="text-danger">
                                <?= $_SESSION['signin'];
                                unset($_SESSION['signin']);?>
                                </div>
                    <?php endif ?> 
                <form action="<?php echo './handle/signin-logic.php'?>" method="post" class="login-form">
                    <div class="login-form--content">
                        <div class="login-form--info">
                            <label>Tên đăng nhập</label>
                            <input type="text" name="username" id="" class="login-form--input" placeholder="Tên đăng nhập" >
                        </div>
                        <div class="login-form--info">
                            <label>Mật khẩu</label>
                           <div id="password">
                            <input type="password" name="password" id="passwordInput" class="login-form--input" placeholder="Mật khẩu" >
                            <img src="./assets/images/icons/visible.png" alt="" srcset="" class="icon-password">
                           </div>
                        </div>
                    </div>
                    <div class="login-form--button">
                    <button type="submit" class="form-btn" name="signin-submit">Đăng nhập</button>
                    </div>
                </form>
                <a href="<?php echo ROOT_URL?>" class="login-link">
                    <span>←</span>
                    Trở về trang khuyến mãi
                </a>
            </div>
        </div>
    </div>
    <script src="./assets/js/login.js"></script>
</body>
</html>