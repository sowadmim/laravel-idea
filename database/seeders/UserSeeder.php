<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->create([
            'name'              => 'Idea',
            'email'             => 'idea@mail.com',
            'password'          => 'secret',
            'role'              => 'admin',
            'email_verified_at' => now(),
            'remember_token'    => Str::random(10),
        ]);

        User::factory(10)->create();
        User::factory(4)->admin()->create();
        User::factory(5)->unverified()->create();
    }
}
