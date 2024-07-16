<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
   public function run(): void
    {
        if(!User::where('email', 'professormarciodutra@gmail.com')->first()){
            User::create([
                'name' => 'Márcio',
                'email' => 'professormarciodutra@gmail.com',
                'password' => Hash::make('123456a', ['rounds' => 12]),
        ]);
    }
        if(!User::where('email', 'ivonete@gmail.com')->first()){
        User::create([
            'name' => 'Ivonete',
            'email' => 'ivonete@gmail.com',
            'password' => Hash::make('123456a', ['rounds' => 12]),
        ]);
    }
        if(!User::where('email', 'yasmin@gmail.com')->first()){
            User::create([
                'name' => 'Yasmin',
                'email' => 'yasmin@gmail.com',
                'password' => Hash::make('123456a', ['rounds' => 12]),
        ]);
    }
        if(!User::where('email', 'cassio@gmail.com')->first()){
            User::create([
                'name' => 'Cassio',
                'email' => 'cassio@gmail.com',
                'password' => Hash::make('123456a', ['rounds' => 12]),
        ]);
    }
}
}





