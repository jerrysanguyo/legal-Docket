<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Case_type extends Model
{
    use HasFactory;

    public static function getAllCaseType()
    {
        return self::all();
    }
}
