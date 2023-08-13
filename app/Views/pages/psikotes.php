<?= $this->extend('pages/layouts/main'); ?>
<?= $this->section('content'); ?>
<section class="container flex justify-center px-0 sm:px-12 md:px-20 lg:px-32 md:py-8 w-full">
  <div class="py-3 px-6 md:px-16  w-full lg:w-3/4">
    <!-- card question start -->

    <form id="form-diagnosis" method="post" action="<?= site_url("psikotesController/diagnosis") ?>">
      <?= csrf_field(); ?>

      <!-- page 1 -->
      <div id="page1">
        <h5>5/15 soal</h5>
        <div class="md:p-3 mt-3 bg-white border-[3px] border-gray-900 rounded-xl">
          <p class="text-sm md:text-md text-center font-dm">Saya merasa bahwa diri saya menjadi marah karena hal- hal sepele.</p>
          <!-- radio button answer -->
          <div class="flex justify-center items-baseline mt-5">
            <div class="flex items-center mb-4">
              <input id="soal-1-option-1" type="radio" value="1" name="soal-1" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="soal-1-option-1" class="ml-2 text-sm md:text-md font-medium text-gray-900 dark:text-gray-300">Ya</label>
            </div>
            <div class="ms-5 flex items-center">
              <input id="soal-1-option-2" type="radio" value="0" name="soal-1" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="soal-1-option-2" class="ml-2 text-sm md:text-md font-medium text-gray-900 dark:text-gray-300">Tidak</label>
            </div>
          </div>
        </div>
        <!-- card question start -->

        <div class="md:p-3 mt-3 bg-white border-[3px] border-gray-900 rounded-xl">
          <p class="text-sm md:text-md text-center font-dm">Saya mengalami kesulitan bernafas (misalnya: seringkali terengah-engah atau tidak dapat bernafas padahal tidak melakukan aktivitas fisik sebelumnya).</p>
          <!-- radio button answer -->
          <div class="flex justify-center items-baseline mt-5">
            <div class="flex items-center mb-4">
              <input id="soal-2-option-1" type="radio" value="1" name="soal-2" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="soal-2-option-1" class="ml-2 text-sm md:text-md font-medium text-gray-900 dark:text-gray-300">Ya</label>
            </div>
            <div class="ms-5 flex items-center">
              <input id="soal-2-option-2" type="radio" value="0" name="soal-2" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="soal-2-option-2" class="ml-2 text-sm md:text-md font-medium text-gray-900 dark:text-gray-300">Tidak</label>
            </div>
          </div>
        </div>
        <!-- card question start -->

        <div class="md:p-3 mt-3 bg-white border-[3px] border-gray-900 rounded-xl">
          <p class="text-sm md:text-md text-center font-dm">Saya cenderung bereaksi berlebihan terhadap suatu situasi.</p>
          <!-- radio button answer -->
          <div class="flex justify-center items-baseline mt-5">
            <div class="flex items-center mb-4">
              <input id="soal-3-option-1" type="radio" value="1" name="soal-3" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="soal-3-option-1" class="ml-2 text-sm md:text-md font-medium text-gray-900 dark:text-gray-300">Ya</label>
            </div>
            <div class="ms-5 flex items-center">
              <input id="soal-3-option-2" type="radio" value="0" name="soal-3" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="soal-3-option-2" class="ml-2 text-sm md:text-md font-medium text-gray-900 dark:text-gray-300">Tidak</label>
            </div>
          </div>
        </div>
        <!-- card question start -->

        <div class="md:p-3 mt-3 bg-white border-[3px] border-gray-900 rounded-xl">
          <p class="text-sm md:text-md text-center font-dm">Saya menemukan diri saya mudah merasa kesal.</p>
          <!-- radio button answer -->
          <div class="flex justify-center items-baseline mt-5">
            <div class="flex items-center mb-4">
              <input id="soal-4-option-1" type="radio" value="1" name="soal-4" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="soal-4-option-1" class="ml-2 text-sm md:text-md font-medium text-gray-900 dark:text-gray-300">Ya</label>
            </div>
            <div class="ms-5 flex items-center">
              <input id="soal-4-option-2" type="radio" value="0" name="soal-4" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="soal-4-option-2" class="ml-2 text-sm md:text-md font-medium text-gray-900 dark:text-gray-300">Tidak</label>
            </div>
          </div>
        </div>
        <!-- card question start -->

        <div class="md:p-3 mt-3 bg-white border-[3px] border-gray-900 rounded-xl">
          <p class="text-sm md:text-md text-center font-dm">Saya merasa sedih dan tertekan. </p>
          <!-- radio button answer -->
          <div class="flex justify-center items-baseline mt-5">
            <div class="flex items-center mb-4">
              <input id="soal-5-option-1" type="radio" value="1" name="soal-5" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="soal-5-option-1" class="ml-2 text-sm md:text-md font-medium text-gray-900 dark:text-gray-300">Ya</label>
            </div>
            <div class="ms-5 flex items-center">
              <input id="soal-5-option-2" type="radio" value="0" name="soal-5" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="soal-5-option-2" class="ml-2 text-sm md:text-md font-medium text-gray-900 dark:text-gray-300">Tidak</label>
            </div>
          </div>
        </div>
        <!-- card question start -->
      </div>
      <!-- page 1 end -->

      <!-- page 2 -->
      <div id="page2" style="display: none;">
        <h5>10/15 soal</h5>
        <div class="md:p-3 mt-3 bg-white border-[3px] border-gray-900 rounded-xl">
          <p class="text-sm md:text-md text-center font-dm">apakah anda sering makan banyak dalam satu periode waktu yang singkat?</p>
          <!-- radio button answer -->
          <div class="flex justify-center items-baseline mt-5">
            <div class="flex items-center mb-4">
              <input id="soal-6-option-1" type="radio" value="1" name="soal-6" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="soal-6-option-1" class="ml-2 text-sm md:text-md font-medium text-gray-900 dark:text-gray-300">Ya</label>
            </div>
            <div class="ms-5 flex items-center">
              <input id="soal-6-option-2" type="radio" value="0" name="soal-6" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="soal-6-option-2" class="ml-2 text-sm md:text-md font-medium text-gray-900 dark:text-gray-300">Tidak</label>
            </div>
          </div>
        </div>
        <!-- card question start -->

        <div class="md:p-3 mt-3 bg-white border-[3px] border-gray-900 rounded-xl">
          <p class="text-sm md:text-md text-center font-dm">Pernahkah Anda mengalami suatu peristiwa traumatik atau menekan luar biasa?</p>
          <!-- radio button answer -->
          <div class="flex justify-center items-baseline mt-5">
            <div class="flex items-center mb-4">
              <input id="soal-7-option-1" type="radio" value="1" name="soal-7" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="soal-7-option-1" class="ml-2 text-sm md:text-md font-medium text-gray-900 dark:text-gray-300">Ya</label>
            </div>
            <div class="ms-5 flex items-center">
              <input id="soal-7-option-2" type="radio" value="0" name="soal-7" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="soal-7-option-2" class="ml-2 text-sm md:text-md font-medium text-gray-900 dark:text-gray-300">Tidak</label>
            </div>
          </div>
        </div>
        <!-- card question start -->

        <div class="md:p-3 mt-3 bg-white border-[3px] border-gray-900 rounded-xl">
          <p class="text-sm md:text-md text-center font-dm">Apakah Anda takut atau malu menjadi pusat perhatian atau takut dipermalukan pada situasi sosial?</p>
          <!-- radio button answer -->
          <div class="flex justify-center items-baseline mt-5">
            <div class="flex items-center mb-4">
              <input id="soal-8-option-1" type="radio" value="1" name="soal-8" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="soal-8-option-1" class="ml-2 text-sm md:text-md font-medium text-gray-900 dark:text-gray-300">Ya</label>
            </div>
            <div class="ms-5 flex items-center">
              <input id="soal-8-option-2" type="radio" value="0" name="soal-8" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="soal-8-option-2" class="ml-2 text-sm md:text-md font-medium text-gray-900 dark:text-gray-300">Tidak</label>
            </div>
          </div>
        </div>
        <!-- card question start -->

        <div class="md:p-3 mt-3 bg-white border-[3px] border-gray-900 rounded-xl">
          <p class="text-sm md:text-md text-center font-dm">Saya merasa bahwa saya tidak berharga</p>
          <!-- radio button answer -->
          <div class="flex justify-center items-baseline mt-5">
            <div class="flex items-center mb-4">
              <input id="soal-9-option-1" type="radio" value="1" name="soal-9" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="soal-9-option-1" class="ml-2 text-sm md:text-md font-medium text-gray-900 dark:text-gray-300">Ya</label>
            </div>
            <div class="ms-5 flex items-center">
              <input id="soal-9-option-2" type="radio" value="0" name="soal-9" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="soal-9-option-2" class="ml-2 text-sm md:text-md font-medium text-gray-900 dark:text-gray-300">Tidak</label>
            </div>
          </div>
        </div>
        <!-- card question start -->

        <div class="md:p-3 mt-3 bg-white border-[3px] border-gray-900 rounded-xl">
          <p class="text-sm md:text-md text-center font-dm">Saya menemukan diri saya menjadi tidak sabar ketika mengalami penundaan (misalnya: kemacetan lalu lintas, menunggu sesuatu)</p>
          <!-- radio button answer -->
          <div class="flex justify-center items-baseline mt-5">
            <div class="flex items-center mb-4">
              <input id="soal-10-option-1" type="radio" value="1" name="soal-10" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="soal-10-option-1" class="ml-2 text-sm md:text-md font-medium text-gray-900 dark:text-gray-300">Ya</label>
            </div>
            <div class="ms-5 flex items-center">
              <input id="soal-10-option-2" type="radio" value="0" name="soal-10" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="soal-10-option-2" class="ml-2 text-sm md:text-md font-medium text-gray-900 dark:text-gray-300">Tidak</label>
            </div>
          </div>
        </div>
        <!-- card question start -->
      </div>
      <!-- page 2 end -->

      <!-- page 3 -->
      <div id="page3" style="display: none;">
        <h5>15/15 soal</h5>
        <div class="md:p-3 mt-3 bg-white border-[3px] border-gray-900 rounded-xl">
          <p class="text-sm md:text-md text-center font-dm">Saya merasa takut tanpa alasan yang jelas. </p>
          <!-- radio button answer -->
          <div class="flex justify-center items-baseline mt-5">
            <div class="flex items-center mb-4">
              <input id="soal-11-option-1" type="radio" value="1" name="soal-11" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="soal-11-option-1" class="ml-2 text-sm md:text-md font-medium text-gray-900 dark:text-gray-300">Ya</label>
            </div>
            <div class="ms-5 flex items-center">
              <input id="soal-11-option-2" type="radio" value="0" name="soal-11" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="soal-11-option-2" class="ml-2 text-sm md:text-md font-medium text-gray-900 dark:text-gray-300">Tidak</label>
            </div>
          </div>
        </div>
        <!-- card question start -->

        <div class="md:p-3 mt-3 bg-white border-[3px] border-gray-900 rounded-xl">
          <p class="text-sm md:text-md text-center font-dm">Saya merasa sulit untuk beristirahat.</p>
          <!-- radio button answer -->
          <div class="flex justify-center items-baseline mt-5">
            <div class="flex items-center mb-4">
              <input id="soal-12-option-1" type="radio" value="1" name="soal-12" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="soal-12-option-1" class="ml-2 text-sm md:text-md font-medium text-gray-900 dark:text-gray-300">Ya</label>
            </div>
            <div class="ms-5 flex items-center">
              <input id="soal-12-option-2" type="radio" value="0" name="soal-12" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="soal-12-option-2" class="ml-2 text-sm md:text-md font-medium text-gray-900 dark:text-gray-300">Tidak</label>
            </div>
          </div>
        </div>
        <!-- card question start -->

        <div class="md:p-3 mt-3 bg-white border-[3px] border-gray-900 rounded-xl">
          <p class="text-sm md:text-md text-center font-dm">Saya merasa putus asa dan sedih.</p>
          <!-- radio button answer -->
          <div class="flex justify-center items-baseline mt-5">
            <div class="flex items-center mb-4">
              <input id="soal-13-option-1" type="radio" value="1" name="soal-13" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="soal-13-option-1" class="ml-2 text-sm md:text-md font-medium text-gray-900 dark:text-gray-300">Ya</label>
            </div>
            <div class="ms-5 flex items-center">
              <input id="soal-13-option-2" type="radio" value="0" name="soal-13" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="soal-13-option-2" class="ml-2 text-sm md:text-md font-medium text-gray-900 dark:text-gray-300">Tidak</label>
            </div>
          </div>
        </div>
        <!-- card question start -->

        <div class="md:p-3 mt-3 bg-white border-[3px] border-gray-900 rounded-xl">
          <p class="text-sm md:text-md text-center font-dm">Saya sulit untuk sabar dalam menghadapi gangguan terhadap hal yang sedang saya lakukan.</p>
          <!-- radio button answer -->
          <div class="flex justify-center items-baseline mt-5">
            <div class="flex items-center mb-4">
              <input id="soal-14-option-1" type="radio" value="1" name="soal-14" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="soal-14-option-1" class="ml-2 text-sm md:text-md font-medium text-gray-900 dark:text-gray-300">Ya</label>
            </div>
            <div class="ms-5 flex items-center">
              <input id="soal-14-option-2" type="radio" value="0" name="soal-14" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="soal-14-option-2" class="ml-2 text-sm md:text-md font-medium text-gray-900 dark:text-gray-300">Tidak</label>
            </div>
          </div>
        </div>
        <!-- card question start -->

        <div class="md:p-3 mt-3 bg-white border-[3px] border-gray-900 rounded-xl">
          <p class="text-sm md:text-md text-center font-dm">Saya merasa khawatir dengan situasi dimana saya mungkin menjadi panik dan mempermalukan diri sendiri.</p>
          <!-- radio button answer -->
          <div class="flex justify-center items-baseline mt-5">
            <div class="flex items-center mb-4">
              <input id="soal-15-option-1" type="radio" value="1" name="soal-15" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="soal-15-option-1" class="ml-2 text-sm md:text-md font-medium text-gray-900 dark:text-gray-300">Ya</label>
            </div>
            <div class="ms-5 flex items-center">
              <input id="soal-15-option-2" type="radio" value="0" name="soal-15" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="soal-15-option-2" class="ml-2 text-sm md:text-md font-medium text-gray-900 dark:text-gray-300">Tidak</label>
            </div>
          </div>
        </div>

      </div>
      <!-- page 3 end -->



      <!-- button submit -->
      <div class="mt-12 flex justify-center">
        <button id="btn-prev" type="button" style="display: none;" class="w-2/4 px-10 py-2 rounded-xl text-center font-semibold text-2xl font-dm bg-white border-[3px] border-gray-900">
          Sebelumnya
        </button>
        <button id="btn-next" type="button" class="w-2/4 px-10 py-2 rounded-xl text-center font-semibold text-2xl font-dm bg-white border-[3px] border-gray-900">
          Berikutnya
        </button>
        <button id="btn-diagnosis" type="button" onclick="validateAndProceed()" class="w-2/4 px-10 py-2 rounded-xl text-center font-semibold text-2xl font-dm bg-white border-[3px] border-gray-900">
          Diagnonsis
        </button>
      </div>

      <!-- percobaan end -->
    </form>
  </div>


