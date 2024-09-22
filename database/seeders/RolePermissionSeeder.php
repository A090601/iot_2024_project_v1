<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Permission::create(['name' => 'tambah-user']);
        Permission::create(['name' => 'edit-user']);
        Permission::create(['name' => 'hapus-user']);
        Permission::create(['name' => 'lihat-user']);

        Permission::create(['name' => 'tambah-tulisan']);
        Permission::create(['name' => 'edit-tulisan']);
        Permission::create(['name' => 'hapus-tulisan']);
        Permission::create(['name' => 'lihat-tulisan']);

        Permission::create(['name' => 'tambah-tulisan']);
        Permission::create(['name' => 'edit-tulisan']);
        Permission::create(['name' => 'hapus-tulisan']);
        Permission::create(['name' => 'lihat-tulisan']);

        Role::create(['name' => 'admin']);
        Role::create(['name' => 'Management']);
        Role::create(['name' => 'Kepala Management']);

        $roleAdmin = Role::findByName('admin');
        $roleAdmin->givePermissionTo('tambah-user');
        $roleAdmin->givePermissionTo('edit-user');
        $roleAdmin->givePermissionTo('hapus-user');
        $roleAdmin->givePermissionTo('lihat-user');

        $roleManagement = Role::findByName('management');
        $roleManagement->givePermissionTo('tambah-tulisan');
        $roleManagement->givePermissionTo('edit-tulisan');
        $roleManagement->givePermissionTo('hapus-tulisan');
        $roleManagement->givePermissionTo('lihat-tulisan');

        $roleKepalaManagement = Role::findByName('kepala management');
        $roleKepalaManagement->givePermissionTo('tambah-tulisan');
        $roleKepalaManagement->givePermissionTo('edit-tulisan');
        $roleKepalaManagement->givePermissionTo('hapus-tulisan');
        $roleKepalaManagement->givePermissionTo('lihat-tulisan');
    }
}
