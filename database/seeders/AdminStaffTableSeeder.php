<?php
namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminStaffTableSeeder extends Seeder {
    /**
     * Run the database seeds.
     */
    public function run(): void {
        $adminRoleId = Role::where('name', 'admin')->value('id');
        $staffRoleId = Role::where('name', 'staff')->value('id');

        User::create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'password' => bcrypt('123456'),
            'phone_number' => '099999999',
            'status' => 'active',
            'avatar' => '',
            'address' => 'Da Nang, Vietnam',
            'role_id' => $adminRoleId,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        User::create([
            'name' => 'Staff User',
            'email' => 'staff@example.com',
            'password' => bcrypt('123456'),
            'phone_number' => '088888888',
            'status' => 'active',
            'avatar' => '',
            'address' => 'Gia Lai, Vietnam',
            'role_id' => $staffRoleId,
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
