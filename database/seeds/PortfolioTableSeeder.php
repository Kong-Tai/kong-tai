<?php

use App\User;
use App\Portfolio;
use App\PortfolioCategory;
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
        // $users = factory(User::class, 1)->create();
        // $categories = factory(PortfolioCategory::class, 5)->create();
        $portfolio = factory(Portfolio::class, 20)->create();
    }
}
