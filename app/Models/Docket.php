<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Docket extends Model
{
    use HasFactory;

    public static function getAllDocket()
    {
        return self::all();
    }
}
