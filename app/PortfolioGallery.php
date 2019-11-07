<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PortfolioGallery extends Model
{
    public function project()
    {
        return $this->belongsTo(Portfolio::class);
    }
}
