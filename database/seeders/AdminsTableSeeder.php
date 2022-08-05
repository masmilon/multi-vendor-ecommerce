<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $adminRecords = [
            [
                'id' => 1,
                'name' => 'Super Admin',
                'type' => 'superadmin',
                'vendor_id' => 0,
                'mobile' => '01301675750',
                'email' => 'masmilonbd@gmail.com',
                'password' => Hash::make('123456'), // 123456
                // 'password' => '$2a$12$va9/UVQO7ZqP92t3x0nIi.lotJs4LXAJqzDvT8D7Beo0qmDghSjEe', // 123456
                'image' => '',
                'status' => 1,
            ],
        ];

        Admin::insert($adminRecords);
    }
}