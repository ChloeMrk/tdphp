<?php

namespace App\Mail;

use App\Models\User as User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SignUp extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

     public $user;
    public function __construct()
    {
        $this->user=$user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */

    public function build()
    {
        return $this
        ->subject('Votre compte a été crée')
        ->view('emails.signUp');
    }
}
