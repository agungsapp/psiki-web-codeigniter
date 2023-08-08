<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Psikiater Web</title>
  <!-- font google dm -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&display=swap" rel="stylesheet" />

  <!-- font awesome  -->
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="<?= base_url('tail/css/app.css'); ?>" />
</head>

<body class="relative">
  <!-- navbar -->

  <nav class="bg-primary border-gray-200 dark:bg-gray-900">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
      <a href="<?= base_url(); ?>" class="flex items-center">
        <p class="self-center text-2xl font-semibold whitespace-nowrap font-dm">
          Psiki<span class="text-basic">Web</span>
        </p>
      </a>
      <!-- profile dropdown -->
      <div class="flex items-center md:order-2">
        <?php if (logged_in()) : ?>
          <!-- user start -->
          <button type="button" class="flex mr-3 text-sm bg-gray-800 rounded-full md:mr-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600" id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown" data-dropdown-placement="bottom">
            <span class="sr-only">Open user menu</span>
            <img class="w-8 h-8 rounded-full" src="<?= base_url('user/assets'); ?>/img/profile1.png" alt="user photo" />
          </button>
          <!-- Dropdown menu -->
          <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600" id="user-dropdown">
            <div class="px-4 py-3">
              <span class="block text-sm text-gray-900 dark:text-white"><?= user()->first_name . " " . user()->last_name; ?></span>
              <span class="block text-sm text-gray-500 truncate dark:text-gray-400"><?= user()->email; ?></span>
            </div>
            <ul class="py-2" aria-labelledby="user-menu-button">
              <!-- <li>
                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Settings</a>
              </li> -->
              <li>
                <a href="/logout" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Sign
                  out</a>
              </li>
            </ul>
          </div>
          <!-- user end -->
        <?php else : ?>

          <a href="<?= base_url('login'); ?>" class="transition-all duration-500 active-nav font-bold">Login</a>

        <?php endif ?>
        <button data-collapse-toggle="mobile-menu-2" type="button" class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="mobile-menu-2" aria-expanded="false">
          <span class="sr-only">Open main menu</span>
          <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
          </svg>
        </button>
      </div>

      <!-- profile dropdown end -->
      <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="mobile-menu-2">
        <ul class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-primary rounded-lg bg-primary md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-primary dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
          <li>
            <a href="/" class="transition-all duration-500 <?= $menu == 'index' ? 'active-nav' : 'base-nav'; ?> " aria-current="page">Home</a>
          </li>
          <!-- modif -->
          <li>
            <a href="/pages/psikotes" class="transition-all duration-500  <?= $menu == 'psikotes' ? 'active-nav' : 'base-nav'; ?> ">Psikotes</a>
          </li>
          <li>
            <a href="/pages/jenis" class="transition-all duration-500  <?= $menu == 'jenis' ? 'active-nav' : 'base-nav'; ?> ">Jenis Gangguan Mental</a>
          </li>
          <li>
            <a href="/pages/konsultasi" class="transition-all duration-500 <?= $menu == 'konsultasi' ? 'active-nav' : 'base-nav'; ?> ">Konsultasi</a>
          </li>
      </div>
    </div>
  </nav>

  <!-- navbar end -->
  <main>
    <!-- render section -->
    <?= $this->renderSection('content'); ?>
  </main>


  <div class="fixed none"></div>

  <!-- footer -->
  <footer class="bg-basic <?= $footer; ?> bottom-0 left-0 right-0 font-dm">
    <div class="p-6 flex justify-between">
      <div class="opacity-80">
        <p class="text-4xl font-bold text-white">PsikiWeb</p>
        <p class="text-white">2023 - R Programming</p>
        <p class="text-white">🖤 All Right Reserved</p>
      </div>
      <div class="flex">

        <div class="text-2xl text-basic mr-4 p-3 ">
          <a href="" class="bg-white opacity-80 p-2 rounded-full flex items-center">
            <i class='bx bxl-facebook-circle'></i>
          </a>
        </div>
        <div class="text-2xl text-basic mr-4 p-3 ">
          <a href="" class="bg-white opacity-80 p-2 rounded-full flex items-center">
            <i class='bx bxl-instagram-alt'></i>
          </a>
        </div>
      </div>
    </div>
  </footer>

  <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>


  <script src="<?= base_url('tail/js/flowbite.min.js'); ?>"></script>
  <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>



  <?= $this->renderSection('script'); ?>



</body>

</html>