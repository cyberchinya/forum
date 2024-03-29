<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Forum extends Model
{
    use HasFactory;

    protected $guarded=[];

    public static function category()
    {
        return $this->belongsTo('App\Models\Category');
    }
}
