<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTablePsikotest extends Migration
{
    public function up()
    {
        //
        $this->forge->addField([
            'psikotes_id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'user_id' => [
                'type'       => 'INT',
                'constraint' => '100',
            ],
            'diagnosis' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('psikotes_id', true);
        $this->forge->createTable('psikotes');
    }

    public function down()
    {
        //
    }
}
