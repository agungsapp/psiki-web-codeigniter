<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', function () {
    return redirect()->to('/validate');
});

$routes->get('/validate', 'Home::userValidate');

$routes->group('admin', function ($routes) {
    // Filter atau pengaturan khusus untuk grup route admin
    $routes->get('dashboard', 'Admin\Dashboard::index');
    $routes->get('admin', 'Admin\UsersController::admin');
    $routes->get('user', 'Admin\UsersController::index');
    $routes->get('banksoal', 'Admin\SoalController::index');
    $routes->get('saran', 'Admin\SaranController::index');

    $routes->post('simpanSaran', 'Admin\SaranController::store');
});

// jenis gangguan
$routes->get('gangguan/kecemasan', 'Jenis::gangguanKecemasan');
$routes->get('gangguan/mood', 'Jenis::gangguanMood');
$routes->get('gangguan/skizofrenia', 'Jenis::skizofrenia');
$routes->get('gangguan/makan', 'Jenis::gangguanMakan');
$routes->get('gangguan/ocd', 'Jenis::ocd');
$routes->get('gangguan/kepribadian', 'Jenis::gangguanKepribadian');
$routes->get('gangguan/adhd', 'Jenis::adhd');
$routes->get('gangguan/depresi', 'Jenis::depresi');
$routes->get('gangguan/ts', 'Jenis::ts');



// $routes->post('/simpanjawaban', 'PsikotesController::simpanJawabanPasien');
$routes->get('pages/goback', 'PsikotesController::goback');
$routes->get('pages/psikotes/(:num)', 'PsikotesController::index/$1');
$routes->get('pages/psikotes', 'PsikotesController::index');
$routes->get('pages/cekDiagnosis', 'PsikotesController::cekDiagnosis');
$routes->get('pages/getJawaban', 'PsikotesController::getJawabanUser');
// $routes->post('pages/submit_answers', 'PsikotesController::submit_answers');
$routes->post('psikotes/submit_answers/(:num)', 'PsikotesController::submit_answers/$1');
$routes->post('pages/diagnosis', 'PsikotesController::diagnosis');


$routes->get('api/get_questions', 'Api::getQuestions');
$routes->post('api/save_answer', 'Api::saveAnswer');


/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}


// buat halaman register belom selesai //done
// sudah selesai templating admin, dan juga menampilkan index halaman data user khusus reguler user



// benerin dulu view admin ,check migration, sekalian bikinin seeder, biar bisa di run divca. 
// oiya jangan lupa bikin lemparan di home untuk perbedaan rolenya .



// noted : 
// sepertinya index php main templarte yang di hosting pakei yang lama aja , tapi di comppare duul