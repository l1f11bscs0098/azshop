<?php

namespace Modules\User\Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\User\Entities\Role;
use Modules\User\Entities\User;
use Cartalyst\Sentinel\Laravel\Facades\Activation;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $adminRole = Role::find(1);

        $Mejan = User::create([
            'first_name' => 'Mejan',
            'last_name' => 'Hassan',
            'email' => 'emran@ainodes.com',
            'password' => bcrypt(123456),
        ]);

        $activation = Activation::create($Mejan);
        Activation::complete($Mejan, $activation->code);

        $adminRole->users()->attach($Mejan);

        $sujon = User::create([
            'first_name' => 'FI',
            'last_name' => 'Sujon',
            'email' => 'fisujon20@gmail.com',
            'password' => bcrypt(123456),
        ]);

        $activation = Activation::create($sujon);
        Activation::complete($sujon, $activation->code);

        $adminRole->users()->attach($sujon);
    }
}
