<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    //create relation to users table
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
