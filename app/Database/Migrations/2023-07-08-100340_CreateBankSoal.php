<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateBankSoal extends Migration
{
    public function up()
    {
        //
        $this->forge->addField([
            'soal_id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'soal' => [
                'type'       => 'TEXT',
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
        $this->forge->addKey('soal_id', true);
        $this->forge->createTable('bank_soal');
    }

    public function down()
    {
        //
    }
}
