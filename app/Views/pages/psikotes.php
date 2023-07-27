<?= $this->extend('pages/layouts/main'); ?>
<?= $this->section('content'); ?>
<section class="container flex justify-center px-0 sm:px-12 md:px-20 lg:px-32 md:py-8 w-full">
  <div class="py-3 px-6 md:px-16  w-full lg:w-3/4">
    <!-- card question start -->

    <form method="post" action="<?= site_url("psikotesController/submit_answers/" . $page) ?>">
      <?= csrf_field(); ?>
      <?php foreach ($soal as $item) : ?>
        <!-- card question start -->

        <div class="md:p-3 mt-3 bg-white border-[3px] border-gray-900 rounded-xl">
          <p class="text-sm md:text-md text-center font-dm"><?= $item['soal'] ?></p>

          <input type="hidden" name="page" value="<?= $page; ?>">
          <!-- radio button answer -->
          <div class="flex justify-center items-baseline mt-5">
            <div class="flex items-center mb-4">
              <input id="soal-<?= $item['soal_id'] ?>-option-1" <?= (isset($_SESSION['soal_soal-' . $item['soal_id']]) && $_SESSION['soal_soal-' . $item['soal_id']] == 'ya') ? 'checked' : '' ?> type="radio" value="ya" name="soal-<?= $item['soal_id'] ?>" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="soal-<?= $item['soal_id'] ?>-option-1" class="ml-2 text-sm md:text-md font-medium text-gray-900 dark:text-gray-300">Ya</label>
            </div>
            <div class="ms-5 flex items-center">
              <input id="soal-<?= $item['soal_id'] ?>-option-2" <?= (isset($_SESSION['soal_soal-' . $item['soal_id']]) && $_SESSION['soal_soal-' . $item['soal_id']] == 'tidak') ? 'checked' : '' ?> type="radio" value="tidak" name="soal-<?= $item['soal_id'] ?>" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="soal-<?= $item['soal_id'] ?>-option-2" class="ml-2 text-sm md:text-md font-medium text-gray-900 dark:text-gray-300">Tidak</label>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
      <!-- button submit -->
      <div class="mt-12 flex justify-center">
        <?php if ($page == 1) : ?>

        <?php else : ?>
          <a href="<?= site_url("psikotesController/goback/") . $page; ?>" class="w-2/4 px-10 py-2 rounded-xl text-center font-semibold text-2xl font-dm bg-white border-[3px] border-gray-900">
            Sebelumnya
          </a>
        <?php endif ?>
        <button id="btnSubmit" type="submit" class="w-2/4 px-10 py-2 rounded-xl text-center font-semibold text-2xl font-dm bg-white border-[3px] border-gray-900">
          Berikutnya
        </button>
      </div>
    </form>
  </div>


</section>
<?= $this->endSection(); ?>