<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        // Permission::create(['name' => 'edit posts']);
        // Permission::create(['name' => 'delete posts']);
        // Permission::create(['name' => 'manage users']);
       // Permission::create(['name' => 'view posts']);

       // $adminRole = Role::create(['name' => 'admin']);
        //$adminRole->givePermissionTo(Permission::all()); // Admin has all permissions

        //$editorRole = Role::create(['name' => 'viewer']);
        //$editorRole->givePermissionTo(['view posts']);

        // Assign role to a user (example)
        $user = \App\Models\User::find(2);
        if ($user) {
            //$user->assignRole('viewer');
           // $user->revokePermissionTo('edit posts');
            //$user->revokePermissionTo(['delete posts', 'edit posts']);
            $user->removeRole('editor');

        }
    }
}
