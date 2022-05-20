<?php

use Illuminate\Support\Facades\Route;
// for web side Controllers
use App\Http\Controllers\Web\home;
use App\Http\Controllers\Web\about;
use App\Http\Controllers\Web\service;
use App\Http\Controllers\Web\portfolio;
use App\Http\Controllers\Web\career;
use App\Http\Controllers\Web\contactus;
//for Admin side Controllers
use App\Http\Controllers\Admin\home_Controller;
use App\Http\Controllers\Admin\development_Controller;
use App\Http\Controllers\Admin\about_Controller;
use App\Http\Controllers\Admin\stages_work;
use App\Http\Controllers\Admin\counter_panel;
use App\Http\Controllers\Admin\our_clients;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// User Side
Route::any('/', [home::class, 'home']);
Route::any('/about', [about::class, 'about']);
Route::any('/service', [service::class, 'service']);
Route::any('/portfolio', [portfolio::class, 'portfolio']);
Route::any('/career', [career::class, 'career']);
Route::any('/contactus', [contactus::class, 'contactus']);

// Admin Side-----------------------------------------------------------------------------------
Route::any('/Admin-side', [home_Controller::class, 'login']);
Route::any('/dashboard', [home_Controller::class, 'dashboard']);
Route::any('/Add-home-slider', [home_Controller::class, 'add_home_slider']);
Route::any('/view-home-slider', [home_Controller::class, 'view_home_slider'])->name('view.home.slider');
Route::any('/eidt-home-slider/{id}', [home_Controller::class, 'edit_home_slider']);
Route::any('/delete-home-slider/{id}', [home_Controller::class, 'delete_home_slider']);

// development Mobile/web/ui-ux
Route::any('/add-development-data',[development_Controller::class, 'create'])->name('development.create');
Route::any('/view-development-data',[development_Controller::class, 'show'])->name('development.view');
Route::any('/edit-development-data/{id}',[development_Controller::class, 'edit'])->name('development.edit');
Route::any('/delete-development-data/{id}',[development_Controller::class, 'destroy'])->name('development.delete');

// about
Route::any('/add-about-data',[about_Controller::class, 'create'])->name('about.create');
Route::any('/view-about-data',[about_Controller::class, 'show'])->name('about.view');
Route::any('/edit-about-data/{id}',[about_Controller::class, 'edit'])->name('about.edit');
Route::any('/delete-about-data/{id}',[about_Controller::class, 'destroy'])->name('about.delete');

// stages of work
Route::any('/add-stages-of-work-data',[stages_work::class, 'create'])->name('stages.create');
Route::any('/view-stages-of-work-data',[stages_work::class, 'show'])->name('stages.view');
Route::any('/edit-stages-of-work-data/{id}',[stages_work::class, 'edit'])->name('stages.edit');
Route::any('/delete-stages-of-work-data/{id}',[stages_work::class, 'destroy'])->name('stages.delete');

// stages of work
// Route::any('/add-counter-data',[counter_panel::class, 'create'])->name('counter.create');
Route::any('/view-counter-data',[counter_panel::class, 'show'])->name('counter.view');
Route::any('/edit-counter-data/{id}',[counter_panel::class, 'edit'])->name('counter.edit');
// Route::any('/delete-counter-data/{id}',[counter_panel::class, 'destroy'])->name('counter.delete');

// out clients
Route::any('/add-our-clients-of-work-data',[our_clients::class, 'create'])->name('clients.create');
Route::any('/view-our-clients-of-work-data',[our_clients::class, 'show'])->name('clients.view');
Route::any('/edit-our-clients-of-work-data/{id}',[our_clients::class, 'edit'])->name('clients.edit');
Route::any('/delete-our-clients-of-work-data/{id}',[our_clients::class, 'destroy'])->name('clients.delete');

// contact
// Route::any('/add-our-contact-of-work-data',[contact::class, 'create'])->name('contact.create');
// Route::any('/view-our-contact-of-work-data',[contact::class, 'show'])->name('contact.view');
// Route::any('/edit-our-contact-of-work-data/{id}',[contact::class, 'edit'])->name('contact.edit');
// Route::any('/delete-our-contact-of-work-data/{id}',[contact::class, 'destroy'])->name('contact.delete');