<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class Vagon3 extends Mailable
{
    use Queueable, SerializesModels;


    public $formData;
    public $bilet;
    public $NumberTrain;
    public $numseets3;
    public $TimeGo;
    public $TimeDestination;
    public $DurationTravel;
    public $selectedSeats3;
    public $selectedDate;

public $totalPrice3;

public $class2;
public $vagon3;
    /**
     * Create a new message instance.
     */
    public function __construct($formData, $bilet, $NumberTrain, $numseets3, $TimeGo, $TimeDestination, $DurationTravel, $selectedSeats3,  $selectedDate, $totalPrice3, $class2, $vagon3)
    {
        $this->formData = $formData;
        $this->numseets3 = $numseets3;
        $this->bilet = $bilet;
        $this->NumberTrain = $NumberTrain;
        $this->TimeGo = $TimeGo;
        $this->TimeDestination = $TimeDestination;
        $this->DurationTravel = $DurationTravel;
        $this->selectedDate = $selectedDate;
        $this->selectedSeats3 = $selectedSeats3;
        $this->totalPrice3 = $totalPrice3;
        $this->class2 = $class2;
        $this->vagon3 = $vagon3;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Călătoria Dvs. Este Confirmată - Informații Bilet.
            IRE Pasageri vă dorește o călătorie plăcută',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'pages.mail.vagon3',
            with: [
                'formData' => $this->formData,
                'NumberTrain' => $this->NumberTrain,
                "bilet" => $this->bilet,
                "numseets3" => $this->numseets3,
                "TimeGo" => $this->TimeGo,
                "TimeDestination" => $this->TimeDestination,
                "DurationTravel" => $this->DurationTravel,
                "selectedDate" => $this->selectedDate,
                "selectedSeats3"=> $this->selectedSeats3,
                "totalPrice3" => $this->totalPrice3,
                "vagon3" => $this->vagon3,
                "class2" => $this->class2
            ]
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
