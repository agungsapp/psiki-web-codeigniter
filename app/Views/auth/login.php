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
  <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="<?= base_url('user/assets'); ?>/css/output.css" />
</head>

<body class="relative bg-green-200">
  <!-- navbar -->

  <!-- login form -->
  <div class="p-10 lg:p-0 flex flex-col justify-center items-center h-screen">
    <h3 class="text-5xl mb-7 underline decoration-dashed underline-offset-8 decoration-basic text-gray-900 font-bold">
      Psiki<span class="text-basic">Web</span>
    </h3>
    <div class="border border-white bg-basic shadow-lg rounded-xl p-10 w-full lg:w-[40%]">
      <form action="<?= url_to('login') ?>" method="post">
        <?= csrf_field() ?>
        <p class="text-center font-bold font-dm text-white text-2xl">
          Selamat datang !
        </p>
        <hr class="border-1 border-white mt-3 mb-3" />
        <?php if ($config->validFields === ['email']) : ?>
          <div class="mb-6">
            <label for="email" class="block mb-2 text-sm font-medium text-white dark:text-white"><?= lang('Auth.email') ?></label>
            <input type="email" id="email" class="bg-gray-50 border border-gray-300 text-white text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="<?= lang('Auth.email') ?>" name="login" required />
          </div>
        <?php else : ?>
          <div class="mb-6">
            <label for="email" class="block mb-2 text-sm font-medium text-white dark:text-white"><?= lang('Auth.emailOrUsername') ?></label>
            <input type="email" id="email" class="bg-gray-50 border border-gray-300 text-white text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="<?= lang('Auth.emailOrUsername') ?>" name="login" required />
          </div>
        <?php endif; ?>
        <div class="mb-6">
          <label for="password" class="block mb-2 text-sm font-medium text-white dark:text-white">Your password</label>
          <input type="password" id="password" class="bg-gray-50 border border-gray-300 text-white text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="*****************************" name="password" required />
        </div>

        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-dm font-bold rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
          Login
        </button>
        <?php if ($config->allowRemembering) : ?>
          <div class="">
            <label class="">
              <input type="checkbox" name="remember" class="" <?php if (old('remember')) : ?> checked <?php endif ?>>
              <?= lang('Auth.rememberMe') ?>
            </label>
          </div>
        <?php endif; ?>
        <hr class="border-1 border-white mt-3" />
        <?php if ($config->allowRegistration) : ?>
          <p class="mt-3 mb-5 text-md text-white font-dm">
            Belum punya akun ?
            <a href="<?= url_to('register') ?>" class="text-white hover:font-bold hover:underline">
              buat akun
            </a>
          </p>
        <?php endif; ?>
        <?php if ($config->activeResetter) : ?>
          <p><a href="<?= url_to('forgot') ?>"><?= lang('Auth.forgotYourPassword') ?></a></p>
        <?php endif; ?>
      </form>
    </div>
  </div>


  <script src="<?= base_url('user/assets'); ?>/js/flowbite.min.js"></script>
</body>

</html>