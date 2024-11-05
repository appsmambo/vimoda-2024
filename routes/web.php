<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BackendController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\EmprendeController;
use App\Models\BannerHome;
use App\Models\Catalogo;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $banners = BannerHome::select('titulo', 'imagen', 'enlace')->Where('orden', '>', 0)->orderBy('orden')->get();
    $catalogos = Catalogo::select('titulo', 'imagen', 'enlace')->orderBy('id', 'DESC')->limit(4)->get();
    return view('frontend.index', ['banners' => $banners, 'catalogos' => $catalogos]);
})->name('index');

Route::get('/catalogo', function () {
    $prevMonth = date(strtotime("- 3 month"));
    $catalogos = Catalogo::select('titulo', 'imagen', 'enlace', 'created_at')->orderBy('id', 'DESC')->get();
    return view('catalog.index', ['catalogos' => $catalogos, 'prevMonth' => $prevMonth]);
})->name('catalogo');

Route::get('/nosotros', function () {
    return view('frontend.nosotros');
})->name('nosotros');

Route::get('/contactos', function () {
    return view('frontend.contactos');
})->name('contactos');

Route::get('/emprende', function () {
    return view('frontend.emprende');
})->name('emprende');

Route::post('/sendEmail', [MailController::class, 'index'])->name('email.index');
Route::post('/sendEmprende', [EmprendeController::class, 'send'])->name('emprende.send');

Auth::routes([
    'register' => false, // Registration Routes...
    'reset' => false, // Password Reset Routes...
    'verify' => false, // Email Verification Routes...
]);

// ADMIN
Route::get('/admin', [BackendController::class, 'index'])->name('admin.index');

// BANNER
Route::get('/admin/home', [BackendController::class, 'home'])->name('admin.home');
Route::get('/admin/home/new', [BackendController::class, 'homeNew'])->name('admin.home.new');
Route::post('/admin/sendHome', [BackendController::class, 'sendHome'])->name('admin.sendHome');
Route::post('/admin/sendHomeOrden', [BackendController::class, 'sendHomeOrden'])->name('admin.sendHomeOrden');
Route::post('/admin/hideBannerHome', [BackendController::class, 'hideBannerHome'])->name('admin.hideBannerHome');

// CATALOGOS
Route::get('/admin/catalogo', [BackendController::class, 'catalogo'])->name('admin.catalogo');
Route::get('/admin/catalogo/new', [BackendController::class, 'catalogoNew'])->name('admin.catalogo.new');
Route::post('/admin/sendCatalogo', [BackendController::class, 'sendCatalogo'])->name('admin.sendCatalogo');
Route::post('/admin/deleteCatalogo', [BackendController::class, 'deleteCatalogo'])->name('admin.deleteCatalogo');


// Create link to storage
//Route::get('/storagelink', function () {
//    Artisan::call('storage:link');
//});

// Route clear
Route::get('/route-clear', function () {
    Artisan::call('route:clear');
});


// Clear view cache:
Route::get('/limpiar-temporales', function() {
    Artisan::call('view:clear');
    return 'View cache has been cleared';
});


