<?php

use App\Http\Controllers\TimezoneController;
use App\Livewire\AboutPage;
use App\Livewire\Admin\About;
use App\Livewire\Admin\Contact;
use App\Livewire\Admin\Country;
use App\Livewire\ContactPage;
use App\Livewire\CountryPage;
use App\Livewire\Dashboard\Dashboard\Dashboard;
use App\Livewire\Admin\HeaderFooter;
use App\Livewire\Admin\Home;
use App\Livewire\Admin\Services;
use App\Livewire\Admin\Setting;
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
        Route::get('/setting', Setting::class)->name('setting');
        Route::get('/header-footer', HeaderFooter::class)->name('header-footer');
        Route::get('/home', Home::class)->name('admin.home');
        Route::get('/about', About::class)->name('admin.about');
        Route::get('/services', Services::class)->name('admin.services');
        Route::get('/country', Country::class)->name('admin.country');
        Route::get('/contact', Contact::class)->name('admin.contact');
    });


});


