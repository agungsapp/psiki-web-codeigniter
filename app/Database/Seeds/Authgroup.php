<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Authgroup extends Seeder
{
    public function run()
    {
        //
        $data = [
            [
                'name' => 'admin',
                'description'    => 'administrator',
            ],
            [
                'name' => 'user',
                'description'    => 'reguler user',
            ]
        ];

        // Simple Queries
        // $this->db->query('INSERT INTO users (username, email) VALUES(:username:, :email:)', $data);

        // Using Query Builder
        // $this->db->table('auth_groups')->insert($data);
        $this->db->table('auth_groups')->insertBatch($data);
    }
}
