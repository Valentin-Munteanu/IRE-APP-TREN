<?php

namespace App\Models;

use App\Models\Admin;
use App\Models\Routes;
use App\Models\PassagersVagon1;
use App\Models\PassagersVagon2;
use App\Models\PassagersVagon3;
use App\Models\PassagersVagon4;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Biletes extends Model
{
    public $timestamps = false;
    use HasFactory;
    protected $fillable = [
    "number_train",
      'route_name',
       "price_class1",
     "price_class2",
     "class1c",
    "class2c",
     "time_start",
     "time_destination",
    "duration",
    "vagon_number1",
   "vagon_number2",
   "vagon_number3",
    "vagon_number4",
    "hidden",
    "admin_id"
    ];
    public function routes()
    {

        return $this->hasMany(Routes::class);

    }

    public function relationAdmin(){
return $this->belongsTo(Admin::class);
    }

    public function passagers1()
    {
        return $this->hasMany(PassagersVagon1::class);
    }


    public function passagers2()
    {
        return $this->hasMany(PassagersVagon2::class);
    }


    public function passagers3()
    {
        return $this->hasMany(PassagersVagon3::class);
    }


    public function passagers4()
    {
        return $this->hasMany(PassagersVagon4::class);
    }


}
