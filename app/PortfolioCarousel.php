<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PortfolioCarousel extends Model
{
    public function project()
    {
        return $this->belongsTo(Portfolio::class);
    }
}
