<?= $this->extend('pages/layouts/main'); ?>
<?= $this->section('content'); ?>
<section class="container flex justify-center px-0 sm:px-12 md:px-20 lg:px-32 md:py-8 w-full">
  <div class="py-3 px-6 md:px-16  w-full lg:w-3/4">
    <!-- card question start -->
    <div class="md:p-3 bg-white border-[3px] border-gray-900 rounded-xl">
      <p class="text-sm md:text-md text-center font-dm">Saya merasa bahwa diri saya menjadi marah karena hal- hal
        sepele.
      </p>
      <!-- radio button answer -->
      <div class="flex justify-center items-baseline mt-5">
        <div class="flex items-center mb-4">
          <input id="default-radio-1" type="radio" value="" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
          <label for="default-radio-1" class="ml-2 text-sm md:text-md font-medium text-gray-900 dark:text-gray-300">Default
            radio</label>
        </div>
        <div class="ms-5 flex items-center">
          <input id="default-radio-2" type="radio" value="" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
          <label for="default-radio-2" class="ml-2 text-sm md:text-md font-medium text-gray-900 dark:text-gray-300">Checked
            state</label>
        </div>
      </div>
    </div>
    <!-- card question start -->
    <div class="md:p-3 mt-3 bg-white border-[3px] border-gray-900 rounded-xl">
      <p class="text-sm md:text-md text-center font-dm">Saya merasa bahwa diri saya menjadi marah karena hal- hal
        sepele.
      </p>
      <!-- radio button answer -->
      <div class="flex justify-center items-baseline mt-5">
        <div class="flex items-center mb-4">
          <input id="default-radio-1" type="radio" value="" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
          <label for="default-radio-1" class="ml-2 text-sm md:text-md font-medium text-gray-900 dark:text-gray-300">Default
            radio</label>
        </div>
        <div class="ms-5 flex items-center">
          <input id="default-radio-2" type="radio" value="" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
          <label for="default-radio-2" class="ml-2 text-sm md:text-md font-medium text-gray-900 dark:text-gray-300">Checked
            state</label>
        </div>
      </div>
    </div>
    <!-- card question start -->
    <div class="md:p-3 mt-3 bg-white border-[3px] border-gray-900 rounded-xl">
      <p class="text-sm md:text-md text-center font-dm">Saya merasa bahwa diri saya menjadi marah karena hal- hal
        sepele.
      </p>
      <!-- radio button answer -->
      <div class="flex justify-center items-baseline mt-5">
        <div class="flex items-center mb-4">
          <input id="default-radio-1" type="radio" value="" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
          <label for="default-radio-1" class="ml-2 text-sm md:text-md font-medium text-gray-900 dark:text-gray-300">Default
            radio</label>
        </div>
        <div class="ms-5 flex items-center">
          <input id="default-radio-2" type="radio" value="" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
          <label for="default-radio-2" class="ml-2 text-sm md:text-md font-medium text-gray-900 dark:text-gray-300">Checked
            state</label>
        </div>
      </div>
    </div>

    <!-- button submit -->
    <div class="mt-12 flex justify-center">
      <buttons class="w-2/4 px-10 py-2 rounded-xl text-center font-semibold text-2xl font-dm bg-white border-[3px] border-gray-900">
        Berikutnya
      </buttons>
    </div>
  </div>


</section>
<?= $this->endSection(); ?>