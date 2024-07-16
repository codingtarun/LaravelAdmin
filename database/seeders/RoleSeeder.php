<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin_role = Role::create(
            [
                'name' => 'admin',
                'guard_name' => 'web',
            ]
        );
        $admin_role->syncPermissions([
            'create user',
            'viewAny user',
            'view user',
            'update user',
            'delete user'
        ]);
    }
}