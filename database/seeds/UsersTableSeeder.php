    <?php

    use App\User;
    use Illuminate\Database\Seeder;

    class UsersTableSeeder extends Seeder
    {
        public function run()
        {
            User::create([
                'name' => 'Brayo Kip',
                'email' => 'briankipruto793@gmail.com',
                'password' => bcrypt('12345678'),
            ]);
        }
    }
