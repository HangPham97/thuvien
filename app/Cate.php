<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cate extends Model
{
    protected $table = 'category';
    public function book(){
        $this->hasMany('App\Book','category','id');
    }
}
