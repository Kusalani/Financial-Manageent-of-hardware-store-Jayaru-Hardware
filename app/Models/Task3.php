<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Task3 extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'task3s';

    protected $fillable = [
        'created_at','balance','update','amountAdded',
    ];
}
