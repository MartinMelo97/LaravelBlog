<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $table = "images";
    protected $fillable = ['name','articles_id'];

    public function articles(){
    	return $this->belongsTo('App\Article');
    }
}
