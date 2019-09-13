<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array = array(
            array(
                'name' => "Admin",
                'email' => "admin@gmail.com",
                'password' => Hash::make("admin123"),
            )
        );
        foreach ($array as $user_data) {
            $user = User::where('email', $user_data['email'])->first();
            if (!$user) {
                $user   =  new User();
            }
            $user->fill($user_data);
            $user->save();
        }
    }
}
