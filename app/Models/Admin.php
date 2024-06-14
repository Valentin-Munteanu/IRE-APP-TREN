<?php

namespace App\Models;

use App\Models\Routes;
use App\Models\Biletes;
use App\Models\TrenuriAnulate;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{

    use Notifiable;

    protected $guard = 'admins';

    public $timestamps = false;
    protected $fillable = [
        'name',
        'lastname',
        'login',
        'email',
        'password'
    ];

    public function Routesrelation(){
        return $this->hasMany(Routes::class);

    }

    public function BiletesRelation(){
        return $this->hasMany(Biletes::class);
    }

    public function CancelRoutesRelation(){
        return $this->hasMany(TrenuriAnulate::class);
    }

}
