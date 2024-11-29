
<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $role = $_POST['role'];
    $query = $_POST['query'];

    $mail = new PHPMailer(true); // Remove 'true' if your PHP version doesn't support exceptions

    try {
        //Server settings
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'agrovisiontechnova@gmail.com'; // Your Gmail address
        $mail->Password = 'omik xrwa mnak wwnz'; // Your Gmail password
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;
        $mail->setFrom($email, $name);

        //Recipients
        $mail->setFrom($email, $name);
        $mail->addAddress('agrovisiontechnova@gmail.com'); // Recipient email address

        // Content
        $mail->isHTML(false);
        $mail->Subject = 'New Contact Us Form Submission';
        $mail->Body    = "
        Name: $name\n
        Phone: $phone\n
        Email: $email\n
        Role: $role\n
        Query: $query\n
        ";

        $mail->send();
        echo 'Your query has been sent successfully!';
    } catch (Exception $e) {
        echo "There was an error sending your query. Please try again. Mailer Error: {$mail->ErrorInfo}";
    }
}
?>
