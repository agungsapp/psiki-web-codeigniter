<?= $this->extend('pages/layouts/main'); ?>
<?= $this->section('content'); ?>
<section class="container flex justify-center px-0 sm:px-12 md:px-32 md:py-8 w-full">
  <div class="p-10  w-full lg:w-3/4">
    <div>
      <p class="mb-3 font-semibold text-2xl font-dm text-green-900 text-center">
        Gangguan Mood
      </p>
    </div>
    <!-- card chat box right start -->
    <div class="mt-4 flex items-center justify-end">
      <!-- chat box -->
      <div class="w-3/4">
        <div class="px-5 py-3 me-5 border-[3px] border-basic bg-pupus rounded-xl">
          <p class="text-green-900 font-dm font-semibold text-sm md:text-md lg:text-lg  tracking-tight leading-5">
            Dokter, saya ingin bertanya
            tentang gangguan mood. Apa sebenarnya gangguan mood itu?
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
            Gangguan mood, khususnya episode
            depresi, adalah kondisi di mana seseorang mengalami penurunan mood yang menyebabkan
            kehilangan energi dan minat serta kegembiraan. Pada kondisi ini, orang tersebut cenderung mengalami
            perasaan sedih yang
            berkepanjangan.
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
            Apa saja ciri-ciri atau gejala dari gangguan mood tersebut, Dok?
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
            Beberapa ciri dan gejala yang sering terkait dengan gangguan mood episode depresi antara lain:</p>
          <ul class="ms-5 text-green-900 font-dm font-semibold text-sm md:text-md lg:text-lg tracking-tight leading-5">
            <li>a. Berkurangnya konsentrasi dan perhatian. Penderita dapat mengalami kesulitan dalam memusatkan
              perhatian pada
              tugas-tugas sehari-hari dan merasa sulit untuk fokus.</li>
            <li>b. Tingkat kepercayaan diri yang berkurang. Orang dengan gangguan mood sering kali merasa kurang
              percaya
              diri dan
              meragukan kemampuan mereka sendiri.
            </li>
            <li>c. Merasa bersalah dan tidak berguna secara terus-menerus. Mereka cenderung menyalahkan diri sendiri
              dan
              merasa tidak
              memiliki nilai atau manfaat.
            </li>
            <li>d. Pandangan masa depan yang suram dan pesimistis. Penderita cenderung memiliki pandangan yang
              negatif
              terhadap masa
              depan dan merasa tidak ada harapan yang baik.
            </li>
            <li>e. Gangguan tidur. Gangguan mood dapat menyebabkan masalah tidur, seperti sulit tidur, terbangun di
              tengah malam, atau
              tidur yang tidak nyenyak.
            </li>
            <li>f. Berkurangnya nafsu makan. Penderita seringkali mengalami penurunan nafsu makan dan berat badan
              yang
              berkurang secara
              signifikan.
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