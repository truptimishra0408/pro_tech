<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class masterNotification extends Notification
{
    use Queueable;
    private $user;
    private $type;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($user,$type)
    {
        $this->user = $user;
        $this->type = $type;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['database'];
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            'user_id'=>$this->user['id'],
            'name'=>$this->user['name'],
            'type'=>$this->type,
        ];
    }
}
