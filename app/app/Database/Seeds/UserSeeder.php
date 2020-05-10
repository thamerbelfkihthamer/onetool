<?php

namespace App\Database\Seeds;

use \CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $user = [
            'username' => 'thamaer',
            'email' => 'test@test.com'
        ];

        $this->db->table('users')->insert($user);
    }

}
