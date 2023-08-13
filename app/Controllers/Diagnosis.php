<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\JawabanModel;
use App\Models\SaranModel;
use Phpml\Classification\NaiveBayes;

class Diagnosis extends BaseController
{

    protected $jawabanModel, $saranModel;

    public function __construct()
    {
        $this->jawabanModel = new JawabanModel;
        $this->saranModel = new SaranModel;
    }

    public function index()
    {
        $samples = [
            [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0],
            [0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0],
            [0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0],
            [0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0],
            [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0],
            [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0],
            [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0],
            [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0],
            [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1],
            [0, 1, 1, 0, 0, 0, 1, 0, 0, 0, 1, 1, 1, 1, 1],
            [1, 0, 1, 1, 1, 0, 0, 1, 1, 1, 1, 1, 1, 1, 1],
            [0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 1, 0, 0, 0, 1],
            [0, 0, 0, 0, 0, 1, 0, 1, 0, 0, 0, 0, 0, 0, 0],
            [0, 0, 0, 0, 0, 1, 0, 0, 1, 0, 0, 0, 0, 0, 0],
            [0, 0, 0, 0, 0, 1, 0, 1, 1, 0, 0, 0, 0, 0, 0],
            [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1],
            [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0],
            [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0],
            [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 1, 0, 1],
            [0, 0, 0, 0, 0, 0, 0, 1, 0, 1, 0, 0, 0, 1, 0],
            [0, 0, 0, 0, 0, 0, 0, 1, 0, 1, 0, 0, 0, 0, 0],
            [0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 1, 0],
            [0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 1, 0],
            [0, 0, 0, 1, 1, 0, 0, 0, 1, 0, 0, 0, 1, 0, 0],
            [0, 0, 0, 1, 1, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0],
            [0, 0, 0, 0, 1, 0, 0, 0, 1, 0, 0, 0, 1, 0, 0],
            [0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 1, 0, 0],
            [0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1],
            [0, 0, 0, 0, 0, 1, 0, 0, 0, 1, 0, 0, 0, 0, 1]
        ];
        $labels = [
            'normal', 'normal', 'normal', 'normal', 'normal', 'normal', 'normal',
            'normal', 'normal', 'normal', 'normal', 'normal', 'normal', 'normal',
            'normal', 'normal', 'gangguan kecemasan', 'gangguan mood', 'gangguan kecemasan',
            'gangguan makan', 'gangguan makan', 'gangguan makan', 'obsessive Complusive Disorder',
            'gangguan kepribadian', 'gangguan kepribadian', 'gangguan kepribadian', 'attention deficit hyperactive disorder',
            'attention deficit hyperactive disorder', 'attention deficit hyperactive disorder', 'attention deficit hyperactive disorder',
            'depresi', 'depresi', 'depresi', 'depresi', 'tourette syndrome', 'skizofrenia'
        ];

        $classifier = new NaiveBayes();
        $classifier->train($samples, $labels);

        // $hasil = $classifier->predict([0, 0, 0, 0, 0, 1, 1, 1, 1, 1, 0, 0, 0, 0, 1]);

        $jawabannya = $this->jawabanModel->getDataJawabanByID(user_id());

        // dd($jawabannya);
        $tamp_jawaban = [];
        foreach ($jawabannya as $row => $item) {
            $tamp_jawaban[] = $item->jawaban;
        }
        $tamp_jawaban = array_values($tamp_jawaban);

        // dd($tamp_jawaban);

        $hasil = $classifier->predict($tamp_jawaban);

        // Jika Anda ingin mencetak isi array tamp_jawaban:
        // print_r($tamp_jawaban);
        return "hasilnya adalah " . $hasil;
    }


