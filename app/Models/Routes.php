<?php

namespace App\Models;

use App\Models\Admin;
use App\Models\Biletes;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Routes extends Model
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
        "duration",
        "biletes_id",
        "admin_id",
     "hidden"
    ];
    protected $table = "routes";

    public function returns()
    {
        return $this->belongsTo(Biletes::class);
    }

public function admins(){
    return $this->belongsTo(Admin::class);
}

}
