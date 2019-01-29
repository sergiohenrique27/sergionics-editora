<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
        'title',
        'subtitle',
        'price',
        'user_id'

    ];

    // livro tem um autor(user)
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}







