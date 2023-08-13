<?= $this->extend('pages/layouts/main'); ?>
<?= $this->section('content'); ?>

<section class="container flex justify-center px-0 sm:px-12 md:px-32 md:py-8 w-full">
  <div class="p-10  w-full lg:w-3/4">
    <div>
      <p class="mb-3 font-semibold text-2xl font-dm text-green-900 text-center">
        Gangguan Kepribadian
      </p>
    </div>
    <!-- card chat box right start -->
    <div class="mt-4 flex items-center justify-end">
      <!-- chat box -->
      <div class="w-3/4">
        <div class="px-5 py-3 me-5 border-[3px] border-basic bg-pupus rounded-xl">
          <p class="text-green-900 font-dm font-semibold text-sm md:text-md lg:text-lg  tracking-tight leading-5">
            Dokter, saya ingin mengetahui tentang gangguan kepribadian. Apa sebenarnya gangguan kepribadian itu?
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
            Gangguan kepribadian adalah kondisi di mana seseorang memiliki pola kepribadian yang kaku dan mengatasi
            diri sendiri,
            sehingga mempengaruhi fungsinya secara keseluruhan. Gangguan ini dapat menyebabkan gejala psikiatrik dan
            penderitaan
            pada pasien itu sendiri atau orang lain, bahkan keduanya. Selain itu, gangguan kepribadian juga dapat
            mengakibatkan
            maladaptasi sosial, seperti kesulitan dalam hubungan dengan teman, keluarga, atau dalam lingkungan
            kerja.
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
            Apa saja ciri-ciri atau gejala yang sering muncul pada gangguan kepribadian, Dok?
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
            Beberapa ciri-ciri atau gejala yang sering terkait dengan gangguan kepribadian antara lain:</p>

          <ul class="ms-5 text-green-900 font-dm font-semibold text-sm md:text-md lg:text-lg tracking-tight leading-5">
            <li>a. Selalu curiga dan tidak percaya pada orang lain, bahkan teman, keluarga, dan pasangan sendiri.
              Penderita gangguan
              kepribadian cenderung memiliki kecenderungan untuk mencurigai niat dan motivasi orang lain di
              sekitarnya
              tanpa alasan
              yang jelas.</li>
            <li>b. Takut pada interaksi sosial dan menganggap orang lain berbahaya. Individu dengan gangguan
              kepribadian
              sering merasa
              takut atau cemas dalam situasi sosial dan memiliki persepsi yang berlebihan bahwa orang lain akan
              menyakiti atau
              merugikan mereka.
            </li>
            <li>c. Sering mengabaikan peraturan dan kewajiban sosial, mudah tersinggung, agresif, bertindak
              impulsif, dan
              kurang
              memiliki rasa bersalah. Penderita gangguan kepribadian cenderung melanggar norma-norma sosial,
              mengalami
              perubahan mood
              yang cepat, dan seringkali bertindak tanpa berpikir terlebih dahulu.
            </li>
            <li>d. Percaya bahwa dirinya tidak kompeten, tidak menarik, inferior, dan selalu takut dipermalukan,
              dikritik,
              atau ditolak.
              Orang dengan gangguan kepribadian sering memiliki pandangan yang sangat negatif terhadap diri sendiri,
              merasa rendah
              diri, dan memiliki rasa takut yang berlebihan terhadap penolakan atau penilaian negatif dari orang
              lain.
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