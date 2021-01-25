<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClassquizDetails extends Model
{
    protected $dates = ['deleted_at'];

    protected $table = 'classquizdetails';
    protected $primaryKey = 'idclassquizdetails';

    protected $fillable = [
        'idclassquiz','question','answer'
    ];
}
