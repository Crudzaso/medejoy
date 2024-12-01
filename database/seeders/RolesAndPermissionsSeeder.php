<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Permission::create(['name' => 'view welcome']);
        Permission::create(['name' => 'access dashboard']);
        Permission::create(['name' => 'buy raffles']);
        Permission::create(['name' => 'create raffles']);
        Permission::create(['name' => 'update own raffles']);
        Permission::create(['name' => 'delete own raffles']);
        Permission::create(['name' => 'manage roles and permissions']);

        // Crear roles y asignar permisos
        $guest = Role::create(['name' => 'guest']);
        $guest->givePermissionTo('view welcome');

        $client = Role::create(['name' => 'client']);
        $client->givePermissionTo(['access dashboard', 'buy raffles']);

        $organizer = Role::create(['name' => 'organizer']);
        $organizer->givePermissionTo([
            'access dashboard',
            'buy raffles',
            'create raffles',
            'update own raffles',
            'delete own raffles',
        ]);

        $admin = Role::create(['name' => 'admin']);
        $admin->givePermissionTo(Permission::all());
    }
}
