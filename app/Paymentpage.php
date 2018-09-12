<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Paymentpage extends Model
{
    //public $timestamps = false;

     public function church(){

        return $this->belongsTo('App\Church', 'church_id');
    }
}
