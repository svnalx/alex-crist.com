<?php
/*
// Sensitive information, keep in private_html
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load composer's autoloader
require 'vendor/autoload.php';

$mail = new PHPMailer(true); // true for exceptions
try {
    //Server settings
    $mail->SMTPDebug = 2;
    $mail->isSMTP();
    $mail->Port = '465';
    $mail->Host = 'alex-crist.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'alex@alex-crist.com';
    $mail->Password = 'qB3qwVG6hnd3OytF6Iz6';
    $mail->SMTPSecure = 'tls';
    
    
    //Recipients
    $mail->setFrom('alex@alex-crist.com', 'alex-crist.com');
    $mail->addAddress('alex@alex-crist.com', 'Alex Crist');
    
    $mail->isHTML(true);
    $mail->Subject = 'New contact from alex-crist.com!';
    $mail->Body = 'Body';
    $mail->AltBody = 'Alt body'; // non-html plain text
    
    $mail->send();
    echo 'Message has been sent';    
}  catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
*/
?>

<?php
/*
// Sensitive information, keep in private_html
// Swiftmailer
require_once('vendor/autoload.php');

// Create the Transport
$transport = (new Swift_SmtpTransport('alex-crist.com', 465))
    ->setUsername('alex@alex-crist.com')
    ->setPassword('qB3qwVG6hnd3OytF6Iz6')
    ;

// Create the Mailer using your created Transport
$mailer = new Swift_Mailer($transport);

// Create the message
$message = (new Swift_Message('A new message from alex-crist.com!'))
    ->setFrom(['alex@alex-crist.com' => 'Alex Crist'])
    ->setTo(['alex@alex-crist.com' => 'Alex Crist'])
    ->setBody('Here is the message')
    ;

// Send the message
$result = $mailer->send($message);
*/
?>

<form id="contact" action="" method="post">
    <input type="text" name="name" placeholder="Your name"><br>
    <input type="email" name="email" placeholder="Your email"><br>
    <textarea name="message" rows="6" placeholder="Message..."></textarea><br><br>
    <a class="btn" href="#">Send it</a>
  </form>
  
