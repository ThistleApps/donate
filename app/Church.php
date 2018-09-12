<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Church extends Model
{
    //
    public $timestamps = false;

    public function user(){

        return $this->belongsTo('App\User');
    }

    public function paypage(){

        return $this->hasOne('App\Paymentpage', 'paymentpage_id');
    }

    /*public function payblobal(){

        return $this->hasOne('App\Paymentglobalsettings');
    }*/

}
