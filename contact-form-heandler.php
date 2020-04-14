<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'autoload.php';
if (sendMailToMe() == true) {
    echo 'Message send successfully';
} 
 
function sendMailToMe() {
    try {  

    $mail = new PHPMailer(true);                          // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'mail.attiremensbespoke.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'info@attiremensbespoke.com';                 // SMTP username
    $mail->Password = 'info@attire';                           // SMTP password
    $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 465;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('info@attiremensbespoke.com', 'Attire Mens Bespoke');
    $mail->addAddress('amitsharma18543@gmail.com');     // Add a recipient
    $mail->addReplyTo($_POST['email'], $_POST['name']);

    $mail->isHTML(true);                                
    $mail->Subject =' New visitor'. $_POST['subject'];
    $mail->Body    = '<div style="text-align: left;">
<h1>Attire Mens Bespoke</h1>
<p><b>Name</b> :'.$_POST['name'].'</p>
<p><b>Email</b> :'.$_POST['email'].'</p>
<p><b>Phone</b> :'.$_POST['phone'].'</p>
<p><b>Message</b> :'.$_POST['message'].'</p>
</div>';
        // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
        $mail->send();
        return true;
    } catch (Exception $e) {
        echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
    }
}
?>
