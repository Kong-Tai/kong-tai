<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('permissions')->truncate();
        DB::table('roles')->truncate();
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();
        $roles = array(
            'user1',
            'user2',
            'user3'
        );
        foreach ($roles as $name) {
            $role = Role::create(['name' => $name, 'guard_name' => 'user']);
        }
        $permissions = array(
            'User Management',
            'Organisation details',
            'Property Info',
            'Property Photography',
            'Property Analytics',
            'Approve Change Requests',
            'Publish Property',
            'Unpublish Property',
            'Allow Event Appointments (Operator)',
            'Allow Event Appointments (Photographer)'
        );
        foreach ($permissions as $name) {
            $permission = Permission::create(['name' => $name, 'guard_name' => 'admin']);
        }
        $roles = array(
            'Brian' => array(
                '1', '2', '3', '4', '5', '6', '7', '8', '9'
            )
        );
        foreach ($roles as $name => $value) {
            $role = Role::create(['name' => $name, 'guard_name' => 'admin',]);
            foreach ($value as $permission) {
                $role->givePermissionTo($permission);
            }
        }
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
