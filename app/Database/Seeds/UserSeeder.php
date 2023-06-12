<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $this->db->table('user')->insert([
            'username' => 'najwa',
            'email' => 'najwa@gmail.com',
            'password' => password_hash('najwa123', PASSWORD_DEFAULT),
        ]);
    }
}
