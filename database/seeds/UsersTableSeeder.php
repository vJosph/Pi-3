<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $user = User::where('email','vinicius@jose.com')->first();

        if(!$user){
            User::create([
                'name' => 'Vinicius José',
                'email' => 'vinicius@jose.com',
                'password' => Hash::make('123456789'),
                'role' => 'admin'
            ]);
        }else{
            if($user->role != 'admin'){
                $user->role = 'admin';
                $user->save();
            }
        }
    }
}
