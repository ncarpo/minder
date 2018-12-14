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
        $this->call(AreasTableSeeder::class);
        $this->call(AspectsTableSeeder::class);
        $this->call(StatementsTableSeeder::class);

        // add a user under neilcarpenter86@gmail.com
        $user = App\User::create([
            'name' => 'Neil Carpenter',
            'email' => 'neilcarpenter86@gmail.com',
            'password' => bcrypt('password'),
        ]);

        $this->call(ChildrenTableSeeder::class);
    }
}
