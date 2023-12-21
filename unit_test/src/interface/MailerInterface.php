<?php 
namespace App\interface;

interface MailerServiceInterface
{
    public function send($address, $message);
}

class MailerService implements MailerServiceInterface
{
    public function send($address, $message)
    {
        // Lógica para enviar un correo electrónico
        return true;
    }
}

?>