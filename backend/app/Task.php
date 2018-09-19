<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    //sets default for completed
    protected $attributes = [
        'completed' => true
     ];
}
