<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\MailMessage;

class ResetPasswordNotification extends Notification
{
    use Queueable;

    public $token;

    public function __construct($token)
    {
        $this->token = $token;
    }

    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    public function toMail(object $notifiable): MailMessage
    {
        $url = url(route('password.reset',[
            'token'=>$this->token,
            'email'=>$notifiable->email,
        ],false));

        return (new MailMessage)
    ->subject('Şifre Sıfırlama')
    ->greeting('Merhaba '.$notifiable->name.',')
    ->line('Hesabınız için şifre sıfırlama talebi oluşturuldu.')
    ->action('Şifremi Sıfırla', $url)
    ->line('Bu bağlantı 60 dakika boyunca geçerlidir.')
    ->line('Bu işlemi siz yapmadıysanız bu e-postayı dikkate almayabilirsiniz.')
    ->salutation('Gaziantep Büyükşehir Belediyesi Bilişim A.Ş.');
    }
}