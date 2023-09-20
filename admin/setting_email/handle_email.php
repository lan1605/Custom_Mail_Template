<?php
require '../../handle/database.php';
session_start();
// Thêm mới
if (isset($_POST['submit-add'])){
    $textarea = $_POST["email-textarea"];
    $array = explode("\r\n", $textarea);
    $dem = 0;
    $d = 0;
    $check = 0;
    if (isset($_POST['all_admin'])){
        $check = 1;
    }
    else {
        $check = 0;
    }
    foreach ($array as $key => $value) {
        $sqlCheck = "SELECT * FROM `email_admin` where `email` = '".trim($value)."'";
        echo trim($value);
        $result = mysqli_query($conn, $sqlCheck);
        if (!filter_var($value, FILTER_VALIDATE_EMAIL)) {
            $dem = $dem + 1;
        }
        else {
            if (mysqli_num_rows($result) > 0) {
                $d = $d +1;
            }
            else {
                $array[$key] = "'".trim($value)."'".','."'$check'";
            }
        }
    }
    $email_array = array_unique($array);
    echo $d;
    if ($dem === 0){
        if ($d === 0){
            $t = "(".implode("),(", $email_array).")";
            $sql = "INSERT INTO `email_admin`(email, trang_thai) VALUES $t";
            if (mysqli_query($conn, $sql)) {
                $_SESSION['success']="Đã thêm thành công";
            }  
        }
        else {
                $_SESSION['error']="Địa chỉ mail đã tồn tại.";
        }
    }
    else {
            $_SESSION['error']="Vui lòng kiểm tra lại mail.";
            $_SESSION['text']=$textarea;
    }
    header("Location:../index.php");
}
// Xóa 1 đối tượng
if (isset($_GET['delete-id'])){
    $resultDelete = mysqli_query($conn, "DELETE FROM `email_admin` WHERE id='".$_GET['delete-id']."'");
    if ($resultDelete){
       $_SESSION['delete']="Đã xóa thành công";
    }
    header("Location:../index.php");
}
// Sửa đối tượng
if (isset($_GET['edit-id'])){
    $text = $_GET['email-edit'];
    if ($text !== ""){
        $textDB = mysqli_query($conn, "SELECT `email` FROM `email_admin` WHERE  `id`='".$_GET['edit-id']."'");
        $check = mysqli_fetch_array($textDB)['email'];
        if (filter_var(trim($text), FILTER_VALIDATE_EMAIL)){
            if (strcmp(trim($check), trim($text)) !== 0){
                $resultEdit = mysqli_query($conn, "UPDATE `email_admin` SET `email`='".trim($text)."' WHERE `id`='".$_GET['edit-id']."'");
                if ($resultEdit){
                    $_SESSION['success']="Đã cập nhật thông tin.";
                }
                else {
                    $_SESSION['error'] = "bị lỗi";
                }
            }
        }
    }
    header("Location:../index.php");
}
// Thay đổi trạng thái gửi email cho admin
if (isset($_GET['status-id'])){
    $check  = mysqli_query($conn, "SELECT `trang_thai` FROM `email_admin` WHERE `id`='".$_GET['status-id']."'" );
    $result = mysqli_fetch_array($check)['trang_thai'];
    if ($result === '1'){
        $resultChange = mysqli_query($conn, "UPDATE `email_admin` SET `trang_thai`='0' WHERE `id`='".$_GET['status-id']."'");
    }
    if ($result === '0') {
        $resultChange = mysqli_query($conn, "UPDATE `email_admin` SET `trang_thai`='1' WHERE `id`='".$_GET['status-id']."'");
    }
    if ($resultChange){
        $_SESSION['success']="Đã cập nhật trạng thái.";
    }
    else{
        $_SESSION['error'] = "Bị lỗi, vui lòng thử lại";
    }
    header("Location:../index.php");
}
function idArray($ids){
    $idsArr = explode(",", $ids);
    $resultArr = implode(",",array_unique($idsArr));
    return $resultArr;
}
// Xóa nhiều đối tượng
if (isset($_POST['deleteAll'])){
    $result = idArray($_POST['ids']);
    $sql = mysqli_query($conn, "DELETE FROM `email_admin` WHERE id in ($result)");
    if ($sql){
        $_SESSION['delete']="Đã xóa thành công";
    }
    else {
        $_SESSION['error']="Bị lỗi, vui lòng thử lại.";
    }
    header("Location:../index.php");
}
// Chuyển đổi trạng thái cho nhiều đối tượng
if (isset($_POST['ChangeAll'])){
    $result = idArray($_POST['ids']);
    $sql =  mysqli_query($conn, "UPDATE `email_admin` SET `trang_thai`='1' WHERE id in ($result)");
    if ($sql){
        $_SESSION['success']="Đã thay đổi trạng thái thành công";
    }
    else {
        $_SESSION['error']="Bị lỗi, vui lòng thử lại.";
    }
    header("Location:../index.php");
}
?>