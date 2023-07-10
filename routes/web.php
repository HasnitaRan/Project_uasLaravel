<?php
 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\authController;
use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\halamanController;
use App\Http\Controllers\CriteriaController;
use App\Http\Controllers\PenilaianController;
use App\Http\Controllers\DashboardPenilaianController;
use App\Http\Controllers\AnggotaController; //add AnggotaController

Route::get('/register', function () {
   return view('pendaftaran');
});
Route::get('/beranda', function () {
    return view('layouts-mhs.master');
 });
 Route::get('/about', function () {
   return view('tampilanui.about');
}); 
// Route::get('/announcement', function () {
//    return view('tampilanui.pengumuman');
// });

Route::get('/news', function () {
   return view('tampilanui.berita');
}); 
Route::get('/schedule', function () {
   return view('tampilanui.jadwal');
}); 

Route::redirect('home', 'dashboard');

// Route::get('/auth', [authController::class, "index"])->name('login');
// Route::get('/auth/redirect', [authController::class, "redirect"])->middleware
// ('guest');

// Route::get('/auth/callback', [authController::class, "callback"])->middleware
// ('guest');
// Route::get('/auth/logout', [authController::class, "logout"] );

Route::get('/dashboard', function () {
   
})->middleware9=('auth');

Route::prefix('dashboard')->group(
   function () {
      Route::get('/', function(){
         return view('dashboard.halaman.index');
      });
      Route::get('halaman', [AnggotaController::class, 'index']);
   }
);

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);

Route::post('/logout', [LoginController::class, 'logout'])->middleware('auth');


// Route::prefix('dashboard')->middleware('auth')->group(
//    function(){
      // Route::get('/', function(){
      //    return view('dashboard.halaman.index');
      // });
   //    Route::get('halaman', [halamanController::class, 'index']);
   // }
// );

Route::get('/pendaftaran', 'AnggotaController@daftar')->name('create');


Route::get('/register', function () {
   return view('pendaftaran');
});
Route::get('/beranda', function () {
    return view('layouts-mhs.master');
 });
//  Route::get('/kriteria', function () {
//    return view('kriteria.index');
// });
 
Route::get('/admine', 'AnggotaController@index')->name('index')->middleware('auth');
Route::get('/create', 'AnggotaController@create')->name('create');
Route::post('store/', 'AnggotaController@store')->name('store');
Route::post('/storeanggota', [AnggotaController::class, 'storeanggota']);
Route::get('show/{anggota}', 'AnggotaController@show')->name('show');
Route::get('edit/{anggota}', 'AnggotaController@edit')->name('edit');
Route::put('edit/{anggota}','AnggotaController@update')->name('update');
Route::delete('/{anggota}','AnggotaController@destroy')->name('destroy');

// Route::get('/admine', 'AnggotaController@index')->name('index');
Route::get('/createpenilaian', 'PenilaianController@create')->name('create');
Route::post('/storepenilaian', [PenilaianController::class, 'store']);
// Route::get('/editpenilaian', [PenilaianController::class, 'update']);
Route::get('show/{anggota}', 'AnggotaController@show')->name('show');
// Route::get('editnilai/{penilaian}', 'PenilaianController@edit')->name('edit');
// Route::put('editpenilaian/{anggota}','PenilaianController@update')->name('update');
// Route::delete('/{anggota}','AnggotaController@destroy')->name('destroy');

Route::resource('criterias', CriteriaController::class);

Route::get('/penilaian', 'PerhitunganController@penilaian')->middleware('auth');
Route::get('/kriteria', 'PerhitunganController@kategori')->middleware('auth');
Route::get('/normalisasi', 'PerhitunganController@normalisasi')->middleware('auth');
Route::get('/hasil', 'PerhitunganController@hasil')->middleware('auth');

Route::resource('/dashboard/penilaian', DashboardPenilaianController::class)->middleware('auth');

Route::get('/pengumuman', [PenilaianController::class, 'tampilhasil']);