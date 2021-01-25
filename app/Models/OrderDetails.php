<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetails extends Model
{
    protected $table = 'order_details';
    protected $primaryKey = 'idordersdetails';

    public function classes()
    {
        return $this->hasMany('App\Models\Classes','idclass');
    }
}
