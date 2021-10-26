<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = array(
            array(
                'name' => 'Alexsander Hendra Wijaya',
                'email' => 'admin@gmail.com',
                'password'       => bcrypt('admin'),
                'remember_token' => null,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ),
        );
        User::insert($user);
    }
}
