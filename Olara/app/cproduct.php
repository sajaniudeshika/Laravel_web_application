<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cproduct extends Model
{
    protected $fillable = ['imagePath','title','description','price'];
}
