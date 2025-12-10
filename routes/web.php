<?php

// use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ManagePagesController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\AboutController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SliderController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::group(['prefix' => 'manage', 'as' => 'admin.'], function(){
    Route::middleware(['auth'])->group(function(){
    Route::get('/', [AdminDashboardController::class, 'Index'])->name('index');
    Route::get('/index', [AdminDashboardController::class, 'Index'])->name('home');
});


Route::controller(ManagePagesController::class)->group(function(){
        Route::get('/pages', 'Index')->name('manage.pages');
        Route::get('/pages/create/',  'PagesCreate')->name('Pages.Create');
        Route::post('/pages/store/', 'PagesStore')->name('PagesStore');
        Route::get('/pages/edit/{id}',  'PagesEdit')->name('PagesEdit');
        Route::post('/pages/update/{id}', 'PagesUpdate')->name('PagesUpdate');
        Route::get('/pages/delete/{id}',  'PagesDelete')->name('PagesDelete');
        Route::get('/pages/activate/{id}',  'PagesActivate')->name('PagesActivate');
        Route::get('/pages/disable/{id}',  'PagesDisable')->name('PagesDisable');
        Route::get('/pages/submenu/{id}',  'GetSubMenus')->name('page.getSubmenu');
    });

    Route::controller(AboutController::class)->group(function(){
        Route::get('/blog', 'Index')->name('about.index');
        Route::get('/blog/create', 'AboutCreate')->name('AboutCreate');
        Route::post('/blog/store', 'AboutStore')->name('AboutStore');
        Route::get('/blog/edit/{id}', 'AboutEdit')->name('AboutEdit');
        Route::post('/blog/update/{id}', 'AboutUpdate')->name('AboutUpdate');
        Route::get('/blog/delete/{id}', 'AboutDelete')->name('AboutDelete');
        Route::get('/blog/activate/{id}', 'AboutActivate')->name('AboutActivate');
        Route::get('/blog/diabled/{id}', 'AboutDisable')->name('AboutDisable');
    });
  
    Route::controller(SliderController::class)->group(function(){
        Route::get('/settings/sliders/index', 'Index')->name('settings.sliders');
        Route::get('/settings/sliders/create', 'CreateSlider')->name('sliderCreate');
        Route::post('/settings/sliders/store', 'StoreSlider')->name('sliderStore');
        Route::get('/settings/sliders/edit/{id}', 'EditSlider')->name('sliderEdit');
        Route::post('/settings/sliders/update/{id}', 'UpdateSlider')->name('sliderUpdate');
        Route::get('/settings/sliders/delete/{id}', 'DeleteSlider')->name('sliderDelete');
        Route::get('/settings/sliders/activate/{id}', 'ActivateSlider')->name('sliderActivate');
        Route::get('/settings/sliders/deactivate/{id}', 'DeactivateSlider')->name('sliderDeactivate');
    });

    Route::controller(SettingsController::class)->group(function(){
        Route::get('/settings/index', 'Index')->name('settings.index');
        Route::get('/settings/testimonias', 'Testimonials')->name('settings.testimonials');
        Route::get('/settings/socials', 'Socials')->name('settings.socials');
        Route::get('/settings/about', 'Abouts')->name('settings.abouts');
        Route::get('/settings/add/testimonial', 'CreateTestimonial')->name('settings.createTestimonial');
        Route::post('/settings/store/testimonial', 'StoreTestimonial')->name('settings.storeTestimonial');
        Route::get('/settings/edit/testimonial/{id}', 'EditTestimonial')->name('settings.editTestimonial');
        Route::post('/settings/update/testimonial/{id}', 'UpdateTestimonial')->name('settings.updateTestimonial');
        Route::get('/settings/delete/testimonial/{id}', 'DeleteTestimonial')->name('settings.deleteTestimonial');
        Route::post('/settings/update/socials', 'UpdateSocials')->name('settings.updateSocials');
        Route::post('/settings/update/settings', 'UpdateSettings')->name('settings.updateSettings');
        Route::get('/admin/user', 'UserAccount')->name('userAccount');
        Route::post('/admin/uuser/account', 'UpdateAccount')->name('UpdateAccount');
    });

  
});




Route::controller(HomeController::class)->group(function ()
{
    Route::get('/', 'Index')->name('users.home');
    Route::get('/about-us', 'AboutUs')->name('users.about-us');
    Route::get('/contact-us', 'ContactUs')->name('users.contact-us'); 
    Route::post('/contact/form', 'ContactForm')->name('contact-us');
    Route::get('/pages/terms', 'Terms')->name('pages.terms');
    Route::get('/pages/privacypolicy', 'PrivacyPolicy')->name('PrivacyPolicy');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__.'/auth.php';
