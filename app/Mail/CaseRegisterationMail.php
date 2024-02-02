<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CaseRegisterationMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->to($this->data['to'])
                    ->cc($this->data['cc'])
                    ->from('no-reply@clearpathortho.com', 'ClearPath Orthodontics')
                    ->subject('Case Registeration Mail')
                    ->view('emails.case_registeration_email', ['doctorName' => $this->data['doctorName'],
                            'patientName' => $this->data['patientName'], 'regionName' => $this->data['regionName'], 'cityName' => $this->data['cityName']]);
    }
}