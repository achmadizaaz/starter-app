<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create role Super Administrator
        $role1 = Role::create(['name' => 'Super Administrator']);

        // Create user superadmin
        $user = User::create([
            'name'      => 'Super Administrator',
            'username'  => 'superadmin',
            'email'     => 'superadmin@example.com',
            'is_active'     => 1,
            'password'  => Hash::make('password123'),
            'password_default'     => 'superadmin',
        ]);

        // Add role to user
        $user->assignRole($role1);

        User::create([
            'name'      => 'User Pertama',
            'username'  => 'userpertama',
            'email'     => 'userpertama@example.com',
            'is_active'     => 0,
            'password'  => Hash::make('password'),
            'password_default'     => 'password',
        ]);
        
        User::create([
            'name'      => 'User Kedua',
            'username'  => 'userkedua',
            'email'     => 'userkedua@example.com',
            'is_active'     => 1,
            'password'  => Hash::make('password'),
            'password_default'     => 'password',
        ]);

        for($i=1;$i<20;$i++){
            User::create([
                'name'      => 'User '.$i,
                'username'  => 'user'.$i,
                'email'     => 'user'.$i.'@example.com',
                'is_active'     => 1,
                'password'  => Hash::make('password'),
                'password_default'     => 'password',
            ]);
        }
    }
}
