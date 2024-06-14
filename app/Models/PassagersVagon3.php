<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class PassagersVagon3 extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
    "person_name",
    "person_lastname",
     "email",
     "totalPrice3",
 "selectedSeats3",
"selectedDate",
      "biletes_id"


    ];
    public function bilet()
    {
        return $this->belongsTo(Biletes::class);
    }
}
