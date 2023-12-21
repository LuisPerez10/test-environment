<?php 
use App\interface\MailerServiceInterface;

class EmailSender
{
    private $mailerService;

    public function __construct(MailerServiceInterface $mailerService)
    {
        $this->mailerService = $mailerService;
    }

    public function sendEmails(array $recipients, $message)
    {
        foreach ($recipients as $recipient) {
            $this->mailerService->send($recipient, $message);
        }
    }
}

?>