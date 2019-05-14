<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Auth\Notifications\ResetPassword as ResetPasswordNotification;

class ResetPassword extends ResetPasswordNotification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {   $link = url( "/password/reset/?token=" . $this->token );

        //    $url = route('password.reset',$this->token);
        //    return (new MailMessage)->markdown('notifications.users.myPasswordNotification',['url'=> $url]);
        //
       // return (new MailMessage)
        //->subject('Hi'.config())
         //           ->line('The introduction to the notification.')
           //         ->action('Notification Action', url('password/reset', $this->token'))
             //       ->line('Thank you for using our application!');
       return (new MailMessage)
            ->subject('Hello From' . config('app.name'))
            ->line('You have received this mail because you request to reset your password.')
            ->action('Click the link', $link)
            ->line('If you did not make the request please ignore this mail.');
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
            //
        ];
    }
}
