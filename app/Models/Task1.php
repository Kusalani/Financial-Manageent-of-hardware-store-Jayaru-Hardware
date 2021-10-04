<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Task1 extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'task1s';

    protected $fillable = [
        'id', 'detail','amount','created_at'
    ];
}
