<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(config('admin.name')) {
            User::firstOrCreate(
                [ 
                    'email' => config('admin.email') 
                ],
                [
                    'name' => config('admin.name'),
                    'password' => Hash::make(config('admin.password')),
                    'role' => config('admin.role'),
                    'birthday' => now()->subYears(22),
                ]
            );
        }
    }
}
