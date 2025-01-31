<<<<<<< HEAD
<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullName = !empty($_POST['full_name']) ? htmlspecialchars($_POST['full_name']) : null;
    $email = !empty($_POST['email']) ? filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) : null;
    $phoneNumber = !empty($_POST['phone_number']) ? htmlspecialchars($_POST['phone_number']) : '';
    $subject = !empty($_POST['subject']) ? htmlspecialchars($_POST['subject']) : null;
    $message = !empty($_POST['message']) ? htmlspecialchars($_POST['message']) : null;

    // Create a new PHPMailer instance
    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com'; // Use your email provider's SMTP server
        $mail->SMTPAuth = true;
        $mail->Username = 'ruzzledarwinchua@gmail.com'; // Replace with your email
        $mail->Password = 'nmcd bkqu kxqr amju'; // Use your Gmail app password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        // Recipients
        $mail->setFrom($email, $fullName); // Sender's email and name
        $mail->addAddress('ruzzledarwinchua@gmail.com'); // Your email

        // Email content
        $mail->isHTML(true);
        $mail->Subject = "New Message from: $fullName - $subject";
        $mail->Body = "
            <h2>New Message from Porfolio Form</h2>
            <p><strong>Full Name:</strong> $fullName</p>
            <p><strong>Email:</strong> $email</p>
            <p><strong>Phone Number:</strong> $phoneNumber</p>
            <p><strong>Subject:</strong> $subject</p>
            <p><strong>Message:</strong><br>$message</p>
        ";

        // Send email
        $mail->send();
        echo "Message has been sent successfully!";
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: " . $mail->ErrorInfo;
    }
}
?>
=======
<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullName = !empty($_POST['full_name']) ? htmlspecialchars($_POST['full_name']) : null;
    $email = !empty($_POST['email']) ? filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) : null;
    $phoneNumber = !empty($_POST['phone_number']) ? htmlspecialchars($_POST['phone_number']) : '';
    $subject = !empty($_POST['subject']) ? htmlspecialchars($_POST['subject']) : null;
    $message = !empty($_POST['message']) ? htmlspecialchars($_POST['message']) : null;

    // Create a new PHPMailer instance
    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com'; // Use your email provider's SMTP server
        $mail->SMTPAuth = true;
        $mail->Username = 'ruzzledarwinchua@gmail.com'; // Replace with your email
        $mail->Password = 'nmcd bkqu kxqr amju'; // Use your Gmail app password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        // Recipients
        $mail->setFrom($email, $fullName); // Sender's email and name
        $mail->addAddress('ruzzledarwinchua@gmail.com'); // Your email

        // Email content
        $mail->isHTML(true);
        $mail->Subject = "New Message from: $fullName - $subject";
        $mail->Body = "
            <h2>New Message from Porfolio Form</h2>
            <p><strong>Full Name:</strong> $fullName</p>
            <p><strong>Email:</strong> $email</p>
            <p><strong>Phone Number:</strong> $phoneNumber</p>
            <p><strong>Subject:</strong> $subject</p>
            <p><strong>Message:</strong><br>$message</p>
        ";

        // Send email
        $mail->send();
        echo "Message has been sent successfully!";
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: " . $mail->ErrorInfo;
    }
}
?>
>>>>>>> ca99781 (Initial commit)
