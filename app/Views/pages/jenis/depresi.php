<?= $this->extend('pages/layouts/main'); ?>
<?= $this->section('content'); ?>
<section class="container flex justify-center px-0 sm:px-12 md:px-32 md:py-8 w-full">
  <div class="p-10  w-full lg:w-3/4">
    <div>
      <p class="mb-3 font-semibold text-2xl font-dm text-green-900 text-center">
        Depresi
      </p>
    </div>
    <!-- card chat box right start -->
    <div class="mt-4 flex items-center justify-end">
      <!-- chat box -->
      <div class="w-3/4">
        <div class="px-5 py-3 me-5 border-[3px] border-basic bg-pupus rounded-xl">
          <p class="text-green-900 font-dm font-semibold text-sm md:text-md lg:text-lg  tracking-tight leading-5">
            Dokter, saya ingin tahu tentang depresi. Apa sebenarnya depresi itu?
          </p>
        </div>
      </div>
      <!-- gambar -->
      <div class="rounded-full overflow-hidden">
        <img class="w-[100px]" src="<?= base_url('user/assets'); ?>/img/dokter-cwo.jpg" alt="dokter" srcset="">
      </div>
    </div>
    <!-- card chat box right end -->
    <!-- card chat box left start -->
    <div class="mt-4 flex items-center justify-start">
      <!-- chat box -->
      <div class="order-last w-3/4">
        <div class="px-5 py-3 ms-5 border-[3px] border-basic bg-pupus rounded-xl">
          <p class="text-green-900 font-dm font-semibold text-sm md:text-md lg:text-lg tracking-tight leading-5">
            Depresi adalah suatu kondisi yang ditandai dengan gejala-gejala tertentu. Secara umum, gejala depresi
            dapat mencakup
            berpikir yang tidak jelas atau bingung, adanya halusinasi pendengaran, keterlibatan sosial yang
            berkurang, ekspresi
            emosional yang terbatas, dan kurangnya motivasi.
          </p>
        </div>
      </div>
      <!-- gambar -->
      <div class=" rounded-full overflow-hidden">
        <img class="w-[200px] lg:w-[100px]" src="<?= base_url('user/assets'); ?>/img/dokter-cwe.jpg" alt="dokter" srcset="">
      </div>
    </div>
    <!-- card chat box left end -->
    <!-- card chat box right start -->
    <div class="mt-4 flex items-center justify-end">
      <!-- chat box -->
      <div>
        <div class="px-5 py-3 me-5 border-[3px] border-basic bg-pupus rounded-xl">
          <p class="text-green-900 font-dm font-semibold text-sm md:text-md lg:text-lg  tracking-tight leading-5">
            Apa saja ciri-ciri atau gejala yang sering muncul pada depresi, Dok?
          </p>
        </div>
      </div>
      <!-- gambar -->
      <div class="rounded-full overflow-hidden">
        <img class="w-[100px]" src="<?= base_url('user/assets'); ?>/img/dokter-cwo.jpg" alt="dokter" srcset="">
      </div>
    </div>
    <!-- card chat box right end -->
    <!-- card chat box left start -->
    <div class="mt-4 mb-20 flex items-center justify-start">
      <!-- chat box -->
      <div class="order-last w-3/4">
        <div class="px-5 py-3 ms-5 border-[3px] border-basic bg-pupus rounded-xl">
          <p class="text-green-900 font-dm font-semibold text-sm md:text-md lg:text-lg tracking-tight leading-5">
            Ada beberapa ciri-ciri atau gejala yang sering terkait dengan depresi. Secara psikologis, seseorang yang
            mengalami
            depresi umumnya menunjukkan rasa cemas dan khawatir yang berlebihan, emosi yang tidak stabil, serta rasa
            putus asa atau
            frustrasi. Mereka juga mungkin mengalami perubahan mood yang drastis, seperti perasaan sedih yang
            berkepanjangan dan
            kehilangan minat atau kegembiraan dalam aktivitas yang sebelumnya dianggap menyenangkan.</p>
        </div>
      </div>
      <!-- gambar -->
      <div class=" rounded-full overflow-hidden">
        <img class="w-[200px] lg:w-[100px]" src="<?= base_url('user/assets'); ?>/img/dokter-cwe.jpg" alt="dokter" srcset="">
      </div>
    </div>
    <!-- card chat box left end -->
  </div>
</section>
<?= $this->endSection(); ?>