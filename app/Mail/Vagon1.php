<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class Vagon1 extends Mailable
{
    use Queueable, SerializesModels;

    public $formData;
    public $bilet;
    public $NumberTrain;
    public $numseets;
    public $TimeGo;
    public $TimeDestination;
    public $DurationTravel;
    public $selectedSeats;
    public $selectedDate;

public $totalPrice;

public $class;
public $vagon;
    /**
     * Create a new message instance.
     */
    public function __construct($formData, $bilet, $NumberTrain, $numseets, $TimeGo, $TimeDestination, $DurationTravel, $selectedSeats,  $selectedDate, $totalPrice, $class, $vagon)
    {
        $this->formData = $formData;
        $this->numseets = $numseets;
        $this->bilet = $bilet;
        $this->NumberTrain = $NumberTrain;
        $this->TimeGo = $TimeGo;
        $this->TimeDestination = $TimeDestination;
        $this->DurationTravel = $DurationTravel;
        $this->selectedDate = $selectedDate;
        $this->selectedSeats = $selectedSeats;
        $this->totalPrice = $totalPrice;
        $this->class = $class;
        $this->vagon = $vagon;
    }


    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Călătoria Dvs. Este Confirmată - Informații Bilet.
            IRE Pasageri vă dorește o călătorie plăcută'
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'pages.mail.vagon1',
            with: [
                'formData' => $this->formData,
                'NumberTrain' => $this->NumberTrain,
                "bilet" => $this->bilet,
                "numseets" => $this->numseets,
                "TimeGo" => $this->TimeGo,
                "TimeDestination" => $this->TimeDestination,
                "DurationTravel" => $this->DurationTravel,
                "selectedDate" => $this->selectedDate,
                "selectedSeats"=> $this->selectedSeats,
                "totalPrice" => $this->totalPrice,
                "vagon" => $this->vagon,
                "class" => $this->class

            ],
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
