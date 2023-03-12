<?php

namespace Classes;

use PHPMailer\PHPMailer\PHPMailer;

class Email{
    public $email;
    public $nombre;
    public $token;

    public function __construct($email,$nombre,$token)
    {
        $this->email=$email;
        $this->nombre=$nombre;
        $this->token=$token;
    }

    public function enviarConfirmacion(){
        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->Host = 'sandbox.smtp.mailtrap.io';
        $mail->SMTPAuth = true;
        $mail->Port = 2525;
        $mail->Username = '43061ec0e3c85a';
        $mail->Password = 'ab123395c2a367';
        $mail->setFrom('cuentas@appsalon.com');
        $mail->addAddress('cuentas@appsalon.com','AppSalon.com');
        $mail->Subject='Confirma tu cuenta';

        $mail->isHTML(true);
        $mail->CharSet='UTF-8';

        $contenido="<html>
            <p><strong>Hola $this->nombre </strong> has creado tu cuenta en AppSalon, solo debes
            confirmarla presionando el siguiente enlace</p>
            <p>Presiona el siguiente enlace
                <a href=\"http://localhost:3000/confirmar-cuenta?token=$this->token\">Confirmar cuenta</a>
            </p>
            <p>Si tu no has solicitado esta cuenta, puedes ignorar el mensaje</p>
        </html>";
        $mail->Body=$contenido;
        $mail->send();
    }
    public function enviarInstrucciones(){
        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->Host = 'sandbox.smtp.mailtrap.io';
        $mail->SMTPAuth = true;
        $mail->Port = 2525;
        $mail->Username = '43061ec0e3c85a';
        $mail->Password = 'ab123395c2a367';
        $mail->setFrom('cuentas@appsalon.com');
        $mail->addAddress('cuentas@appsalon.com','AppSalon.com');
        $mail->Subject='Confirma tu cuenta';

        $mail->isHTML(true);
        $mail->CharSet='UTF-8';

        $contenido="<html>
            <p><strong>Hola $this->nombre </strong> has solicitado reestablecer tu password</p>
            <p>Presiona el siguiente enlace para recuperarlo
                <a href=\"http://localhost:3000/recuperar?token=$this->token\">Reestablecer password</a>
            </p>
            <p>Si tu no has solicitado esta cuenta, puedes ignorar el mensaje</p>
        </html>";
        $mail->Body=$contenido;
        $mail->send();
    }
}