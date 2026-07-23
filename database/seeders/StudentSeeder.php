<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        User::create([
            'name' => 'Ahmed Amrani',
            'email' => 'student@enaa.ma',
            'password' => Hash::make('password'),
            'role' => 'student',
        ]);
        User::create([
            'name' => 'Sara El Idrissi',
            'email' => 'student2@enaa.ma',
            'password' => Hash::make('password'),
            'role' => 'student',
        ]);

        User::create([
            'name' => 'Youssef Alaoui',
            'email' => 'student3@enaa.ma',
            'password' => Hash::make('password'),
            'role' => 'student',
        ]);
    }
}
