<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classquiz extends Model
{
    protected $dates = ['deleted_at'];

    protected $table = 'classquiz';
    protected $primaryKey = 'idclassquiz';

    protected $fillable = [
        'idclass','idusers','nilai'
    ];

    public function class()
    {
        return $this->belongsTo('App\Models\Classes', 'idclass');
    }

    public function users()
    {
      return $this->belongsTo('App\Models\User', 'idusers');
    }

    public function classquizdetails()
    {
      return $this->hasMany('App\Models\ClassquizDetails', 'idclassquiz');
    }
}