</section>
<?= $this->endSection(); ?>


<?= $this->section('script'); ?>
<script>
  // script perpindahan halaman soal

  console.log('connect to script logic soal')
  const page1 = document.getElementById("page1");
  const page2 = document.getElementById("page2");
  const page3 = document.getElementById("page3");
  const btnPrev = document.getElementById("btn-prev");
  const btnNext = document.getElementById("btn-next");
  const btnDiagnosis = document.getElementById("btn-diagnosis");

  // Function to show a specific page and hide the others
  function showPage(pageToShow) {
    if (pageToShow === page1) {
      page1.style.display = "block";
      page2.style.display = "none";
      page3.style.display = "none";
      btnPrev.style.display = "none";
      btnNext.style.display = "block";
      btnDiagnosis.style.display = "none";
    } else if (pageToShow === page2) {
      page1.style.display = "none";
      page2.style.display = "block";
      page3.style.display = "none";
      btnPrev.style.display = "block";
      btnNext.style.display = "block";
      btnDiagnosis.style.display = "none";
    } else if (pageToShow === page3) {
      page1.style.display = "none";
      page2.style.display = "none";
      page3.style.display = "block";
      btnPrev.style.display = "block";
      btnNext.style.display = "none";
      btnDiagnosis.style.display = "block";
    }
  }

  // Show page 1 initially
  showPage(page1);

  // Event listener for the "Berikutnya" button
  btnNext.addEventListener("click", () => {
    if (page1.style.display === "block") {
      showPage(page2);
    } else if (page2.style.display === "block") {
      showPage(page3);
    }
  });

  // Event listener for the "Sebelumnya" button
  btnPrev.addEventListener("click", () => {
    if (page2.style.display === "block") {
      showPage(page1);
    } else if (page3.style.display === "block") {
      showPage(page2);
    }
  });

  // validasi radio button

  // Function to validate and proceed to diagnosis
  function validateAndProceed() {
    // Get all the questions on page 3
    const questions = [
      "soal-1", "soal-2", "soal-3", "soal-4", "soal-5", "soal-6", "soal-7", "soal-8", "soal-9", "soal-10", "soal-11", "soal-12", "soal-13", "soal-14", "soal-15",
    ];

    let checkedCount = 0;

    // Loop through each question and count the checked radio buttons
    questions.forEach((question) => {
      const radios = document.getElementsByName(question);
      for (let i = 0; i < radios.length; i++) {
        if (radios[i].checked) {
          checkedCount++;
          break;
        }
      }
    });

    if (checkedCount === 15) {
      // Proceed to the diagnosis process (submit the form, for example)
      // Replace "your-form-id" with the actual ID of your form
      console.log(checkedCount);
      document.getElementById("form-diagnosis").submit();
    } else {
      console.log(checkedCount);
      alert("Harap isi semua pertanyaan sebelum melanjutkan ke diagnosa.");
      return false;
    }
  }
</script>
<?= $this->endSection(); ?>