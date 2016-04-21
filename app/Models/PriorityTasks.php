<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PriorityTasks extends Model
{
    protected $table = 'priority_tasks';

    /**
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public static function getPriorityTasks()
    {
        return self::all();
    }
}
