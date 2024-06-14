<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class Vagon4 extends Mailable
{
    use Queueable, SerializesModels;
    public $formData;
    public $bilet;
    public $NumberTrain;
    public $numseets4;
    public $TimeGo;
    public $TimeDestination;
    public $DurationTravel;
    public $selectedSeats4;
    public $selectedDate;

public $totalPrice4;

public $class2;
public $vagon4;
    /**
     * Create a new message instance.
     */
    public function __construct($formData, $bilet, $NumberTrain, $numseets4, $TimeGo, $TimeDestination, $DurationTravel, $selectedSeats4,  $selectedDate, $totalPrice4, $class2, $vagon4)
    {
        $this->formData = $formData;
        $this->numseets4 = $numseets4;
        $this->bilet = $bilet;
        $this->NumberTrain = $NumberTrain;
        $this->TimeGo = $TimeGo;
        $this->TimeDestination = $TimeDestination;
        $this->DurationTravel = $DurationTravel;
        $this->selectedDate = $selectedDate;
        $this->selectedSeats4 = $selectedSeats4;
        $this->totalPrice4 = $totalPrice4;
        $this->class2 = $class2;
        $this->vagon4 = $vagon4;
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
            view: 'pages.mail.vagon4',
            with: [
                'formData' => $this->formData,
                'NumberTrain' => $this->NumberTrain,
                "bilet" => $this->bilet,
                "numseets4" => $this->numseets4,
                "TimeGo" => $this->TimeGo,
                "TimeDestination" => $this->TimeDestination,
                "DurationTravel" => $this->DurationTravel,
                "selectedDate" => $this->selectedDate,
                "selectedSeats4"=> $this->selectedSeats4,
                "totalPrice4" => $this->totalPrice4,
                "vagon4" => $this->vagon4,
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
