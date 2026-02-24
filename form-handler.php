<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'info@testwebsite.com'; // اسم المرسل 

$email_subject = "New Form Submission"; // عنوان النص

$email_body = "User Name: $name.\n".
               "User Email: $visitor_email.\n".
                "Subject: $subject.\n".
                 "User Message: $message .\n"; // متن النص (الرسالة)

$to = 'almhsna107@gmail.com'; // مستقبل الرسالة

$headers = "From: $email_from \r\n"; // مصدر الرد

$headers .= "Reply-To: $visitor_email \r\n"; // مستقبل الرد


mail($to, $email_subject, $email_body, $headers); // تفاصيل العملية

header("Location: contact.html");
?>