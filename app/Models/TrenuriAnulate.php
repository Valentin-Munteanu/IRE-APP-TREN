<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrenuriAnulate extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        "train_number",
           "route",
           "station_start",
           "destination",
           "time_start",
           "time_destination",
           "admin_id",
        "hidden"
       ];
       protected $table = "trenuri_anulates";

       public function admins(){
        return $this->belongsTo(Admin::class);
    }
}
