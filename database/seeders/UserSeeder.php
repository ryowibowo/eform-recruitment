<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

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
            [
                'name' => 'admin',
                'email'=> 'admin@form.com',
                'phone'=> '0812121212',
                'password'=> bcrypt('123456'),
                'role' => 'Super Admin'
            ]
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
