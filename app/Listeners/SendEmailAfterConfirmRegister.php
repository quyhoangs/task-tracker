<?php

namespace App\Listeners;

use App\Events\ConfirmRegister;
use Exception;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class SendEmailAfterConfirmRegister implements ShouldQueue
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
     * @param  \App\Events\ConfirmRegister  $event
     * @return void
     */
    public function handle(ConfirmRegister $event)
    {
        try {
            $email = $event->data['email'];
            $name = $event->data['name'];
            $token = $event->data['token'];

            Mail::send(
                'components.emails_template.email_to_member_register',
                [
                    'token' => $token,
                    'email' => $email,
                    'name' => $name,
                ],
                function ($message) use ($email) {
                    $message->from('quyhx@mor.com.vn');
                    $message->to($email, 'Quy Hoang')
                        ->subject('Confirm Register Success');
                }
            );
        } catch (Exception $e) {
            report($e);
        }
    }
}
