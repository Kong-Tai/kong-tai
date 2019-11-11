<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    function comment()
    {
        return $this->belongsTo(Comment::class);
    }
}
