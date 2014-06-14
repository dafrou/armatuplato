<?php

include(dirname(__FILE__) . "/PHPMailer/class.phpmailer.php");

class Mailer {

    private $user;
    private $pass;
    private $host;
    private $fromName;

    public function __construct() {
        global $_config;
        $m = $_config::getMail();
        $this->user = $m['user'];
        $this->pass = $m['pass'];
        $this->host = $m['host'];
        $this->fromName = $m['fromName'];
    }

    public function send($destinatario, $titutlo, $cuerpo) {
        date_default_timezone_set('Etc/UTC');
        $mail = new PHPMailer();
        $mail->IsSMTP();
        $mail->SMTPDebug = 0;
        $mail->Debugoutput = 'html';
        $mail->Host = $this->host;
        $mail->Port = 25;
        //$mail->SMTPSecure = 'tls';mail.cristbaldiaz.cl no soporta esta seguridad
        $mail->SMTPAuth = true;
        $mail->Username = $this->user;
        $mail->Password = $this->pass;
        $mail->SetFrom($this->user, $this->fromName);
        $mail->AddReplyTo($this->user, 'no responder');
        $mail->AddAddress($destinatario);
        $mail->Subject = $titutlo;
        $mail->MsgHTML($cuerpo);
        return $mail->Send();
    }

}

?>