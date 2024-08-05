<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil data dari form dan menyaringnya
    $name = htmlspecialchars(trim($_POST["name"]));
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $msg = htmlspecialchars(trim($_POST["msg"]));

    // Validasi email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format.";
        exit;
    }

    $to = "mhmmdazizch@gmail.com"; // Ganti dengan email Anda
    $subject = "New Contact Form Submission";
    $message = "Name: $name\nEmail: $email\nMessage: $msg";
    $headers = "From: $email\r\n" . "Reply-To: $email\r\n";

    if (mail($to, $subject, $message, $headers)) {
        echo "Email sent successfully!";
    } else {
        echo "Failed to send email.";
    }
}
?>
