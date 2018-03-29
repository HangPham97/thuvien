<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $table = 'book';
    protected $fillable = [
        'author',
        'image',
        'number',
        'category',
        'name',
        'created_at'
    ];

    public function bill(){
        return $this->hasMany('App\Bill','id_book','id');
    }
    public function cate(){
        return $this->belongsTo('App\Cate','category','id');
    }


}
