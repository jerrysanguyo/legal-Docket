<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Docket_extn extends Model
{
    use HasFactory;

    public static function getAllDopcketExtn()
    {
        return self::all();
    }
}
