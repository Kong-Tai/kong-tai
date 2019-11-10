<?php

use App\User;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class TestUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = ['admin', 'user'];
        foreach ($types as $type) {
            $email = $type . '@kong-tai.co.ke';
            $user = User::create([
                'name' => 'Kong-tai ' . $type,
                'email' => $email,
                'email_verified_at' => now(),
                'password' => bcrypt('12345678'), // password
                'remember_token' => Str::random(10),
            ]);
            // $user->assignRole(Role::where('name', $type)->first()->id);
        }
    }
}
