<?php


    $email = $_POST["email"];
    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $branch = $_POST["chi-nhanh"];
    $service = $_POST["dich-vu"];
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
    
    $_SESSION['mess']="Đã gửi thông báo vào email, vui lòng kiểm tra thông tin.";
    


        
?>