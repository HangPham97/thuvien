<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BillUser extends Model
{
    protected $table = 'bill_user';
    public function custom(){
        return $this->belongsTo('App\User','id_user','id');
    }

    public function bill_detail(){
        return $this->hasMany('App\BillUserDetail','id_bill_user','id');
    }
}
