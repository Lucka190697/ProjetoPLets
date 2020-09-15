<?php

use Illuminate\Database\Seeder;

use App\Support\PermissionsHelper;
use Spatie\Permission\Models\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $profiles = config('profile-permissions');
        foreach ($profiles as $profile => $permissions) {
            $role = Role::firstOrCreate([
                'name' => $profile,
                'guard_name' => 'web',
            ]);

            $rolePermissions = PermissionsHelper::getFlattenPermissions($permissions);
            $role->syncPermissions($rolePermissions);
        }
    }
}
