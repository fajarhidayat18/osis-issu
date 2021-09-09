<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
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
        User::create([
            'nisn' => '10923',
            'name' => 'Yunitarhy',
            'kelas' => 'guru',
            'rule' => 'operator',
            'email' => 'rara@gmail.com',
            'password' => Hash::make('password'),
        ]);
    }
}