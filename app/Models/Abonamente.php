<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Abonamente extends Model
{
    use HasFactory;

    protected $fillable = [
   "name",
    "lastname",
      "email",
       "price"
    ];
}
