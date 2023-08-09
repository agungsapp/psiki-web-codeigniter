<?= $this->extend('pages/layouts/main'); ?>
<?= $this->section('content'); ?>
<section class="container flex justify-center px-0 sm:px-12 md:px-32 md:py-8 w-full">
  <div class="p-10  w-full lg:w-3/4">
    <div>
      <p class="mb-3 font-semibold text-2xl font-dm text-green-900 text-center">
        Attention Deficit Hyperactive Disorder
      </p>
    </div>
    <!-- card chat box right start -->
    <div class="mt-4 flex items-center justify-end">
      <!-- chat box -->
      <div class="w-3/4">
        <div class="px-5 py-3 me-5 border-[3px] border-basic bg-pupus rounded-xl">
          <p class="text-green-900 font-dm font-semibold text-sm md:text-md lg:text-lg  tracking-tight leading-5">
            Dokter, saya ingin mengetahui tentang ADHD. Apa sebenarnya ADHD itu?
          </p>
        </div>
      </div>
      <!-- gambar -->
      <div class="rounded-full overflow-hidden">
        <img class="w-[200px] lg:w-[100px]" src="<?= base_url('user/assets'); ?>/img/dokter-cwe.jpg" alt="dokter" srcset="">
      </div>
    </div>
    <!-- card chat box right end -->
    <!-- card chat box left start -->
    <div class="mt-4 flex items-center justify-start">
      <!-- chat box -->
      <div class="order-last w-3/4">
        <div class="px-5 py-3 ms-5 border-[3px] border-basic bg-pupus rounded-xl">
          <p class="text-green-900 font-dm font-semibold text-sm md:text-md lg:text-lg tracking-tight leading-5">
            ADHD, atau Attention-Deficit/Hyperactivity Disorder, adalah suatu kondisi di mana seseorang mengalami
            tingkat hiperaktif
            yang lebih sering dan lebih berat dibandingkan dengan individu lain pada tingkat perkembangan yang
            sebanding. Pada ADHD,
            terdapat ketidakmampuan dalam memusatkan perhatian, tingkat distraktibilitas yang tinggi, dan kesulitan
            dalam
            mempertahankan perhatian dalam jangka waktu yang lama.
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
            Apa saja ciri-ciri atau gejala yang sering muncul pada ADHD, Dok?
          </p>
        </div>
      </div>
      <!-- gambar -->
      <div class="rounded-full overflow-hidden">
        <img class="w-[200px] lg:w-[100px]" src="<?= base_url('user/assets'); ?>/img/dokter-cwe.jpg" alt="dokter" srcset="">
      </div>
    </div>
    <!-- card chat box right end -->
    <!-- card chat box left start -->
    <div class="mt-4 mb-20 flex items-center justify-start">
      <!-- chat box -->
      <div class="order-last w-3/4">
        <div class="px-5 py-3 ms-5 border-[3px] border-basic bg-pupus rounded-xl">
          <p class="text-green-900 font-dm font-semibold text-sm md:text-md lg:text-lg tracking-tight leading-5">
            Beberapa ciri-ciri atau gejala yang sering terkait dengan ADHD antara lain:</p>
          <ul class="ms-5 text-green-900 font-dm font-semibold text-sm md:text-md lg:text-lg tracking-tight leading-5">
            <li>a. Kurangnya kemampuan memusatkan perhatian. Individu dengan ADHD seringkali mengalami kesulitan
              dalam
              mempertahankan
              fokus pada tugas atau aktivitas tertentu. Mereka mudah teralihkan oleh rangsangan eksternal dan sering
              merasa sulit
              untuk tetap konsentrasi.</li>
            <li>b. Kesulitan mempertahankan kontrol impuls. Penderita ADHD cenderung memiliki kesulitan dalam
              menahan diri
              dan
              mengendalikan impulsivitas mereka. Mereka mungkin bertindak tanpa memikirkan konsekuensi atau
              mengalami
              kesulitan dalam
              menunggu giliran.
            </li>
            <li>c. Overaktifitas motorik dan kegelisahan motorik. Seseorang dengan ADHD cenderung memiliki tingkat
              aktivitas fisik yang
              lebih tinggi dibandingkan dengan orang lain pada usia dan tingkat perkembangan yang sebanding. Mereka
              seringkali
              gelisah, sulit diam, atau selalu dalam keadaan bergerak.
            </li>
          </ul>

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