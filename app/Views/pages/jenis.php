<?= $this->extend('pages/layouts/main'); ?>
<?= $this->section('content'); ?>
<section class="container p-3 sm:p-8 md:p-32 w-full">

  <div class="">
    <p class="text-3xl mb-12 text-center font-dm text-basic font-bold">Jenis-Jenis Gangguan Mental</p>
  </div>
  <div class="flex justify-center">
    <div class="grid grid-cols-2 md:grid-cols-3 gap-2 max-w-3xl sm:grid-cols-2">

      <!-- card jenis gangguan kecemasan -->
      <div class="w-full max-w-sm bg-basic border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 flex justify-between flex-col p-3 ">
        <a href="/gangguan/kecemasan" class="flex justify-center">
          <img class="p-8 rounded-t-lg" src="<?= base_url('user/assets'); ?>/img/gangguan_kecemasan.svg" alt="product image" />
        </a>
        <div class="px-1 pb-5">
          <a href="/gangguan/kecemasan">
            <h5 class="text-2xl text-center font-semibold tracking-tight text-white dark:text-white">Ganguan
              Kecemasan</h5>
          </a>

        </div>
        <div class="flex items-center justify-center">
          <a href="/gangguan/kecemasan" class="text-basic bg-white font-medium rounded-full text-sm px-3 py-1.5 mt-3 text-center">
            <i class='bx bxs-right-arrow-circle'></i>
          </a>
        </div>
      </div>
      <!-- card jenis gangguan mood-->
      <div class="w-full max-w-sm bg-basic border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 flex justify-between flex-col p-3 ">
        <a href="/gangguan/mood" class="flex justify-center">
          <img class="p-8 rounded-t-lg" src="<?= base_url('user/assets'); ?>/img/gangguanmood.svg" alt="product image" />
        </a>
        <div class="px-1 pb-5">
          <a href="/gangguan/mood">
            <h5 class="text-2xl text-center font-semibold tracking-tight text-white dark:text-white">Gangguan Mood
            </h5>
          </a>

        </div>
        <div class="flex items-center justify-center">
          <a href="/gangguan/mood" class="text-basic bg-white font-medium rounded-full text-sm px-3 py-1.5 mt-3 text-center">
            <i class='bx bxs-right-arrow-circle'></i>
          </a>
        </div>
      </div>

      <!-- card jenis gangguan skizofrenia-->
      <div class="w-full max-w-sm bg-basic border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 flex justify-between flex-col p-3 ">
        <a href="/gangguan/skizofrenia" class="flex justify-center">
          <img class="p-8 rounded-t-lg" src="<?= base_url('user/assets'); ?>/img/skizofren 1.svg" alt="product image" />
        </a>
        <div class="px-1 pb-5">
          <a href="/gangguan/skizofrenia">
            <h5 class="text-2xl text-center font-semibold tracking-tight text-white dark:text-white">Skizofrenia
            </h5>
          </a>

        </div>
        <div class="flex items-center justify-center">
          <a href="/gangguan/skizofrenia" class="text-basic bg-white font-medium rounded-full text-sm px-3 py-1.5 mt-3 text-center">
            <i class='bx bxs-right-arrow-circle'></i>
          </a>
        </div>
      </div>

      <!-- card jenis gangguan makan-->
      <div class="w-full max-w-sm bg-basic border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 flex justify-between flex-col p-3 ">
        <a href="/gangguan/makan" class="flex justify-center">
          <img class="p-8 rounded-t-lg" src="<?= base_url('user/assets'); ?>/img/gangguan_makan.svg" alt="product image" />
        </a>
        <div class="px-1 pb-5">
          <a href="/gangguan/makan">
            <h5 class="text-2xl text-center font-semibold tracking-tight text-white dark:text-white">Ganguan Makan
            </h5>
          </a>

        </div>
        <div class="flex items-center justify-center">
          <a href="/gangguan/makan" class="text-basic bg-white font-medium rounded-full text-sm px-3 py-1.5 mt-3 text-center">
            <i class='bx bxs-right-arrow-circle'></i>
          </a>
        </div>
      </div>

      <!-- card jenis gangguan OCD-->
      <div class="w-full max-w-sm bg-basic border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 flex justify-between flex-col p-3 ">
        <a href="/gangguan/ocd" class="flex justify-center">
          <img class="p-8 rounded-t-lg" src="<?= base_url('user/assets'); ?>/img/OCD.svg" alt="product image" />
        </a>
        <div class="px-1 pb-5">
          <a href="/gangguan/ocd">
            <h5 class="text-2xl text-center font-semibold tracking-tight text-white dark:text-white">Obsessive
              Complusive Disorder</h5>
          </a>

        </div>
        <div class="flex items-center justify-center">
          <a href="/gangguan/ocd" class="text-basic bg-white font-medium rounded-full text-sm px-3 py-1.5 mt-3 text-center">
            <i class='bx bxs-right-arrow-circle'></i>
          </a>
        </div>
      </div>

      <!-- card jenis gangguan kepribadian-->
      <div class="w-full max-w-sm bg-basic border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 flex justify-between flex-col p-3 ">
        <a href="/gangguan/kepribadian" class="flex justify-center">
          <img class="p-8 rounded-t-lg" src="<?= base_url('user/assets'); ?>/img/gangguan_kepribadian.svg" alt="product image" />
        </a>
        <div class="px-1 pb-5">
          <a href="/gangguan/kepribadian">
            <h5 class="text-2xl text-center font-semibold tracking-tight text-white dark:text-white">Gangguan
              Kepribadian</h5>
          </a>

        </div>
        <div class="flex items-center justify-center">
          <a href="/gangguan/kepribadian" class="text-basic bg-white font-medium rounded-full text-sm px-3 py-1.5 mt-3 text-center">
            <i class='bx bxs-right-arrow-circle'></i>
          </a>
        </div>
      </div>

      <!-- card jenis gangguan ADHD -->
      <div class="w-full max-w-sm bg-basic border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 flex justify-between flex-col p-3 ">
        <a href="/gangguan/adhd" class="flex justify-center">
          <img class="p-8 rounded-t-lg" src="<?= base_url('user/assets'); ?>/img/ADHD.svg" alt="product image" />
        </a>
        <div class="px-1 pb-5">
          <a href="/gangguan/adhd">
            <h5 class="text-2xl text-center font-semibold tracking-tight text-white dark:text-white">Attention
              Deficit Hyperactive Disorder</h5>
          </a>

        </div>
        <div class="flex items-center justify-center">
          <a href="/gangguan/adhd" class="text-basic bg-white font-medium rounded-full text-sm px-3 py-1.5 mt-3 text-center">
            <i class='bx bxs-right-arrow-circle'></i>
          </a>
        </div>
      </div>

      <!-- card jenis gangguan depresi -->
      <div class="w-full max-w-sm bg-basic border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 flex justify-between flex-col p-3 ">
        <a href="/gangguan/depresi" class="flex justify-center">
          <img class="p-8 rounded-t-lg" src="<?= base_url('user/assets'); ?>/img/depresi.svg" alt="product image" />
        </a>
        <div class="px-1 pb-5">
          <a href="/gangguan/depresi">
            <h5 class="text-2xl text-center font-semibold tracking-tight text-white dark:text-white">Depresi</h5>
          </a>

        </div>
        <div class="flex items-center justify-center">
          <a href="/gangguan/depresi" class="text-basic bg-white font-medium rounded-full text-sm px-3 py-1.5 mt-3 text-center">
            <i class='bx bxs-right-arrow-circle'></i>
          </a>
        </div>
      </div>

      <!-- card jenis gangguan tourete sindrom -->
      <div class="w-full max-w-sm bg-basic border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 flex justify-between flex-col p-3 ">
        <a href="" class="flex justify-center">
          <img class="p-8 rounded-t-lg" src="<?= base_url('user/assets'); ?>/img/ts.svg" alt="product image" />
        </a>
        <div class="px-1 pb-5">
          <a href="">
            <h5 class="text-2xl text-center font-semibold tracking-tight text-white dark:text-white">Tourette
              Syndrome</h5>
          </a>

        </div>
        <div class="flex items-center justify-center">
          <a href="" class="text-basic bg-white font-medium rounded-full text-sm px-3 py-1.5 mt-3 text-center">
            <i class='bx bxs-right-arrow-circle'></i>
          </a>
        </div>
      </div>



      <!-- end grid -->
    </div>
  </div>

</section>
<?= $this->endSection(); ?>