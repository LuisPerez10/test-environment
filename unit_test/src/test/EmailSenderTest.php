<?php 

use PHPUnit\Framework\TestCase;
class EmailSenderTest extends TestCase
{
    public function testSendEmailsCallsMailerService()
    {
        $mailerMock = $this->createMock(\App\interface\MailerServiceInterface::class);

        // Configurar el mock para que el método 'send' sea llamado exactamente dos veces
        $mailerMock->expects($this->exactly(2))
                   ->method('send')
                   ->willReturn(true);

        // Crear una instancia de EmailSender con el mock
        $emailSender = new EmailSender($mailerMock);

        // Llamar al método 'sendEmails'
        $emailSender->sendEmails(['email1@example.com', 'email2@example.com'], 'Mensaje de prueba');

        // No hay aserciones explícitas ya que estamos probando las expectativas del mock
    }
}

?>