<?php

use Illuminate\Database\Seeder;
use App\Donations;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        Donations::create([
            'amount' => 50,
            'type' => 'check',
            'user_id' => 4,
        ]);
    }
}
