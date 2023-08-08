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

<body class="relative bg-basic">
  <!-- navbar -->

  <!-- login form -->
  <div class="p-10 lg:p-0 flex flex-col justify-center items-center h-screen">
    <div class="border border-white bg-green-50 shadow-lg rounded-xl p-10 w-full lg:w-[40%]">
      <!-- form start -->
      <form action="<?= url_to('register') ?>" method="post">
        <?= csrf_field() ?>
        <h3 class="text-center text-xl mb-7 underline decoration-dashed underline-offset-8 decoration-basic text-gray-900 font-bold">
          Psiki<span class="text-basic">Web</span>
        </h3>
        <!-- email -->
        <div class="relative z-0 w-full mb-6 group">
          <input type="email" name="email" id="email" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-pupus focus:outline-none focus:ring-0 focus:border-basic peer" placeholder="" value="<?= old('email') ?>" required />
          <label for="email" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-basic peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Email address</label>
        </div>
        <!-- username -->
        <div class="relative z-0 w-full mb-6 group">
          <input type="text" name="username" id="username" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-pupus focus:outline-none focus:ring-0 focus:border-basic peer" placeholder="" value="<?= old('username') ?>" required />
          <label for="username" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-basic peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Username</label>
        </div>
        <!-- password -->
        <div class="relative z-0 w-full mb-6 group">
          <input type="password" name="password" id="password" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-pupus focus:outline-none focus:ring-0 focus:border-basic peer" placeholder=" " required />
          <label for="password" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-basic peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Password</label>
        </div>
        <!-- confirm password -->
        <div class="relative z-0 w-full mb-6 group">
          <input type="password" name="pass_confirm" id="pass_confirm" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-pupus focus:outline-none focus:ring-0 focus:border-basic peer" placeholder=" " required />
          <label for="pass_confirm" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-basic peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Confirm password</label>
        </div>
        <div class="grid md:grid-cols-2 md:gap-6">
          <!-- first name -->
          <div class="relative z-0 w-full mb-6 group">
            <input type="text" name="first_name" id="first_name" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-pupus focus:outline-none focus:ring-0 focus:border-basic peer" placeholder=" " value="<?= old("first_name"); ?>" required />
            <label for="first_name" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-bas\ic peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">First name</label>
          </div>
          <!-- last name -->
          <div class="relative z-0 w-full mb-6 group">
            <input type="text" name="last_name" id="last_name" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-pupus focus:outline-none focus:ring-0 focus:border-basic peer" placeholder=" " value="<?= old('last_name'); ?>" required />
            <label for="last_name" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-bas\ic peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Last name</label>
          </div>
        </div>
        <div class="grid md:grid-cols-2 md:gap-6">
          <!-- phone -->
          <div class="relative z-0 w-full mb-6 group">
            <input type="tel" name="phone" id="phone" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-pupus focus:outline-none focus:ring-0 focus:border-basic peer" placeholder=" " value="<?= old('phone'); ?>" required />
            <label for="phone" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-bas\ic peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Phone</label>
          </div>
          <!-- umur -->
          <div class="relative z-0 w-full mb-6 group">
            <input type="text" name="umur" id="umur" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-pupus focus:outline-none focus:ring-0 focus:border-basic peer" placeholder=" " value="<?= old('umur'); ?>" required />
            <label for="umur" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-bas\ic peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Umur</label>
          </div>
        </div>
        <button type="submit" class="text-white bg-basic hover:bg-pupus focus:ring-4 focus:outline-none focus:ring-basic font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-pupus">
          Register
        </button>

        <div>

        </div>

        <p class="mt-5 text-lg font-semibold text-basic font-dm">
          Sudah punya akun ?
          <a href="<?= base_url('login'); ?>" class="text-basic hover:font-bold hover:underline">
            Login
          </a>
        </p>
      </form>
    </div>
  </div>

  <script src="<?= base_url('user/assets'); ?>/js/flowbite.min.js"></script>
</body>

</html>





<!-- sesuaikan dengan template register bawaan auth. ini tadi belum di sesuaikan -->