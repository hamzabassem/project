<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Message extends Model
{


    //protected $table = "messages";

    protected $fillable = [
        'first_name', 'sec_name', 'email','subject',
    ];
}
