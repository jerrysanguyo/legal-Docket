<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Docket_history extends Model
{
    use HasFactory;

    public static function getAllDocketHistory()
    {
        return self::all();
    }
}
