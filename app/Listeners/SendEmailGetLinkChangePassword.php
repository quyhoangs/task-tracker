<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class SendEmailGetLinkChangePassword
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
        $email = $event->data['email'];
        $token = $event->data['token'];

        Mail::send(
            'components.emails_template.email_to_change_password',
            [
                'token' => $token,
                'email' => $email,
            ],
            function ($message) use ($email) {
                $message->from('quyhx@mor.com.vn');
                $message->to($email, 'Quy Hoang')
                    ->subject('Change Password');
            }
        );

    }
}
