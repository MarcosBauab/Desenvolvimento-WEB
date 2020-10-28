<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class Email
    {
        private $mailer;
       function __construct($host, $user, $passw,$name)
       {
           // Instantiation and passing `true` enables exceptions 
                $this->mailer = new PHPMailer(true);
            
                //Server settings
                //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
                $this->mailer->isSMTP();                                            // Send using SMTP
                $this->mailer->Host       = $host;                    // Set the SMTP server to send through
                $this->mailer->SMTPAuth   = true;                                   // Enable SMTP authentication
                $this->mailer->Username   = $user;                     // SMTP username
                $this->mailer->Password   = $passw;                               // SMTP password
                $this->mailer->SMTPSecure = 'ssl';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
                $this->mailer->Port       = 465;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

                //Recipients
                $this->mailer->setFrom($user, $name);
                
                //$this->mailer->addReplyTo('info@example.com', 'Information');
                ///$this->mailer->addCC('cc@example.com');
                //$this->mailer->addBCC('bcc@example.com');

                // Attachments
                //$this->mailer->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
                //$this->mailer->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

                
                $this->mailer->isHTML(true);                                  // Set email format to HTML
                $this->mailer->CharSet = "UTF-8";
                //echo 'Message has been sent';
            
                //
            
       } 
       public function formatarEmail($info){
            // Content
            $this->mailer->Subject = $info['assunto'];
            $this->mailer->Body    = $info['texto'];
            $this->mailer->AltBody = strip_tags($info['texto']); 
       }
       public function addAdress($email, $nome){
            $this->mailer->addAddress($email, $nome);     // Add a recipient
       }
       public function enviarEmail(){
        
            if($this->mailer->send()){
                return true;
            } else {
                echo "Message could not be sent. Mailer Error: {$this->mailer->ErrorInfo}";
            }
       }
    }
    
?>