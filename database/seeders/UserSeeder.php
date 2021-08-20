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
        User::create([
            'name' => 'Admin Portal',
            'email' => 'administrator@admin.com',
            'telefono' => '123456789',
            'password' => bcrypt('..admin..')
        ]);

       // User::factory(99)->create();
    }
}
