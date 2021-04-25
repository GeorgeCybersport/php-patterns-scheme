<?php


namespace Decorator\Repository;

use Decorator\Contract\NotifiableInterface;
use Decorator\Repository\SendMessageMethod;
use Decorator\Service\PhoneApi;

class MessageSender
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

    /**
     * @var PhoneApi
     */
    private $phoneApi;

    /**
     * PhoneNotification constructor.
     * @param NotifiableInterface $notifiable
     * @param string $title
     * @param string $message
     * @param PhoneApi | null $phoneApi
     */
    public function __construct(
        NotifiableInterface $notifiable,
        string $title,
        string $message,
        ?PhoneApi $phoneApi
    ) {
        $this->notifiable = $notifiable;
        $this->title = $title;
        $this->message = $message;
        $this->phoneApi = $phoneApi;
    }

    public function send(){
        $sendMessageMethod = new SendMessageMethod($this->title, $this->notifiable, $this->message);
        if($this->phoneApi){
            $sendMessageMethod->sendByPhone($this->phoneApi);
        } else {
            $sendMessageMethod->sendByMail();
        }
    }
}