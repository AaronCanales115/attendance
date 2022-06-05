<?php 
/*
require 'vendor/autoload.php';

    class sendEmail{

        public static function sendMail($to, $subject, $content){
            $key = 'key';
            $email = new \SendGrid\Mail\Mail();
            $email->setFrom('example@gmail.com', 'Admin');
            $email->setSubject($subject);
            $email->addTo($to);
            $email->addContent('text/plain', $content);

            $sendgrid = new SendGrid($key);

            try{
                $response = $sendgrid->send($email);
                return $response;

            }catch(Exception $e){
                echo 'email exception caught: ' . $e->getMessage();
                return false;
            }
        }
    }
*/
?>