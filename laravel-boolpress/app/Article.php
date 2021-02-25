<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //
    protected $fillable = [ 'titolo', 'body' ];

    

    public function category()
    {
        return $this->belongsTo('App\category');
    }


    public function user()
    {
        return $this->belongsTo('App\User');
    }
}