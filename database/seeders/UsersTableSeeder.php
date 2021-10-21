<?php

namespace Database\Seeders;

use App\Models\User;
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
        User::factory()->count(10)->create();

        $user = User::find(1);
        $user->name = 'George';
        $user->email = '749090670@qq.com';
        $user->avatar = 'http://larabbs.test/uploads/images/avatars/2021-10/1_1634721803_VxsJxRvHTU.jpg';
        $user->save();
    }
}
