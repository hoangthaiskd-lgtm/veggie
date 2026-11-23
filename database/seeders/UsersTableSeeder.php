<?php
namespace Database\Seeders;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder {
    /**
     * Run the database seeds.
     */
    public function run(): void {
        $adminRoleId = Role::where('name', 'admin')->value('id');
        $staffRoleId = Role::where('name', 'staff')->value('id');
        $customerRoleId = Role::where('name', 'customer')->value('id');

        User::create([
            'name' => 'Nguyen Van A',
            'email' => 'nguyenvana@example.com',
            'password' => bcrypt('123456'),
            'phone_number' => '0123456789',
            'status' => 'pending',
            'avatar' => '',
            'address' => 'Da Nang, Vietnam',
            'role_id' => $adminRoleId,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        User::create([
            'name' => 'Tran Thi B',
            'email' => 'tranthib@example.com',
            'password' => bcrypt('123456'),
            'phone_number' => '0987654321',
            'status' => 'pending',
            'avatar' => '',
            'address' => 'Gia Lai, Vietnam',
            'role_id' => $staffRoleId,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        User::create([
            'name' => 'Nguyen Minh Dien',
            'email' => 'minhdien@example.com',
            'password' => bcrypt('123456'),
            'phone_number' => '0987654321',
            'status' => 'pending',
            'avatar' => '',
            'address' => 'Ho Chi Minh city, Vietnam',
            'role_id' => $customerRoleId,
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
