<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            'name' => 'user',
            'email' => 'user@user.com',
            'password' => bcrypt('123123123'),
            'role_id' => 2,
        ];

        // $user->assignRole('admin');
        User::create($user);
    }
}
