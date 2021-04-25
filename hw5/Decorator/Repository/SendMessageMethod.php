<?php


namespace Decorator\Repository;


use Decorator\Contract\NotifiableInterface;
use Decorator\Service\PhoneApi;

class SendMessageMethod
{
    /**
     * @var NotifiableInterface
     */
    private $notifiable;

    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $message;

    public function __construct(string $title, NotifiableInterface $notifiable, string $message)
    {
        $this->title=$title;
        $this->notifiable=$notifiable;
        $this->message=$message;
    }

    public function sendByMail(): void
    {
        echo "Посылаем email с заголовком '$this->title' по адресу "
            . "'{$this->notifiable->getEmail()}' с сообщением "
            . "'$this->message'.\n";
    }

    public function sendByPhone(PhoneApi $phoneApi): void
    {
        $message = $this->title . " " . strip_tags($this->message);
        $phoneApi->createConnection();
        $phoneApi->sendMessage($this->notifiable->getPhone(), $message);
    }
}