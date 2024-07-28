<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$mail = new PHPMailer(true);

try {
    // إعدادات خادم SMTP
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com'; // استبدل بـ SMTP الخادم الخاص بك
    $mail->SMTPAuth = true;
    $mail->Username = 'your_email@gmail.com'; // استبدل بـ اسم المستخدم SMTP
    $mail->Password = 'your_password'; // استبدل بـ كلمة المرور SMTP
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

    // إعدادات البريد الإلكتروني
    $mail->setFrom('your_email@gmail.com', 'Mailer');
    $mail->addAddress('recipient@example.com'); // استبدل بـ عنوان المستلم

    // المحتوى
    $mail->isHTML(true);
    $mail->Subject = 'اختيارات الحقيبة المدرسية';
    $mail->Body    = 'تم حفظ اختياراتك بنجاح!';
    $mail->AltBody = 'تم حفظ اختياراتك بنجاح!';

    $mail->send();
    echo 'تم إرسال البريد الإلكتروني بنجاح.';
} catch (Exception $e) {
    echo "حدث خطأ أثناء إرسال البريد الإلكتروني: {$mail->ErrorInfo}";
}
?>
