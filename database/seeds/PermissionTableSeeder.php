<?php

use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Permission;

use App\Support\PermissionsHelper;

use Spatie\Permission\Models\Role;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = $this->getPermissions();
        $permissions = PermissionsHelper::getFlattenPermissions($permissions);
        foreach ($permissions as $permission) {
            $model = Permission::firstOrNew(['name' => $permission]);
            $model->save();
        }
    }

    private function getPermissions()
    {
        return config('permissions');
    }
}
