<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            RoleSeeder::class,
        ]);
        \App\Models\Animal::factory(100)->create();

        

        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('12345678'),
            'role_id' => Role::where('role', "ROLE_ADMIN")->first()->id,
            'email_verified_at' => now(),
        ]);

        DB::table('users')->insert([
            'name' => 'manager',
            'email' => 'manager@gmail.com',
            'role_id' => Role::where('role', "ROLE_MANAGER")->first()->id,
            'password' => Hash::make('12345678'),
            'email_verified_at' => now(),
        ]);

        DB::table('users')->insert([
            'name' => 'user',
            'email' => 'user@gmail.com',
            'role_id' => Role::where('role', "ROLE_USER")->first()->id,
            'password' => Hash::make('12345678'),
            'email_verified_at' => now(),
        ]);

        
    }
}
