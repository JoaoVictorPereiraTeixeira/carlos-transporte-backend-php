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
    {}

    public function sendEmail($title, $body)
    {
        $mail = new PHPMailer(true);

        try {
            $mail->SMTPDebug = SMTP::DEBUG_SERVER;
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = '';
            $mail->Password = '';
            $mail->Port = 587;

            $mail->setFrom('');
            $mail->addAddress('');

            $mail->isHTML(true);
            $mail->Subject = $title;
            $mail->Body = $this->processBody($body);

            if($mail->send()) {
                echo 'Email enviado com sucesso';
            } else {
                echo 'Email nao enviado';
            }
        } catch (Exception $e) {
            echo "Erro ao enviar mensagem: {$mail->ErrorInfo}";
        }

    }

    public function processBody($body){
        $itemsToTransport = $this->getItemsToTransport($body);

        $content = "<h2> Dados Cotação Realizada: </h2>\n";
        $content .= "<br>";
        $content .= $body["quotationType"] != null ? "<p> Tipo cotação: " . $body["quotationType"] . "</p>" : "" ;
        $content .= $body["requesterName"] != null ? "<p> Solicitante: " . $body["requesterName"] . "</p>" : "" ;
        $content .= $body["mainTelephone"] != null ? "<p> Telefone principal: " . $body["mainTelephone"] . "</p>" : "" ;
        $content .= $body["secondaryTelephone"] != null ? "<p> Telefone secundário: " . $body["secondaryTelephone"] . "</p>" : "" ;
        $content .= $body["dateSolicitation"] != null ? "<p> Data solicitação: " . $body["dateSolicitation"] . "</p>" : "".
        $content .= $body["cnpjSender"] != null ? "<p> Cnpj Remetente: " .  $body["cnpjSender"] . "</p>" : "" ;
        $content .= $body["cnpjRecipient"] != null ? "<p> Cnpj Destinatário: " .  $body["cnpjRecipient"] . "</p>" : "" ;
        $content .= $body["paidAtOrigin"] != null ? "<p> Pago na origem?: " . $body["paidAtOrigin"] . "</p>" : "" ;
        $content .= $body["needHelper"] != false ? "<p> Precisa de ajudante?: " . $body["needHelper "] . "</p>" : "" ;
        $content .= $body["typeHousing"] != null ? "<p> Tipo de casa: " . $body["typeHousing"] . "</p>" : "" ;
        $content .= $body["originCep"] != null ? "<p> CEP origem: " . $body["originCep"] . "</p>" : "" ;
        $content .= $body["originCity"] != null ? "<p> Cidade de origem: " . $body["originCity"] . "</p>" : "" ;
        $content .= $body["originAddress"] != null ? "<p> Endereco de origem: " . $body["originAddress"] . "</p>" : "" ;
        $content .= $body["originDistrict"] != null ? "<p> Bairro de origem: " . $body["originDistrict"] . "</p>" : "" ;
        $content .= $body["originNumber"] != null ? "<p> Número de origem: " . $body["originNumber"] . "</p>" : "" ;
        $content .= $body["destinyCep"] != null ? "<p> CEP destino: " . $body["destinyCep"] . "</p>" : "" ;
        $content .= $body["destinyCity"] != null ? "<p> Cidade de destino: " . $body["destinyCity"] . "</p>" : "" ;
        $content .= $body["destinyddress"] != null ? "<p> Endereco de destino: " . $body["destinyddress"] . "</p>" : "" ;
        $content .= $body["destinyDistrict"] != null ? "<p> Bairro de destino: " . $body["destinyDistrict"] . "</p>" : "" ;
        $content .= $body["destinyNumber"] != null ? "<p> Número de destino: " . $body["destinyNumber"] . "</p>" : "" ;
        $content .= $body["weight"] != null ? "<p> Peso mercadoria: " . $body["weight"] . " kg</p>" : "" ;
        $content .= $body["quantityItems"] != null ? "<p> Quant. items" . $body["quantityItems"] . "</p>" : "" ;
        $content .= $body["quantityItems"] != null ? "<p> Precisa de ajudant?" . $body["quantityItems"] . "</p>" : "" ;
        $content .= $body["dateToCollect"] != null ? "<p> Data e hora de coleta: " . $body["dateToCollect"] . "</p>" : "" ;
        $content .= $body["collectObservations"] != null ? "<p> Observações para coleta: " . $body["collectObservations"] . "</p>" : "";
        $content .= $body["merchandiseObservations"] != null ? "<p> Observações para mercadoria: " .  $body["merchandiseObservations"] . "</p>" : "" ;
        $content .= $itemsToTransport;

        return $content;

    }

    public function getItemsToTransport($body){
        $itemsToTransport = "<br> <h1> Itens para transportar: </h1>";

        // dd($body->transportItems);


        foreach ($body->transportItems as $key => $object) {
            $item = $object["item"];
            $quantity = $object["quantity"];
            $text = "<br> <br> <p> Item: " . $item . "</p> <p> Quantity: " . $quantity . "</p>";

            $itemsToTransport = $itemsToTransport . $text;
        }

        // for($i = 0; $i < count($body->transportItems); $i++) {
        //     $item = $body->transportItems[$i]->item;
        //     $quantity = $body->transportItems[$i]->quantity;
        //     $text = "<br> <br> <p> Item: " + $item + "</p> <p> Quantity: " + $quantity + "</p>";

        //     $itemsToTransport = $itemsToTransport + $text;
        // }



        return $itemsToTransport;

    }
}
