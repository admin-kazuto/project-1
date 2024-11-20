<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

function sendResetEmail($email, $message)
{
    $mail = new PHPMailer(true);

    try {
        // Thiết lập cấu hình cho SMTP
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';  // SMTP server của Gmail (hoặc của nhà cung cấp dịch vụ khác)
        $mail->SMTPAuth = true;
        $mail->Username = 'duan1forgotpass@gmail.com'; // Địa chỉ Gmail của bạn
        $mail->Password = 'qmks kqhm dsfz zvoo'; // Mật khẩu ứng dụng Gmail hoặc App 
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Mã hóa TLS
        $mail->Port = 587;

        // Thông tin người gửi và người nhận
        $mail->setFrom('duan1forgotpass@gmail.com', 'Your Website'); // Email người gửi
        $mail->addAddress($email); // Email người nhận (từ tham số `$email`)

        // Nội dung email
        $mail->isHTML(true); // Email ở định dạng HTML
        $mail->Subject = 'OTP code to reset your password';
        $mail->Body    = "<p>$message</p>"; // Nội dung HTML của email
        $mail->AltBody = $message; // Nội dung thuần văn bản của email

        $mail->send();
        return true; // Trả về true nếu gửi thành công
    } catch (Exception $e) {
        echo "Email không thể gửi. Lỗi: {$mail->ErrorInfo}";
        return false; // Trả về false nếu có lỗi
    }
}
