<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BillUserDetail extends Model
{
    protected $table = "bill_user_detail";

    public function product(){
        return $this->belongsTo('App\Book','id_book','id');
    }

    public function bill(){
        return $this->belongsTo('App\BillUser','id_bill_user','id');
    }
}
