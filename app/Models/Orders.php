<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    protected $dates = ['deleted_at'];

    protected $table = 'orders';
    protected $primaryKey = 'idorders';

    protected $fillable = [
        'total','codeorder','status_orders','status_payment','snap_token'
    ];
}
