<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable =[
        'body',
        'url',
        'commentable_id',
        'user_id',
        'commentable_type'

    ];
    //POLYMORPHIC RELATIONSHIP


    //
}
