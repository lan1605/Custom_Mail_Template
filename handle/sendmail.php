<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require './PHPMailer/Exception.php';
require './PHPMailer/PHPMailer.php';
require './PHPMailer/SMTP.php';


    function send_mail($from,$to_name, $to, $phone, $branch, $service, $role){
        $mail = new PHPMailer(true);
        $mail->CharSet  = 'UTF-8';
        $mail->Encoding = 'base64';
        
        try {
            // $mail->SMTPDebug = SMTP::DEBUG_SERVER;
            $mail->SMTPDebug = 0;
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'phuonglantonhuynh@gmail.com';
            $mail->Password = 'fthlxnmfiznrvtsf'; 
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587; 
            $mail->isHTML(true); 
            $mail->setFrom($from, 'Hệ thống');
            $content="";
            $subject="";
            $send="";
            $resultContent="";
            if ($role==0){
                require './handle/database.php';
                $mail->addAddress($to, $to_name); 
                $mail->addAddress($to);
                // Content
                $sqlContent = mysqli_query($conn, "SELECT * FROM `template_mail` WHERE status = 1 and role=0");
                $result = mysqli_fetch_array($sqlContent);
                $resultContent = $result['content'];
                $subject = $result['subject'];
                $send = $result['sender'];
                }
            else {
                require './handle/database.php';
                $sql = mysqli_query($conn, "SELECT email FROM `email_admin` WHERE trang_thai = 1");
                foreach ($sql as $row){
                    $mail->addAddress($row['email'], "Admin"); 
                    $mail->addAddress($row['email']); 
                }
                $sqlContent = mysqli_query($conn, "SELECT * FROM `template_mail` WHERE status = 1 and role=1");
                $result = mysqli_fetch_array($sqlContent);
                $resultContent = $result['content'];
                $subject = $result['subject'];
                $send = $result['sender'];
            }
            $mail->Subject = $subject;
            $contentReplace =array( $to_name, $to, $phone, $branch, $service);
            $contentSql =array("{ten_nguoi_nhan}","{email}", "{so_dien_thoai}", "{chi_nhanh}", "{dich_vu}");
            $content = str_replace($contentSql,$contentReplace, $resultContent);
            $mail->Body = $content."<br/>".$send;
            $mail->send();
        
        } catch (Exception $e) {
            
        }
    }
?>