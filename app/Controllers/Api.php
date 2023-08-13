<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Api extends BaseController
{
    public function index()
    {
        //
    }

    // Fungsi untuk mengambil data pertanyaan dari server
    public function getQuestions()
    {
        $data = [
            //Data soal psikotest disimpan di sini, misalnya:
            ['soal_id' => 1, 'soal' => 'Pertanyaan 1'],
            ['soal_id' => 2, 'soal' => 'Pertanyaan 2'],
            // Tambahkan pertanyaan lainnya...
        ];
        return $this->response->setJSON($data);
    }

    // Fungsi untuk menyimpan jawaban dari pertanyaan
    public function saveAnswer()
    {
        $questionId = $this->request->getPost('question_id');
        $answer = $this->request->getPost('answer');

        // Simpan jawaban ke sesi atau basis data sesuai kebutuhan
        // Misalnya:
        // session()->set('jawaban[' . $questionId . ']', $answer);
        // atau simpan ke basis data

        // Beri respons bahwa jawaban berhasil disimpan
        return $this->response->setJSON(['message' => 'Jawaban berhasil disimpan']);
    }
}
