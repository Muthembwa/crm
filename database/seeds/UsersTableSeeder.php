<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [[
            'id'             => 1,
            'name'           => 'Admin',
            'email'          => 'admin@admin.com',
            'password'       => '$2y$10$y7JNneJC8gLdJR34EqMDreaRMMeD41kjt8Btewtpi8nk8MzpBr4cC',
            'remember_token' => null,
            'created_at'     => '2019-06-27 14:59:38',
            'updated_at'     => '2019-06-27 14:59:38',
            'deleted_at'     => null,
        ]];

        User::insert($users);
    }
}
