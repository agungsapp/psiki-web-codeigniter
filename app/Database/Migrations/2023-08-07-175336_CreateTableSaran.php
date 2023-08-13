<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTableSaran extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'saran_id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'gejala_id' => [
                'type'           => 'INT',
                'constraint'     => 5,
            ],
            'saran' => [
                'type'       => 'TEXT',
                'constraint' => '100',
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true, // Set kolom created_at agar dapat bernilai null
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true, // Set kolom updated_at agar dapat bernilai null
            ],
        ]);

        $this->forge->addKey('saran_id', true);
        $this->forge->createTable('saran');
    }

    public function down()
    {
        $this->forge->dropTable('saran');
    }
}
