<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class Vagon2 extends Mailable
{
    use Queueable, SerializesModels;

    public $formData;
    public $bilet;
    public $NumberTrain;
    public $numseets2;
    public $TimeGo;
    public $TimeDestination;
    public $DurationTravel;
    public $selectedSeats2;
    public $selectedDate;

public $totalPrice2;

public $class2;
public $vagon2;


    /**
     * Create a new message instance.
     */
    public function __construct($formData, $bilet, $NumberTrain, $numseets2, $TimeGo, $TimeDestination, $DurationTravel, $selectedSeats2,  $selectedDate, $totalPrice2, $class2, $vagon2)
    {
        $this->formData = $formData;
        $this->numseets2 = $numseets2;
        $this->bilet = $bilet;
        $this->NumberTrain = $NumberTrain;
        $this->TimeGo = $TimeGo;
        $this->TimeDestination = $TimeDestination;
        $this->DurationTravel = $DurationTravel;
        $this->selectedDate = $selectedDate;
        $this->selectedSeats2 = $selectedSeats2;
        $this->totalPrice2 = $totalPrice2;
        $this->class2 = $class2;
        $this->vagon2 = $vagon2;
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
            view: 'pages.mail.vagon2',
            with: [
                'formData' => $this->formData,
                'NumberTrain' => $this->NumberTrain,
                "bilet" => $this->bilet,
                "numseets2" => $this->numseets2,
                "TimeGo" => $this->TimeGo,
                "TimeDestination" => $this->TimeDestination,
                "DurationTravel" => $this->DurationTravel,
                "selectedDate" => $this->selectedDate,
                "selectedSeats2"=> $this->selectedSeats2,
                "totalPrice2" => $this->totalPrice2,
                "vagon2" => $this->vagon2,
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
