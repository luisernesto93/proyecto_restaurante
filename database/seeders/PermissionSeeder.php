<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            'user-list',
            'user-create',
            'user-edit',
            'user-delete',
            'role-create',
            'role-edit',
            'role-list',
            'role-delete',
            'permission-list',
            'permission-create',
            'permission-edit',
            'permission-delete',
            'cliente-listar',
            'cliente-crear',
            'cliente-editar',
            'cliente-eliminar',
            'cliente-act-estado',
            'estudiante-listar',
            'estudiante-crear',
            'estudiante-editar',
            'estudiante-eliminar',
            'estudiante-act-estado',
        ];

        foreach($permissions as $permission){
            Permission::create([
                'name' => $permission
            ]);
        }

        // All Permissions
        $permission_saved = Permission::pluck('id')->toArray();
        
        // Give Role Admin All Access
        $role = Role::whereId(1)->first();
        $role->syncPermissions($permission_saved);
        
        // Admin Role Sync Permission
        $user = User::where('role_id', 1)->first();
        $user->assignRole($role->id);
    }
}
