<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
public function ticket()
{
    return $this->belongsTo('App\Ticket');
}
protected $guarded = ['id'];
public function post()
{
    return $this->morphTo(); 
}
}
