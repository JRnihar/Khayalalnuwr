<?php
// Start session
session_start();

// Include PHPMailer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Get form data
    $name = isset($_POST['name']) ? trim($_POST['name']) : '';
    $phone = isset($_POST['phone']) ? trim($_POST['phone']) : '';
    $email = isset($_POST['email']) ? trim($_POST['email']) : '';
    $message = isset($_POST['message']) ? trim($_POST['message']) : '';
    
    // Validate form data
    if (empty($name) || empty($phone) || empty($email) || empty($message)) {
        $_SESSION['form_status'] = 'error';
        $_SESSION['form_message'] = 'Please fill in all fields.';
        header("Location: contact.php");
        exit();
    }
    
    // Validate email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['form_status'] = 'error';
        $_SESSION['form_message'] = 'Please enter a valid email address.';
        header("Location: contact.php");
        exit();
    }
    
    // Create PHPMailer instance
    $mail = new PHPMailer(true);
    
    try {
        //Server settings
        $mail->isSMTP();
        $mail->Host       = 'mail.khayalalnuwr.com';           // CHANGE: Your domain's SMTP (usually mail.yourdomain.com)
        $mail->SMTPAuth   = true;
        $mail->Username   = 'info@khayalalnuwr.com';           // CHANGE: Your domain email
        $mail->Password   = 'your-email-password';             // CHANGE: Your email password from cPanel
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;                               // Try 587 first, if not working use 465
        
        //Recipients
        $mail->setFrom('info@khayalalnuwr.com', 'Khayal Alnuwr Contact Form');  // CHANGE: Your domain email
        $mail->addAddress('info@khayalalnuwr.com');                              // CHANGE: Where you want to receive emails
        $mail->addReplyTo($email, $name);
        
        //Content
        $mail->isHTML(false);
        $mail->Subject = 'New Contact Form Submission from ' . $name;
        $mail->Body    = "You have received a new message from the contact form.\n\n" .
                        "Name: " . $name . "\n" .
                        "Phone: " . $phone . "\n" .
                        "Email: " . $email . "\n\n" .
                        "Message:\n" . $message;
        
        // Send email
        $mail->send();
        
        $_SESSION['form_status'] = 'success';
        $_SESSION['form_message'] = 'Thank you! Your message has been sent successfully. We will get back to you soon.';
        
    } catch (Exception $e) {
        $_SESSION['form_status'] = 'error';
        $_SESSION['form_message'] = 'Sorry, there was an error sending your message. Please try again later.';
    }
    
    // Redirect back to contact page
    header("Location: contact.php");
    exit();
    
} else {
    // If not POST request, redirect to contact page
    header("Location: contact.php");
    exit();
}
?>