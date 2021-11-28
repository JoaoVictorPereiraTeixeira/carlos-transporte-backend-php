<?php

namespace App\Services;

use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

require_once('../app/Libs/PHPMailer.php');
require_once('../app/Libs/SMTP.php');
require_once('../app/Libs/SMTP.php');

class Email
{
    public function __construct()
    {

    }

    public function sendEmail($title, $body)
    {
        $mail = new PHPMailer(true);

        try {
            $mail->SMTPDebug = SMTP::DEBUG_SERVER;
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'login';
            $mail->Password = 'senha';
            $mail->Port = 587;

            $mail->setFrom('login@gmail.com');
            $mail->addAddress('login@gmail.com');

            $mail->isHTML(true);
            $mail->Subject = $title;
            $mail->Body = $body;

            if($mail->send()) {
                echo 'Email enviado com sucesso';
            } else {
                echo 'Email nao enviado';
            }
        } catch (Exception $e) {
            echo "Erro ao enviar mensagem: {$mail->ErrorInfo}";
        }
    }
}
