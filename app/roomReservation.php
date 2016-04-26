<?php

namespace App;

use App\parentt;
use Illuminate\Database\Eloquent\Model;

class roomReservation extends Model
{


    private static $inst=0;

    protected $table="room_reservation";



    public static function getInstance(){

        if(static::$inst==null){

            static::$inst=new roomReservation();
        }
        return static::$inst;
}



}
