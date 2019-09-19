<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'id'             => 1,
                'name'           => 'Admin',
                'email'          => 'admin@admin.com',
                'password'       => '$2y$10$9PmscTBo2UgZ9fCLrbMfm.jgobvwyeFe.E4zqQ1.vnvXuhbAMmB5O',
                'remember_token' => null,
                'created_at'     => '2019-09-19 18:11:53',
                'updated_at'     => '2019-09-19 18:11:53',
            ],
        ];

        User::insert($users);
    }
}
