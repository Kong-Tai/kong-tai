<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'slug',
        'intro',
        'client',
        'website_url',
        'description',
        'workdate',
        'linkedin_url',
        'twitter_url',
        'facebook_url',
        'user_id',
        'category_id',
    ];

    public function category()
    {
        return $this->belongsTo(PortfolioCategory::class);
    }

    public function portfolio_galleries()
    {
        return $this->hasMany(PortfolioGallery::class);
    }
    public function portfolio_carousels()
    {
        return $this->hasMany(PortfolioCarousel::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
