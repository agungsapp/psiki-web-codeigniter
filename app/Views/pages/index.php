<?= $this->extend('pages/layouts/main'); ?>
<?= $this->section('content'); ?>
<!-- main content -->

<section class="md:flex md:items-center">
  <div class="container p-10 md:p-32 w-full md:w-[70%]">

    <div class="">
      <p class="text-md font-dm text-basic font-bold">Wellcome to PsikiWeb 👋</p>
    </div>
    <div class="mt-12">
      <p class="text-slate-900 text-4xl md:text-7xl font-semibold">Solusi Untuk Konsultasi Anda</p>
      <p class="mt-4 text-slate-900 text-2xl md:text-4xl ">Psikiweb menyediakan konsultasi gratis untuk memeriksa
        kesehatan mental Anda</p>
    </div>
  </div>
  <div class="ms-32 w-[20%]  ">
    <img class="w-full" src="<?= base_url('user/assets'); ?>/img/banner-dokter.png" alt="banner image">
  </div>
</section>


<!-- footer -->
<?= $this->endSection(); ?>