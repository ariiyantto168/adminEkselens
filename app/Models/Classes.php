<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Session;


class Classes extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    protected $table = 'class';
    protected $primaryKey = 'idclass';

    protected $fillable = [
        'name','duration','images','demo','tutor','description','imagesmitra','imagesinstructor',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            //created by
            $model->created_by = Session::get('users.idusers');
            return true;
        });

        static::updating(function ($model) {
            //updated by
            $model->updated_by = Session::get('users.idusers');
            return true;
        });

        static::deleting(function ($model) {
            //deleted by
            $model->deleted_by = Session::get('users.idusers');
            $model->save();
            return true;
        });
    }

    public function subclass()
    {
        return $this->hasMany('App\Models\Subclass','idclass','idclass');
    }
    
    public function categories()
    {
        return $this->belongsTo('App\Models\Categories', 'idcategories');
    }
    
    public function hilights()
    {
        return $this->hasMany('App\Models\Hilights','idclass','idclass');
    }

    public function whislists()
    {
        return $this->hasMany('App\Models\Whislists','idclass','idclass');
    }

    // test delete menggunakan materies model relasi
    public function materies()
    {
        return $this->hasMany('App\Models\Materies','idsubclass');
    }

}
