<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
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
        $User_data = new User;
        $User_data->name='admin';
        $User_data->email='admin12@gmail.com';
        $User_data->phone='1234567890';
        $User_data->password = Hash::make('12345678');
        $User_data->save();
    }
}
