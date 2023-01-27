<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class CreateAdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('123456')
        ]
    );
        $role =[
            ['name'=>'admin'],
            ['name'=>'principal'],
            ['name'=>'register'],
            ['name'=>'teacher'],
            ['name'=>'student']
        ];
        foreach ($role as  $value) {
            $rol = new Role;
            $rol->name=$value['name'];
            $rol->save();
            if($rol->name == 'admin'){
                $permission =Permission::all();
                foreach ($permission as $value) {
                    $rol->givePermissionTo($value->name);
                }
            }
            else if ($rol->name == 'principal') {

                $rol->givePermissionTo('module-create');
                $rol->givePermissionTo('module-delete');
                $rol->givePermissionTo('module-edit');
                $rol->givePermissionTo('module-list');
        }



       $user->assignRole('admin');

    }
}
}
