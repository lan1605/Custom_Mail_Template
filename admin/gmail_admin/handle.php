<?php
require '../../handle/database.php';
session_start();
    
 if (isset($_POST['submit-add'])){
    $name = $_POST['name-content'];
    $subject = $_POST['subject-content'];
    $content = $_POST['content'];
    $send = $_POST['send-content'];
    $role = $_POST['role'];
   
    if ($_POST['content']!==""){
        $sql = "";
        if (isset($_POST['status'])){
            $check = mysqli_query($conn, "SELECT * FROM template_mail WHERE `status`='1' and `role`='$role'");
            if ($check){
                $update = mysqli_query($conn, "UPDATE `template_mail` SET `status`='0' WHERE `role`='$role'");
                if ($update){
                    $sql = "INSERT INTO `template_mail`(`name`, `subject`, `content`, `sender`,`status`, `role`) VALUES ('$name', '$subject', '$content', '$send','1','$role')";     
                }
            }
            else {
                $sql = "INSERT INTO `template_mail`(`name`, `subject`, `content`, `sender`,`status`, `role`) VALUES ('$name', '$subject', '$content', '$send','1','$role')";    
            }
        }
        else {
            $sql = "INSERT INTO `template_mail`(`name`, `subject`, `content`, `sender`,`status`, `role`) VALUES ('$name', '$subject', '$content', '$send','0','$role')";
        }
        if (mysqli_query($conn, $sql)){
            $_SESSION['success']="Đã thêm thành công";
        }
        else {
        }
    }
    else{
        $_SESSION['error']="Vui lòng nhập nội dung thông tin để gửi mail.";
    }
    if ($role === '1'){
        header("Location:../gmail-admin.php");
    }
    if ($role === '0'){
        header("Location:../gmail-guest.php");
    }
}

// Thay đổi trạng thái của mẫu
if (isset($_POST['check'])){
    $id_check = $_POST['check'];
    $result = mysqli_query($conn, "SELECT * FROM template_mail WHERE `id`='".$id_check."'");
    $resultSQL = mysqli_fetch_array($result);
    $role = $resultSQL['role'];
        $sqlActive = mysqli_query($conn, "UPDATE `template_mail` SET `status`='1' WHERE `role`='$role'");
        $sqlUnActive = mysqli_query($conn, "UPDATE `template_mail` SET `status`='0' WHERE `role`='$role' and `id`!='".$id_check."'");

        if ($sqlActive and $sqlUnActive){
        $name = $resultSQL['name'];
        $_SESSION['success']=$name." được áp dụng.";
    }
    else {
        $_SESSION['error']="Vui lòng thử lại.";
    }
    if ($role === '1'){
        header("Location:../gmail-admin.php");
    }
    if ($role === '0'){
        header("Location:../gmail-guest.php");
    }
}
// xóa
if (isset($_POST['delete-id'])){
    $check = $_POST['delete-id'];
    $result = mysqli_query($conn, "SELECT * FROM template_mail WHERE `id`='$check'");
    $resultSQL = mysqli_fetch_array($result);
    $role = $resultSQL['role'];
    $sqlDelete = mysqli_query($conn, "DELETE FROM `template_mail` WHERE id='".$_POST['delete-id']."'");
    if ($sqlDelete){
        $_SESSION['delete']="Đã xóa thành công";
    }
    
    if ($role === '1'){
        header("Location:../gmail-admin.php");
    }
    if ($role === '0'){
        header("Location:../gmail-guest.php");
    }
}
// sửa
if (isset($_POST['submit-edit'])){
    $name = $_POST['name-content'];
    $subject = $_POST['subject-content'];
    $content = $_POST['content'];
    $send = $_POST['send-content'];
    $role = $_POST['role'];
    $id = $_POST['submit-edit'];
    if ($_POST['content']!==""){
        $sql = "";
        if (isset($_POST['status'])){
            $check = mysqli_query($conn, "SELECT * FROM template_mail WHERE  id='$id'");

            if ($check){
                $update = mysqli_query($conn, "UPDATE `template_mail` SET `status`='0' WHERE role ='$role'");
                if ($update){  
                    $sql = "UPDATE `template_mail` SET `name`='$name',`subject`='$subject',`content`='$content',`sender`='$send',`status`='1',`role`='$role' WHERE id ='$id'";     
                }
            }
            else {
                $sql = "UPDATE `template_mail` SET `name`='$name',`subject`='$subject',`content`='$content',`sender`='$send',`status`='1',`role`='$role' WHERE id='$id'";        
            }
        }
        else {
            $sql = "UPDATE `template_mail` SET `name`='$name',`subject`='$subject',`content`='$content',`sender`='$send',`status`='0',`role`='$role' WHERE id='$id'";     
        }
        if (mysqli_query($conn, $sql)){
            $_SESSION['success']="Đã cập nhật thông tin.";
        }
        
    }
    else {
    }
    header("Location: ../edit-template.php?id=$id");
}
