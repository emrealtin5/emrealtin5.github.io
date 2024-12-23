<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $to = 'emrealtin1107@gmail.com'; // Kendi e-posta adresinizle değiştirmelisiniz
    $subject = 'Yeni Mesaj';
    $body = "Ad Soyadı: $name\nEmail: $email\nMesaj: $message";
    $headers = "From: $email\r\n";

    if (mail($to, $subject, $body, $headers)) {
        echo "Mesajınız gönderildi.";
    } else {
        echo "Mesaj gönderilirken bir hata oluştu.";
    }
}
