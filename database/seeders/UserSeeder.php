<?php

namespace Database\Seeders;
use App\Models\User;
use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'fast_name' => 'Admin',
            'last_name' => 'Admin',
            'email' => 'alex@mail.ru',
            'phone' => '99899-999-99',
            'password' => Hash::make('secret123'),
        ]);
        $admin->roles()->attach(1);
        User::factory()->count(10)->hasAttached(Role::find(2))->create();
    }
}
