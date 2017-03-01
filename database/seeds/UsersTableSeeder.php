<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'     => 'Wajih',
            'email'    => 'wajihgalai@gmail.com',
            'password' => Hash::make("JfUkUCmv2e9W")
        ]);
    }
}
