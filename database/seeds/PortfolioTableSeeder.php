<?php

use App\Portfolio;
use App\PortfolioCarousel;
use Illuminate\Database\Seeder;

class PortfolioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Portfolio::class, 8)->create()->each(function ($portfolio) {
            for ($i = 0; $i < 3; $i++) {
                $portfolio->portfolio_carousels()->save(factory(\App\PortfolioCarousel::class)->make());
            }
            for ($i = 0; $i < 6; $i++) {
                $portfolio->portfolio_galleries()->save(factory(\App\PortfolioGallery::class)->make());
            }
        });
    }
}
