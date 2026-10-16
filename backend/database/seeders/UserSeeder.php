<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [    
                'name'      => 'Jihan Amelia',
                'email'     => 'admin@gmail.com',
                'password'  => Hash::make('password123'),
                'role'      => 'admin',
                'no_hp'     => '081234567890',
                'alamat'    => 'Bandung, Jawa Barat',
            ],
            [
                'name'      => 'Desfitta Alvareza Irawan',
                'email'     => 'petugas@gmail.com',
                'password'  => Hash::make('password123'),
                'role'      => 'petugas',
                'no_hp'     => '082345678901',
                'alamat'    => 'Bandung, Jawa Barat',
            ],
            [
                'name'      => 'Siti Fatimah',
                'email'     => 'siti@gmail.com',
                'password'  => Hash::make('password123'),
                'role'      => 'peminjam',
                'no_hp'     => '083456789012',
                'alamat'    => 'Bandung, Jawa Barat',
            ],
            [
                'name'      => 'Ayu Anjani Fitri Laksono',
                'email'     => 'ayu@gmail.com',
                'password'  => Hash::make('password123'),
                'role'      => 'peminjam',
                'no_hp'     => '084567890123',
                'alamat'    => 'Bandung, Jawa Barat',
            ],
            [
                'name'      => 'Najla Nadhifah',
                'email'     => 'najla@gmail.com',
                'password'  => Hash::make('password123'),
                'role'      => 'peminjam',
                'no_hp'     => '085678901234',
                'alamat'    => 'Bandung, Jawa Barat',
            ],
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
