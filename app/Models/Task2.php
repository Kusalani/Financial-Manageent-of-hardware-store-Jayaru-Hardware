<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Task2 extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'task2s';

    protected $fillable = [
        'id', 'name','amount','due_date'
    ];
}
