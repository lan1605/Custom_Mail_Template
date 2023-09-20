<?php

$email = $_POST["email-popup"];
    $name = $_POST["name-popup"];
    $phone = $_POST["phone-popup"];
    $branch = $_POST["chi-nhanh-popup"];
    $service = $_POST["dich-vu-popup"];
    $admin = "phuonglantonhuynh@gmail.com";

    require './handle/database.php';
    $sql = "INSERT INTO `thong_tin`( `ho_ten`, `email`, `sdt`, `chi_nhanh`, `dich_vu`, `loai_uu_dai`) VALUES ('$name','$email','$phone','$branch','$service', '2')";

    if (mysqli_query($conn, $sql)) {
    } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    require './handle/sendmail.php';
    send_mail($admin, $name, $email,$phone, $branch, $service, 0);
    send_mail($admin, $name, $email,$phone, $branch, $service, 1);

    ini_set('session.gc_maxlifetime', 2);
    ini_set('session.gc_maxlifetime', 2);
    session_start();
    
    $_SESSION['mess-popup']="Đã gửi thông báo vào email, vui lòng kiểm tra lại thông tin.";

        
?>