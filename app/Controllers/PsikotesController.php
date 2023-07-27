<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\BankSoalModel;

class PsikotesController extends BaseController
{

    protected $bankSoal, $session;

    public function __construct()
    {
        $this->bankSoal = new BankSoalModel();
        $this->session = \Config\Services::session();
    }



    public function index($page = 1)
    {

        if ($page > 3) {
            $page = 3;
        }

        $perPage = 5; // Jumlah soal per halaman
        $offset = ($page - 1) * $perPage;

        $data = [
            'menu' => 'psikotes',
            'footer' => 'relative',
            'soal' => $this->bankSoal->findAll($perPage, $offset),
            'page' => $page,
            'session' => session()

            // 'allQuestions' => array_chunk($this->getPsychotestQuestions(), 5)
        ];

        // dd($_SESSION);


        echo "<script>console.log(" . $data['page'] . ")</script>";

        // dd($data['allQuestions']);

        // dd($data['session']);

        return view('pages/psikotes', $data);
    }


    // simpan jawaban 
    public function submit_answers($page = 1)
    {
        // Ambil data dari input POST (data dari radio button)
        $postData = $this->request->getPost();


        // Simpan data radio button ke dalam session
        // Disarankan menggunakan id soal sebagai key untuk menyimpan nilai yang dipilih
        foreach ($postData as $key => $value) {
            $this->session->set('soal_' . $key, $value);
            echo "<script>console.log('soal_.$key')</script>";
        }

        // Arahkan ke halaman berikutnya (misalnya halaman berikutnya menggunakan halaman dengan nomor halaman yang lebih tinggi)
        return redirect()->to(site_url('pages/psikotes/' . ($page + 1))); // Ganti $page dengan nilai halaman berikutnya

    }

    public function goback($page = 1)
    {
        if ($page == 1) {
            $page = 1;
        } else {
            $page = $page - 1;
        }
        // Arahkan pengguna kembali ke halaman psikotes dengan parameter page = 1
        return redirect()->to(site_url("pages/psikotes/{$page}"));
    }


    // Fungsi untuk mendapatkan data soal psikotest (dapat diganti dengan data yang sesuai proyek)
    private function getPsychotestQuestions()
    {
        return [
            //Data soal psikotest disimpan di sini, misalnya:
            [
                ['soal_id' => 1, 'soal' => 'Pertanyaan 1'],
                ['soal_id' => 2, 'soal' => 'Pertanyaan 2'],
                ['soal_id' => 3, 'soal' => 'Pertanyaan 3'],
                ['soal_id' => 4, 'soal' => 'Pertanyaan 4'],
                ['soal_id' => 5, 'soal' => 'Pertanyaan 5'],
                ['soal_id' => 6, 'soal' => 'Pertanyaan 6'],
                ['soal_id' => 7, 'soal' => 'Pertanyaan 7'],
                ['soal_id' => 8, 'soal' => 'Pertanyaan 8'],
                ['soal_id' => 9, 'soal' => 'Pertanyaan 9'],
                ['soal_id' => 10, 'soal' => 'Pertanyaan 10'],
                ['soal_id' => 11, 'soal' => 'Pertanyaan 11'],
            ],
        ];
    }


    // clear sessioan data 
    public function clearSessionAnswers()
    {
        // Ambil semua keys yang ada di session
        $allKeys = $this->session->get();

        // Loop melalui semua keys dan hapus hanya jika key mengandung "soal_"
        foreach ($allKeys as $key => $value) {
            if (strpos($key, 'soal_') !== false) {
                $this->session->remove($key);
            }
        }

        // Redirect ke halaman tertentu atau lakukan apa pun yang sesuai dengan kebutuhan Anda
        return redirect()->to(site_url('halaman_tujuan'));
    }
}
