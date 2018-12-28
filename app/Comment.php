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
public function comments()
{
return $this->hasMany('App\Comment', 'post_id');
}
}
