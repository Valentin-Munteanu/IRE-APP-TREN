<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class PassagersVagon2 extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
    "person_name",
    "person_lastname",
     "email",
     "totalPrice2",
 "selectedSeats2",
"selectedDate",
      "biletes_id"

    ];

    public function bilet()
    {
        return $this->belongsTo(Biletes::class);
    }
}
