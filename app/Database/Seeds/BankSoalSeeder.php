<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class BankSoalSeeder extends Seeder
{
    public function run()
    {
        //
        $data = [
            [
                'soal' => 'Apakah Anda sering merasa tidak puas dengan berat badan Anda?',
            ],
            [
                'soal' => 'Apakah Anda sering merasa sedih atau kehilangan minat dalam melakukan kegiatan yang biasanya Anda nikmati?',
            ],
            [
                'soal' => 'Apakah Anda sering mendengar suara-suara yang tidak ada hubungannya dengan lingkungan sekitar?',
            ],
        ];

        $this->db->table('bank_soal')->insertBatch($data);
    }
}
