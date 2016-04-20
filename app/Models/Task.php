<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Task extends Model
{
    public static function getTasks()
    {
        return self::where('user_id', '=', Auth::user()->id)->orderBy('id', 'desc')->get();
    }
}
