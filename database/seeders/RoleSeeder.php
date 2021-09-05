<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role1 = Role::create(['name' => 'Admin']);
        $role2 = Role::create(['name' => 'Blogger']);

        Permission::create(['name' => 'admin.home', 
        'description' => 'See dashboard'])->syncRoles([$role1, $role2]);

        Permission::create(['name' => 'admin.users.index', 
        'description' => 'See user\'s list'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.users.edit', 
        'description' => 'Edit user\'s roles'])->syncRoles([$role1]);
        // Permission::create(['name' => 'admin.users.update', 
        // 'description' => ''])->syncRoles([$role1]);
        
        Permission::create(['name' => 'admin.categories.index', 
        'description' => 'See category\'s list'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.categories.create', 
        'description' => 'Create category'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.categories.edit', 
        'description' => 'Edit category'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.categories.destroy', 
        'description' => 'Delete category'])->syncRoles([$role1]);
        
        Permission::create(['name' => 'admin.tags.index', 
        'description' => 'See tag\'s list'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.tags.create', 
        'description' => 'Create tag'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.tags.edit', 
        'description' => 'Edit tag'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.tags.destroy', 
        'description' => 'Delete tag'])->syncRoles([$role1]);
        
        Permission::create(['name' => 'admin.posts.index', 
        'description' => 'See post\'s list'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.posts.create', 
        'description' => 'Create post'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.posts.edit', 
        'description' => 'Edit post'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.posts.destroy', 
        'description' => 'Delete post'])->syncRoles([$role1, $role2]);

        
    }
}
