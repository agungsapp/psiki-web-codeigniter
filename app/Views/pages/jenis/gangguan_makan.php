<?= $this->extend('pages/layouts/main'); ?>
<?= $this->section('content'); ?>
<section class="container flex justify-center px-0 sm:px-12 md:px-32 md:py-8 w-full">
  <div class="p-10  w-full lg:w-3/4">
    <div>
      <p class="mb-3 font-semibold text-2xl font-dm text-green-900 text-center">
        Gangguan Makan
      </p>
    </div>
    <!-- card chat box right start -->
    <div class="mt-4 flex items-center justify-end">
      <!-- chat box -->
      <div class="w-3/4">
        <div class="px-5 py-3 me-5 border-[3px] border-basic bg-pupus rounded-xl">
          <p class="text-green-900 font-dm font-semibold text-sm md:text-md lg:text-lg  tracking-tight leading-5">
            Dokter, saya ingin mengetahui tentang gangguan makan. Apa sebenarnya gangguan makan itu?
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
            Gangguan makan, atau yang dikenal juga sebagai eating disorders, adalah sindrom yang ditandai oleh pola
            makan yang
            menyimpang dari kebiasaan makan yang sehat. Gangguan makan dapat melibatkan perilaku makan yang
            berlebihan atau tidak
            mencukupi.
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
            Apa saja ciri-ciri atau gejala yang umum terjadi pada gangguan makan, Dok?
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
            Beberapa ciri-ciri atau gejala umum yang sering terkait dengan gangguan makan antara lain:</p>
          <ul class="ms-5 text-green-900 font-dm font-semibold text-sm md:text-md lg:text-lg tracking-tight leading-5">
            <li>a. Mengurangi berat badan dengan sengaja. Penderita gangguan makan seringkali memiliki keinginan
              kuat
              untuk menurunkan
              berat badan mereka secara ekstrem, bahkan jika berat badan mereka sudah berada dalam kisaran normal
              atau
              rendah.</li>
            <li>b. Berusaha memuntahkan kembali makanan. Beberapa orang dengan gangguan makan, seperti bulimia
              nervosa,
              mungkin mencoba
              memuntahkan kembali makanan yang mereka konsumsi dengan cara memicu muntah atau menggunakan metode
              lainnya.
            </li>
            <li>c. Menggunakan pencahar. Beberapa individu dengan gangguan makan mungkin menggunakan pencahar atau
              obat
              pencahar secara
              berlebihan untuk mengendalikan berat badan mereka atau menghindari penambahan berat badan.
            </li>
            <li>d. Olahraga berlebihan. Penderita gangguan makan seringkali terobsesi dengan olahraga dan cenderung
              berolahraga dengan
              intensitas yang berlebihan sebagai upaya untuk membakar kalori yang mereka konsumsi.
            </li>
            <li>e. Menggunakan obat penahan nafsu makan. Beberapa orang dengan gangguan makan mungkin menggunakan
              obat-obatan tertentu
              yang berfungsi untuk menekan nafsu makan mereka.
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