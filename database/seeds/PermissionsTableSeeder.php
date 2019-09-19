<?php

use App\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'         => '1',
                'title'      => 'user_management_access',
                'created_at' => '2019-09-19 18:11:53',
                'updated_at' => '2019-09-19 18:11:53',
            ],
            [
                'id'         => '2',
                'title'      => 'permission_create',
                'created_at' => '2019-09-19 18:11:53',
                'updated_at' => '2019-09-19 18:11:53',
            ],
            [
                'id'         => '3',
                'title'      => 'permission_edit',
                'created_at' => '2019-09-19 18:11:53',
                'updated_at' => '2019-09-19 18:11:53',
            ],
            [
                'id'         => '4',
                'title'      => 'permission_show',
                'created_at' => '2019-09-19 18:11:53',
                'updated_at' => '2019-09-19 18:11:53',
            ],
            [
                'id'         => '5',
                'title'      => 'permission_delete',
                'created_at' => '2019-09-19 18:11:53',
                'updated_at' => '2019-09-19 18:11:53',
            ],
            [
                'id'         => '6',
                'title'      => 'permission_access',
                'created_at' => '2019-09-19 18:11:53',
                'updated_at' => '2019-09-19 18:11:53',
            ],
            [
                'id'         => '7',
                'title'      => 'role_create',
                'created_at' => '2019-09-19 18:11:53',
                'updated_at' => '2019-09-19 18:11:53',
            ],
            [
                'id'         => '8',
                'title'      => 'role_edit',
                'created_at' => '2019-09-19 18:11:53',
                'updated_at' => '2019-09-19 18:11:53',
            ],
            [
                'id'         => '9',
                'title'      => 'role_show',
                'created_at' => '2019-09-19 18:11:53',
                'updated_at' => '2019-09-19 18:11:53',
            ],
            [
                'id'         => '10',
                'title'      => 'role_delete',
                'created_at' => '2019-09-19 18:11:53',
                'updated_at' => '2019-09-19 18:11:53',
            ],
            [
                'id'         => '11',
                'title'      => 'role_access',
                'created_at' => '2019-09-19 18:11:53',
                'updated_at' => '2019-09-19 18:11:53',
            ],
            [
                'id'         => '12',
                'title'      => 'user_create',
                'created_at' => '2019-09-19 18:11:53',
                'updated_at' => '2019-09-19 18:11:53',
            ],
            [
                'id'         => '13',
                'title'      => 'user_edit',
                'created_at' => '2019-09-19 18:11:53',
                'updated_at' => '2019-09-19 18:11:53',
            ],
            [
                'id'         => '14',
                'title'      => 'user_show',
                'created_at' => '2019-09-19 18:11:53',
                'updated_at' => '2019-09-19 18:11:53',
            ],
            [
                'id'         => '15',
                'title'      => 'user_delete',
                'created_at' => '2019-09-19 18:11:53',
                'updated_at' => '2019-09-19 18:11:53',
            ],
            [
                'id'         => '16',
                'title'      => 'user_access',
                'created_at' => '2019-09-19 18:11:53',
                'updated_at' => '2019-09-19 18:11:53',
            ],
            [
                'id'         => '17',
                'title'      => 'registro_create',
                'created_at' => '2019-09-19 18:11:53',
                'updated_at' => '2019-09-19 18:11:53',
            ],
            [
                'id'         => '18',
                'title'      => 'registro_edit',
                'created_at' => '2019-09-19 18:11:53',
                'updated_at' => '2019-09-19 18:11:53',
            ],
            [
                'id'         => '19',
                'title'      => 'registro_show',
                'created_at' => '2019-09-19 18:11:53',
                'updated_at' => '2019-09-19 18:11:53',
            ],
            [
                'id'         => '20',
                'title'      => 'registro_delete',
                'created_at' => '2019-09-19 18:11:53',
                'updated_at' => '2019-09-19 18:11:53',
            ],
            [
                'id'         => '21',
                'title'      => 'registro_access',
                'created_at' => '2019-09-19 18:11:53',
                'updated_at' => '2019-09-19 18:11:53',
            ],
            [
                'id'         => '22',
                'title'      => 'contacto_create',
                'created_at' => '2019-09-19 18:11:53',
                'updated_at' => '2019-09-19 18:11:53',
            ],
            [
                'id'         => '23',
                'title'      => 'contacto_edit',
                'created_at' => '2019-09-19 18:11:53',
                'updated_at' => '2019-09-19 18:11:53',
            ],
            [
                'id'         => '24',
                'title'      => 'contacto_show',
                'created_at' => '2019-09-19 18:11:53',
                'updated_at' => '2019-09-19 18:11:53',
            ],
            [
                'id'         => '25',
                'title'      => 'contacto_delete',
                'created_at' => '2019-09-19 18:11:53',
                'updated_at' => '2019-09-19 18:11:53',
            ],
            [
                'id'         => '26',
                'title'      => 'contacto_access',
                'created_at' => '2019-09-19 18:11:53',
                'updated_at' => '2019-09-19 18:11:53',
            ],
        ];

        Permission::insert($permissions);
    }
}
