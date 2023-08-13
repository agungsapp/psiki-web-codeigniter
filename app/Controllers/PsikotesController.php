<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\BankSoalModel;
use App\Models\JawabanModel;

class PsikotesController extends BaseController
{

    protected $bankSoal, $session, $jawabanModel;

    public function __construct()
    {
        $this->bankSoal = new BankSoalModel();
        $this->session = \Config\Services::session();
        $this->jawabanModel = new JawabanModel();
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
            'soal' => $this->bankSoal->findAll(),
            // 'soal' => $this->bankSoal->findAll($perPage, $offset),
            'page' => $page,
            'session' => session()

            // 'allQuestions' => array_chunk($this->getPsychotestQuestions(), 5)
        ];

        // dd($_SESSION);


        // echo "<script>console.log(" . $data['page'] . ")</script>";

        // dd($data['allQuestions']);

        // dd($data['session']);
        $checkJawaban = $this->jawabanModel->cekStatusPsikotes(user_id());

        if ($checkJawaban > 0) {
            $data = [
                'menu' => 'psikotes',
                'footer' => 'fixed',
            ];
            return view('pages/success_psikotes', $data);
        } else {
            return view('pages/psikotes', $data);
        }
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


    public function diagnosis()
    {
        $postData = $this->request->getPost();
        // dd($postData['soal-7']);
        // Misalkan Anda memiliki nilai user_id dalam variabel $user_id
        $user_id = user_id(); // Ganti dengan cara Anda mendapatkan user_id
        $postData['user_id'] = $user_id;

        $i = 1;
        while ($postData && $i <= 15) {
            $data = [
                'user_id' => user_id(),
                'jawaban' => $postData['soal-' . $i]
            ];
            $this->jawabanModel->insert($data);
            $i++;
        }

        $data = [
            'menu' => 'psikotes',
            'footer' => 'fixed',
            'pesan' => 'Data psikotes kamu sudah berhasil di simpan 😊'
        ];



        return view('pages/success_psikotes', $data);
    }

    public function cekDiagnosis()
    {
        $data = [
            'menu' => 'psikotes',
            'footer' => 'fixed',
        ];
        return view('pages/hasil_diagnosis', $data);
    }

    public function getJawabanUser()
    {
        // Mendapatkan data jawaban dari database menggunakan model (contoh menggunakan model JawabanModel)
        $jawabanData = $this->jawabanModel->getDataJawabanByID(user_id()); // Anda dapat mengganti metode findAll() dengan metode lain sesuai kebutuhan
        // dd($jawabanData);
        // Kembalikan data jawaban dalam format JSON sebagai respons
        return $this->response->setJSON($jawabanData);
    }
}
