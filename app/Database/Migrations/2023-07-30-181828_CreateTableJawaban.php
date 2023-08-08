<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTableJawaban extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'jawaban_id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'user_id' => [
                'type'           => 'INT',
                'constraint'     => 5,
            ],
            'jawaban' => [
                'type'       => 'VARCHAR',
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

        $this->forge->addKey('jawaban_id', true);
        $this->forge->createTable('jawaban');
    }


    public function down()
    {
        $this->forge->dropTable('jawaban');
    }
}
