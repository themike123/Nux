<?php

namespace App\Mail;


use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Contact extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $name="";
    public $email="";
    public $phone="";
    public $message="";

    public function __construct(array $user)
    {
        $this->name=$user["name"];
        $this->email=$user["email"];
        $this->phone=$user["phone"];
        $this->message=$user["message"];
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mails.contact')->with(['name'=>$this->name,'email'=>$this->email,'phone'=>$this->phone,'message'=>$this->message]);
        //return $this->view('mails.contact')->with('name',$this->name,'email',$this->email,'phone',$this->phone,'message',$this->message);
    }
}
