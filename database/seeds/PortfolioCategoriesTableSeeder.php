<?php

use App\PortfolioCategory;
use Illuminate\Database\Seeder;

class PortfolioCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = ['Classic', 'Creative', 'Portfolio', 'Blog', 'Other'];
        foreach ($categories as $category) {
            PortfolioCategory::create([
                'name' => $category,
                'slug' => Str::slug($category),
            ]);
        }
    }
}
