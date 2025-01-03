<?php

use App\Http\Controllers\TimezoneController;
use App\Livewire\AboutPage;
use App\Livewire\ContactPage;
use App\Livewire\CountryPage;
use App\Livewire\Dashboard\Dashboard\Dashboard;
use App\Livewire\HeaderFooter;
use App\Livewire\HealthCarePage;
use App\Livewire\HomePage;
use App\Livewire\Login;
use App\Livewire\OrganizationStructure\Department\DepartmentList;
use App\Livewire\ServicesPage;
use App\Livewire\Settings\ManagePermissions\CreatePermissions;
use App\Livewire\Settings\ManageRole\RoleListing;
use App\Livewire\Settings\ManageRole\RolePermissions;
use Illuminate\Support\Facades\Route;

use Livewire\Livewire;

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

if (config('app.env') !== 'prod') {
    Livewire::setUpdateRoute(function ($handle) {
        return Route::post(config('app.url') . '/livewire/update', $handle);
    });
    Livewire::setScriptRoute(function ($handle) {
        return Route::get(config('app.url') . '/livewire/livewire.js', $handle);
    });
}
Route::get('/', function () {
    return view('welcome');
});
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', Dashboard::class)->name('dashboard');
});

Route::get('/', HomePage::class)->name('home');
Route::get('/about', AboutPage::class)->name('about');
Route::get('/services', ServicesPage::class)->name('services');
Route::get('/healthcare', HealthCarePage::class)->name('healthcare');
Route::get('/country', CountryPage::class)->name('country');
Route::get('/contact', ContactPage::class)->name('contact');

Route::get('admin/login', Login::class)->name('login')->middleware('guest:agent');
Route::middleware(['auth'])->group(function () {


    Route::prefix('admin')->group(function () {
        Route::get('/', Dashboard::class)->name('dashboard');
        Route::get('/page', HeaderFooter::class)->name('header-footer');
    });


});


