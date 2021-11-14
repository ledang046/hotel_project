<?php 

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php'; 
if(isset($_POST['emailsend']))
{
    $to_id = $_POST['emailsend'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
 $mail = new PHPMailer();
    $mail->IsSMTP();
    $mail->CharSet="UTF-8";
    $mail->SMTPSecure = 'tls';
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 587;
    $mail->Username = 'dangforprivate@gmail.com';
    $mail->Password = 'Dang1234';
    $mail->SMTPAuth = true;

    $mail->From = 'ledang046@gmail.com';
    $mail->FromName = 'Hotel Deluna';
    $mail->AddAddress($to_id);
    $mail->AddReplyTo('ledang046@gmail.com', 'Information');

    $mail->IsHTML(true);
    $mail->Subject    = "Hotel Deluna";
    $mail->AltBody    = "To view the message, please use an HTML compatible email viewer!";
    $mail->Body    = "Hello ". $name."<br>Welcome to our hotel."." We will contact you as soon as posible with this number: ".$phone;

    if(!$mail->Send())
    {
      echo "Mailer Error: " . $mail->ErrorInfo;
    }
    else
    {
      echo "Đã gửi email!";
    }
}
?>