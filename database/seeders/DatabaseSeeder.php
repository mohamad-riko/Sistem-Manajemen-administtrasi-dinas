<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
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
        User::create([
            'name'=>'User',
            'email'=>'user@email.com',
            'password'=>Hash::make('user1234'),
        
        
            'name'=>'Mohamad Riko',
            'email'=>'riko@gmail.com',
            'password'=>Hash::make('riko10'),
  
        ]);
    }
}



