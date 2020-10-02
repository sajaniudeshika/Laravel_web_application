<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    protected $fillable = [
    	'comment_id',
    	'fname',
    	'reply',
    	'user_id'
    ];
}
