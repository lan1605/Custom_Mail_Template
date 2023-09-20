<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "db_clonethmmyvienngocdung";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    mysqli_set_charset($conn,"utf8");


    // Check connection
    if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
    }

    // $sql = "INSERT INTO `thong_tin`( `ho_ten`, `email`, `sdt`, `chi_nhanh`, `dich_vu`, `loai_uu_dai`) VALUES ('$name','$email','$phone','$branch','$service', '2')";

    // if (mysqli_query($conn, $sql)) {
    // } else {
    // echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    // }

?>
<!-- <?php
//     $servername = "localhost";
//     $username ="dev_clonethammyvien";
//     $password = "Yskwmq0P7";
//     $dbname = "dev_clonethammyvienngocdung";

//     // Create connection
//     $conn = mysqli_connect($servername, $username, $password, $dbname);
// $conn->set_charset("utf8");
//     // Check connection
//     if (!$conn) {
//     die("Connection failed: " . mysqli_connect_error());
//     }

//     $sql = "INSERT INTO `thong_tin`( `ho_ten`, `email`, `sdt`, `chi_nhanh`, `dich_vu`, `thoi_gian`, `loai_uu_dai`) VALUES ('$name','$email','$phone','$branch','$service','$time', '2')";

//     if (mysqli_query($conn, $sql)) {
//     } else {
//     echo "Error: " . $sql . "<br>" . mysqli_error($conn);
//     }

//     mysqli_close($conn);
?> -->