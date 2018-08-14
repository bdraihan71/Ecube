<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Event;
use App\User;

class Ticket extends Model
{
    public function event ()
    {
        return $this->belongsTo('App\Event');
    }

    public function user ()
    {
        return $this->belongsTo('App\User');
    }
}
