<?= $this->extend('pages/layouts/main'); ?>
<?= $this->section('content'); ?>


<section class="container flex justify-center px-0 sm:px-12 md:px-20 lg:px-32 md:py-8 w-full">
  <div class="py-12 px-6 md:px-16 rounded-2xl shadow-xl  w-full bg-pupus lg:w-3/4">

    <h1 class="mb-5 font-bold text-2xl text-basic">Hasil Diagnosa</h1>
    <p class="mb-5">Berdasarkan hasil psikotes yang telah Anda lakukan, terlihat bahwa Anda mengalami gejala mental yang bernama <strong id="hasilDiagnosis capitalize" style="text-transform: capitalize;">"<?= $hasil; ?>"</strong> Oleh karena itu, kami sangat menyarankan Anda untuk berkonsultasi dengan dokter yang lebih memahami.</p>
    <p class="mb-3">Berikut adalah beberapa saran pertolongan yang dapat kami berikan:</p>

    <ul class="list-disc mb-5">
      <?php foreach ($saran as $row) : ?>
        <li>
          <?= $row->saran; ?>
        </li>
      <?php endforeach ?>
    </ul>
    <p>Dengan mengikuti saran-saran di atas, kami berharap Anda dapat merasa lebih baik. Semoga segala upaya dan langkah yang Anda ambil membawa keberhasilan dan kesuksesan. Semangat!</p>

  </div>


</section>

<?= $this->endSection(); ?>