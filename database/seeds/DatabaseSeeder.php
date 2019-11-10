<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            RolesTableSeeder::class,
            TestUserSeeder::class,
            UsersTableSeeder::class,
            PortfolioCategoriesTableSeeder::class,
            PortfolioTableSeeder::class,
            BlogTableSeeder::class,
        ]);
    }
}
