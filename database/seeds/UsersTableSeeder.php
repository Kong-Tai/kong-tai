    <?php

    use App\User;
    use Illuminate\Database\Seeder;

    class UsersTableSeeder extends Seeder
    {
        public function run()
        {
            // User::create([
            //     'name' => 'admin',
            //     'email' => 'admin@gmail.com',
            //     'password' => bcrypt('12345678'),
            // ]);
            $users = factory(User::class, 15)->create();
        }
    }
