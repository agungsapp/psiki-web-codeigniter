<?= $this->extend('pages/layouts/main'); ?>
<?= $this->section('content'); ?>
<section class="container flex justify-center px-0 sm:px-12 md:px-20 lg:px-32 md:py-8 w-full">
  <div class="py-3 px-6 md:px-16  w-full lg:w-3/4">
    <!-- card question start -->
    <h1 class="text-2xl mb-5 font-bold text-basic">Selamat, <?= user()->first_name; ?>!</h1>

    <h1>Kerja yang Hebat! Kamu Telah Menyelesaikan Psikotes dengan Sangat Baik! 😊</h1>
    <h1>Keberanianmu untuk menjalani proses ini akan memberikanmu wawasan tentang dirimu sendiri.</h1>
    <h1>Tanpa penundaan lebih lanjut, mari kita ungkap hasil diagnosis mental yang kamu derita.</h1>
    <h1>Siapkan dirimu untuk penemuan yang mendalam tentang potensimu dan tantangan yang bisa diatasi!</h1>
    <br>
    <br>
    <a href="/diagnosis/cekDiagnosis" class=" bg-basic px-5 py-3 text-md rounded-xl text-white">Cek Hasil Diagnosis Sekarang</a>
  </div>


</section>
<?= $this->endSection(); ?>