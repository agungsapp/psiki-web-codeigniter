<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Users extends Migration
{
    public function up()
    {
        // //
        // $this->forge->addField([
        //     'user_id' => [
        //         'type'           => 'INT',
        //         'constraint'     => 5,
        //         'unsigned'       => true,
        //         'auto_increment' => true,
        //     ],
        //     'name' => [
        //         'type'       => 'VARCHAR',
        //         'constraint' => '100',
        //     ],
        //     'username' => [
        //         'type'       => 'VARCHAR',
        //         'constraint' => '100',
        //     ],
        //     'email' => [
        //         'type'       => 'VARCHAR',
        //         'constraint' => '100',
        //     ],
        //     'password' => [
        //         'type'       => 'VARCHAR',
        //         'constraint' => '100',
        //     ],
        //     'umur' => [
        //         'type'       => 'INT',
        //         'constraint' => '100',
        //     ],
        // ]);
        // $this->forge->addKey('user_id', true);
        // $this->forge->createTable('users');
    }

    public function down()
    {
        //
    }
}