    public function cekDiagnosis()
    {

        // logic prediksi
        $samples = [
            [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0],
            [0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0],
            [0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0],
            [0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0],
            [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0],
            [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0],
            [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0],
            [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0],
            [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1],
            [0, 1, 1, 0, 0, 0, 1, 0, 0, 0, 1, 1, 1, 1, 1],
            [1, 0, 1, 1, 1, 0, 0, 1, 1, 1, 1, 1, 1, 1, 1],
            [0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 1, 0, 0, 0, 1],
            [0, 0, 0, 0, 0, 1, 0, 1, 0, 0, 0, 0, 0, 0, 0],
            [0, 0, 0, 0, 0, 1, 0, 0, 1, 0, 0, 0, 0, 0, 0],
            [0, 0, 0, 0, 0, 1, 0, 1, 1, 0, 0, 0, 0, 0, 0],
            [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1],
            [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0],
            [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0],
            [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 1, 0, 1],
            [0, 0, 0, 0, 0, 0, 0, 1, 0, 1, 0, 0, 0, 1, 0],
            [0, 0, 0, 0, 0, 0, 0, 1, 0, 1, 0, 0, 0, 0, 0],
            [0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 1, 0],
            [0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 1, 0],
            [0, 0, 0, 1, 1, 0, 0, 0, 1, 0, 0, 0, 1, 0, 0],
            [0, 0, 0, 1, 1, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0],
            [0, 0, 0, 0, 1, 0, 0, 0, 1, 0, 0, 0, 1, 0, 0],
            [0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 1, 0, 0],
            [0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1],
            [0, 0, 0, 0, 0, 1, 0, 0, 0, 1, 0, 0, 0, 0, 1]
        ];
        $labels = [
            'normal', 'normal', 'normal', 'normal', 'normal', 'normal', 'normal',
            'normal', 'normal', 'normal', 'normal', 'normal', 'normal', 'normal',
            'normal', 'normal', 'gangguan kecemasan', 'gangguan mood', 'gangguan kecemasan',
            'gangguan makan', 'gangguan makan', 'gangguan makan', 'obsessive Complusive Disorder',
            'gangguan kepribadian', 'gangguan kepribadian', 'gangguan kepribadian', 'attention deficit hyperactive disorder',
            'attention deficit hyperactive disorder', 'attention deficit hyperactive disorder', 'attention deficit hyperactive disorder',
            'depresi', 'depresi', 'depresi', 'depresi', 'tourette syndrome', 'skizofrenia'
        ];

        $classifier = new NaiveBayes();
        $classifier->train($samples, $labels);
        $jawabannya = $this->jawabanModel->getDataJawabanByID(user_id());
        $tamp_jawaban = [];
        foreach ($jawabannya as $row => $item) {
            $tamp_jawaban[] = $item->jawaban;
        }
        $tamp_jawaban = array_values($tamp_jawaban);

        // predict data
        $hasil = $classifier->predict($tamp_jawaban);


        // logic kode saran

        $tamp_kode_gejala = '';

        switch ($hasil) {
            case "normal":
                $tamp_kode_gejala = 0;
                break;
            case "gangguan kecemasan":
                $tamp_kode_gejala = 1;
                break;
            case "gangguan mood":
                $tamp_kode_gejala = 2;
                break;
            case "skizofrenia":
                $tamp_kode_gejala = 3;
                break;
            case "gangguan makan":
                $tamp_kode_gejala = 4;
                break;
            case "obsessive Complusive Disorder":
                $tamp_kode_gejala = 5;
                break;
            case "gangguan kepribadian":
                $tamp_kode_gejala = 6;
                break;
            case "attention deficit hyperactive disorder":
                $tamp_kode_gejala = 7;
                break;
            case "depresi":
                $tamp_kode_gejala = 8;
                break;
            case "tourette syndrome":
                $tamp_kode_gejala = 9;
                break;
            default:
                echo "Gejala tidak dikenali";
                break;
        };








        // logic view 


        $data = [
            'menu' => 'psikotes',
            'footer' => 'fixed',
            'hasil' => $hasil,
            'saran' => $this->saranModel->cariSaran($tamp_kode_gejala)
        ];

        // dd($data['saran']);

        // dd($data['hasil']);
        return view('pages/hasil_diagnosis', $data);
    }
}
