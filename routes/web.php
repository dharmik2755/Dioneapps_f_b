<?php

use Illuminate\Support\Facades\Route;
// for web side Controllers
use App\Http\Controllers\Web\home;
use App\Http\Controllers\Web\about_page;
use App\Http\Controllers\Web\service;
use App\Http\Controllers\Web\portfolio;
use App\Http\Controllers\Web\career;
use App\Http\Controllers\Web\contactus;
use App\Http\Controllers\Web\development;
// use App\Http\Controllers\Web\blog;
// use App\Http\Controllers\Web\blog_single;

//for Admin side Controllers
use App\Http\Controllers\Admin\home_Controller;
use App\Http\Controllers\Admin\development_Controller;
use App\Http\Controllers\Admin\about_Controller;
use App\Http\Controllers\Admin\stages_work;
use App\Http\Controllers\Admin\counter_panel;
use App\Http\Controllers\Admin\our_clients;
use App\Http\Controllers\Admin\contact;
use App\Http\Controllers\Admin\about_expert;
use App\Http\Controllers\Admin\renownedcontroller;
use App\Http\Controllers\Admin\project_contact_Controllerr;
use App\Http\Controllers\Admin\user_contact_Controller;
use App\Http\Controllers\Admin\our_services_Controller;
use App\Http\Controllers\Admin\service_page_Controller;
use App\Http\Controllers\Admin\services_offre_Controller;
use App\Http\Controllers\Admin\career_page_perks;
use App\Http\Controllers\Admin\career_page_title;
use App\Http\Controllers\Admin\contact_info;
use App\Http\Controllers\Admin\portfolio_award;
use App\Http\Controllers\Admin\portfolio_latest_work;
use App\Http\Controllers\Admin\footer_first_controller;
use App\Http\Controllers\Admin\footer_forth_controller;
use App\Http\Controllers\Admin\footer_fifth_controller;
use App\Http\Controllers\Admin\specializeds_Controller;
use App\Http\Controllers\Admin\we_expert_Controller;
use App\Http\Controllers\Admin\about_counter_Controller;
use App\Http\Controllers\Admin\master\specializ_id_Controller;
use App\Http\Controllers\Admin\development\app_develop_title_Controller;
use App\Http\Controllers\Admin\development\company_work_features_Controller;
use App\Http\Controllers\Admin\development\uiux_develop_title_Controller;
use App\Http\Controllers\Admin\development\web_develop_title_Controller;
use App\Http\Controllers\Admin\development\company_projects;
use App\Http\Controllers\Admin\features_Controller;

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
Route::any('/', [home::class, 'home'])->name('home.page');
Route::any('/about', [about_page::class, 'about'])->name('about.page');
Route::any('/about2', [about_page::class, 'about2'])->name('about2.page');
Route::any('/service', [service::class, 'service'])->name('service.page');
Route::any('/portfolio', [portfolio::class, 'portfolio'])->name('portfolio.page');
Route::any('/career', [career::class, 'career'])->name('career.page');
Route::any('/contactus', [contactus::class, 'contactus'])->name('contact.page');
Route::any('/development/{id}', [development::class, 'development'])->name('development.page');
// Route::any('/blog', [blog::class, 'blog'])->name('blog.page');
// Route::any('/blog_single', [blog_single::class, 'blog_single'])->name('blog_single.page');

// Admin Side-----------------------------------------------------------------------------------
Route::group(['middleware' => "backend"], function () {
    Route::any('/Admin-side', [home_Controller::class, 'login']);
    Route::any('/Logout', [home_Controller::class, 'logout']);
    Route::any('/dashboard', [home_Controller::class, 'dashboard'])->name('dashboard.page');

    // home
    Route::any('/Add-home-slider', [home_Controller::class, 'add_home_slider'])->name('home.slider.add');
    Route::any('/view-home-slider', [home_Controller::class, 'view_home_slider'])->name('view.home.slider');
    Route::any('/eidt-home-slider/{id}', [home_Controller::class, 'edit_home_slider']);
    Route::any('/delete-home-slider/{id}', [home_Controller::class, 'delete_home_slider']);
    Route::any('/stutus-home-slider', [home_Controller::class, 'active_and_deactive']);


    // development Mobile/web/ui-ux
    Route::any('/add-development-data', [development_Controller::class, 'create'])->name('development.create');
    Route::any('/view-development-data', [development_Controller::class, 'show'])->name('development.view');
    Route::any('/edit-development-data/{id}', [development_Controller::class, 'edit'])->name('development.edit');
    Route::any('/delete-development-data/{id}', [development_Controller::class, 'destroy'])->name('development.delete');
    Route::any('/stutus-development-data', [development_Controller::class, 'active_and_deactive']);


    // about
    Route::any('/add-about-data', [about_Controller::class, 'create'])->name('about.create');
    Route::any('/view-about-data', [about_Controller::class, 'show'])->name('about.view');
    Route::any('/edit-about-data/{id}', [about_Controller::class, 'edit'])->name('about.edit');
    Route::any('/delete-about-data/{id}', [about_Controller::class, 'destroy'])->name('about.delete');
    Route::any('/stutus-about-data', [about_Controller::class, 'active_and_deactive']);

    // stages of work
    Route::any('/add-stages-of-work-data', [stages_work::class, 'create'])->name('stages.create');
    Route::any('/view-stages-of-work-data', [stages_work::class, 'show'])->name('stages.view');
    Route::any('/edit-stages-of-work-data/{id}', [stages_work::class, 'edit'])->name('stages.edit');
    Route::any('/delete-stages-of-work-data/{id}', [stages_work::class, 'destroy'])->name('stages.delete');
    Route::any('/stutus-stages-of-work-data', [stages_work::class, 'active_and_deactive']);

    // stages of work
    Route::any('/view-counter-data', [counter_panel::class, 'show'])->name('counter.view');
    Route::any('/edit-counter-data/{id}', [counter_panel::class, 'edit'])->name('counter.edit');


    // out clients
    Route::any('/add-our-clients-of-work-data', [our_clients::class, 'create'])->name('clients.create');
    Route::any('/view-our-clients-of-work-data', [our_clients::class, 'show'])->name('clients.view');
    Route::any('/edit-our-clients-of-work-data/{id}', [our_clients::class, 'edit'])->name('clients.edit');
    Route::any('/delete-our-clients-of-work-data/{id}', [our_clients::class, 'destroy'])->name('clients.delete');
    Route::any('/stutus-our-clients-of-work-data', [our_clients::class, 'active_and_deactive']);

    // contact
    Route::any('/add-our-contact-of-work-data', [contact::class, 'create'])->name('contact.create');
    Route::any('/view-our-contact-of-work-data', [contact::class, 'show'])->name('contact.view');
    Route::any('/edit-our-contact-of-work-data/{id}', [contact::class, 'edit'])->name('contact.edit');
    // Route::any('/delete-our-contact-of-work-data/{id}',[contact::class, 'destroy'])->name('contact.delete');

    // about  page title and description and sub_title
    Route::any('/add-about-page-expert-data', [about_expert::class, 'create'])->name('about.expert.create');
    Route::any('/view-about-page-expert-data', [about_expert::class, 'show'])->name('about.expert.view');
    Route::any('/edit-about-page-expert-data/{id}', [about_expert::class, 'edit'])->name('about.expert.edit');
    Route::any('/delete-about-page-expert-data/{id}', [about_expert::class, 'destroy'])->name('about.expert.delete');
    Route::any('/stutus-about-page-expert-data', [about_expert::class, 'active_and_deactive']);

    // about  page Renowned
    Route::any('/add-renowned-data', [renownedcontroller::class, 'create'])->name('renowned.create');
    Route::any('/view-renowned-data', [renownedcontroller::class, 'show'])->name('renowned.view');
    Route::any('/edit-renowned-data/{id}', [renownedcontroller::class, 'edit'])->name('renowned.edit');
    Route::any('/delete-renowned-data/{id}', [renownedcontroller::class, 'destroy'])->name('renowned.delete');
    Route::any('/stutus-renowned-data', [renownedcontroller::class, 'active_and_deactive']);

    // about  page Project Contact
    Route::any('/add-project-contact-data', [project_contact_Controllerr::class, 'create'])->name('project.contact.create');
    Route::any('/view-project-contact-data', [project_contact_Controllerr::class, 'show'])->name('project.contact.view');
    Route::any('/edit-project-contact-data/{id}', [project_contact_Controllerr::class, 'edit'])->name('project.contact.edit');
    Route::any('/delete-project-contact-data/{id}', [project_contact_Controllerr::class, 'destroy'])->name('project.contact.delete');
    Route::any('/stutus-project-contact-data', [project_contact_Controllerr::class, 'active_and_deactive']);

    // contact user contact
    Route::post('/add-user-contact-data', [user_contact_Controller::class, 'create'])->name('user.contact.create');
    Route::any('/view-user-contact-data', [user_contact_Controller::class, 'show'])->name('user.contact.view');
    // Route::any('/edit-user-contact-data/{id}', [user_contact_Controller::class , 'edit'])->name('user.contact.edit');
    Route::any('/delete-user-contact-data/{id}', [user_contact_Controller::class, 'destroy'])->name('user.contact.delete');
    Route::any('/stutus-user-contact-data', [user_contact_Controller::class, 'active_and_deactive']);

    // services Page
    Route::any('/add-services-page-data', [service_page_Controller::class, 'create'])->name('services.create');
    Route::any('/view-services-page-data', [service_page_Controller::class, 'show'])->name('services.view');
    Route::any('/edit-services-page-data/{id}', [service_page_Controller::class, 'edit'])->name('services.edit');
    Route::any('/delete-services-page-data/{id}', [service_page_Controller::class, 'destroy'])->name('services.delete');
    Route::any('/stutus-services-page-data', [service_page_Controller::class, 'active_and_deactive']);

    // our services 
    Route::any('/add-our-services-data', [our_services_Controller::class, 'create'])->name('our-services.create');
    Route::any('/view-our-services-data', [our_services_Controller::class, 'show'])->name('our-services.view');
    Route::any('/edit-our-services-data/{id}', [our_services_Controller::class, 'edit'])->name('our-services.edit');
    Route::any('/delete-our-services-data/{id}', [our_services_Controller::class, 'destroy'])->name('our-services.delete');
    Route::any('/stutus-our-services-data', [our_services_Controller::class, 'active_and_deactive']);

    // services offer
    Route::any('/add-services-offer-data', [services_offre_Controller::class, 'create'])->name('services-offer.create');
    Route::any('/view-services-offer-data', [services_offre_Controller::class, 'show'])->name('services-offer.view');
    Route::any('/edit-services-offer-data/{id}', [services_offre_Controller::class, 'edit'])->name('services-offer.edit');
    Route::any('/delete-services-offer-data/{id}', [services_offre_Controller::class, 'destroy'])->name('services-offer.delete');
    Route::any('/stutus-services-offer-data', [services_offre_Controller::class, 'active_and_deactive']);


    // Career Page title
    Route::any('/add-career-page-title-data', [career_page_title::class, 'create'])->name('career-title.create');
    Route::any('/view-career-page-title-data', [career_page_title::class, 'show'])->name('career-title.view');
    Route::any('/edit-career-page-title-data/{id}', [career_page_title::class, 'edit'])->name('career-title.edit');
    Route::any('/delete-career-page-title-data/{id}', [career_page_title::class, 'destroy'])->name('career-title.delete');
    Route::any('/stutus-career-page-title-data', [career_page_title::class, 'active_and_deactive']);

    // career_page_perks
    Route::any('/add-career-page-perks-data', [career_page_perks::class, 'create'])->name('career-perks.create');
    Route::any('/view-career-page-perks-data', [career_page_perks::class, 'show'])->name('career-perks.view');
    Route::any('/edit-career-page-perks-data/{id}', [career_page_perks::class, 'edit'])->name('career-perks.edit');
    Route::any('/delete-career-page-perks-data/{id}', [career_page_perks::class, 'destroy'])->name('career-perks.delete');
    Route::any('/stutus-career-page-perks-data', [career_page_perks::class, 'active_and_deactive']);

    // contact media information
    Route::any('/add-contact-information-data', [contact_info::class, 'create'])->name('contact-information.create');
    Route::any('/view-contact-information-data', [contact_info::class, 'show'])->name('contact-information.view');
    Route::any('/edit-contact-information-data/{id}', [contact_info::class, 'edit'])->name('contact-information.edit');
    Route::any('/delete-contact-information-data/{id}', [contact_info::class, 'destroy'])->name('contact-information.delete');

    // portfolio_awards
    Route::any('/add-portfolio-awards-data', [portfolio_award::class, 'create'])->name('portfolio-awards.create');
    Route::any('/view-portfolio-awards-data', [portfolio_award::class, 'show'])->name('portfolio-awards.view');
    Route::any('/edit-portfolio-awards-data/{id}', [portfolio_award::class, 'edit'])->name('portfolio-awards.edit');
    Route::any('/delete-portfolio-awards-data/{id}', [portfolio_award::class, 'destroy'])->name('portfolio-awards.delete');
    Route::any('/stutus-portfolio-awards-data', [portfolio_award::class, 'active_and_deactive']);

    // portfolio Our Latest Creative Work
    Route::any('/add-portfolio-Latest-Work-data', [portfolio_latest_work::class, 'create'])->name('Latest-Work.create');
    Route::any('/view-portfolio-Latest-Work-data', [portfolio_latest_work::class, 'show'])->name('Latest-Work.view');
    Route::any('/edit-portfolio-Latest-Work-data/{id}', [portfolio_latest_work::class, 'edit'])->name('Latest-Work.edit');
    Route::any('/delete-portfolio-Latest-Work-data/{id}', [portfolio_latest_work::class, 'destroy'])->name('Latest-Work.delete');
    Route::any('/stutus-portfolio-Latest-Work-data', [portfolio_latest_work::class, 'active_and_deactive']);

    // our specialized clients
    Route::any('/add-specialized-data', [specializeds_Controller::class, 'create'])->name('specialized.create');
    Route::any('/view-specialized-data', [specializeds_Controller::class, 'show'])->name('specialized.view');
    Route::any('/edit-specialized-data/{id}', [specializeds_Controller::class, 'edit'])->name('specialized.edit');
    Route::any('/delete-specialized-data/{id}', [specializeds_Controller::class, 'destroy'])->name('specialized.delete');
    Route::any('/stutus-specialized-data', [specializeds_Controller::class, 'active_and_deactive']);

    // our specialized id clients
    Route::any('/view-specializ_id-data', [specializ_id_Controller::class, 'add_and_show'])->name('specializ_id.view');
    Route::any('/delete-specializ_id-data/{id}', [specializ_id_Controller::class, 'destroy'])->name('specializ_id.delete');
    Route::any('/stutus-specializ_id-data', [specializ_id_Controller::class, 'active_and_deactive']);

    // about page in we are expert page title
    Route::any('/add-we-are-expert-data', [we_expert_Controller::class, 'create'])->name('we-are-expert.create');
    Route::any('/view-we-are-expert-data', [we_expert_Controller::class, 'show'])->name('we-are-expert.view');
    Route::any('/edit-we-are-expert-data/{id}', [we_expert_Controller::class, 'edit'])->name('we-are-expert.edit');
    Route::any('/delete-we-are-expert-data/{id}', [we_expert_Controller::class, 'destroy'])->name('we-are-expert.delete');
    Route::any('/stutus-we-are-expert-data', [we_expert_Controller::class, 'active_and_deactive']);

    // about page new counter 
    Route::any('/add-about-counter-data', [about_counter_Controller::class, 'create'])->name('about-counter.create');
    Route::any('/view-about-counter-data', [about_counter_Controller::class, 'show'])->name('about-counter.view');
    Route::any('/edit-about-counter-data/{id}', [about_counter_Controller::class, 'edit'])->name('about-counter.edit');
    Route::any('/delete-about-counter-data/{id}', [about_counter_Controller::class, 'destroy'])->name('about-counter.delete');
    Route::any('/stutus-about-counter-data', [about_counter_Controller::class, 'active_and_deactive']);

    //app developmnt title 
    Route::any('/add-app-title-data', [app_develop_title_Controller::class, 'create'])->name('app-title.create');
    Route::any('/view-app-title-data', [app_develop_title_Controller::class, 'show'])->name('app-title.view');
    Route::any('/edit-app-title-data/{id}', [app_develop_title_Controller::class, 'edit'])->name('app-title.edit');
    Route::any('/delete-app-title-data/{id}', [app_develop_title_Controller::class, 'destroy'])->name('app-title.delete');
    Route::any('/stutus-app-title-data', [app_develop_title_Controller::class, 'active_and_deactive']);

    //web developmnt title 
    Route::any('/add-web-title-data', [web_develop_title_Controller::class, 'create'])->name('web-title.create');
    Route::any('/view-web-title-data', [web_develop_title_Controller::class, 'show'])->name('web-title.view');
    Route::any('/edit-web-title-data/{id}', [web_develop_title_Controller::class, 'edit'])->name('web-title.edit');
    Route::any('/delete-web-title-data/{id}', [web_develop_title_Controller::class, 'destroy'])->name('web-title.delete');
    Route::any('/stutus-web-title-data', [web_develop_title_Controller::class, 'active_and_deactive']);

    //uiux developmnt title 
    Route::any('/add-uiux-title-data', [uiux_develop_title_Controller::class, 'create'])->name('uiux-title.create');
    Route::any('/view-uiux-title-data', [uiux_develop_title_Controller::class, 'show'])->name('uiux-title.view');
    Route::any('/edit-uiux-title-data/{id}', [uiux_develop_title_Controller::class, 'edit'])->name('uiux-title.edit');
    Route::any('/delete-uiux-title-data/{id}', [uiux_develop_title_Controller::class, 'destroy'])->name('uiux-title.delete');
    Route::any('/stutus-uiux-title-data', [uiux_develop_title_Controller::class, 'active_and_deactive']);

    // features developmnt  
    Route::any('/add-features-data', [features_Controller::class, 'create'])->name('features.create');
    Route::any('/view-features-data', [features_Controller::class, 'show'])->name('features.view');
    Route::any('/edit-features-data/{id}', [features_Controller::class, 'edit'])->name('features.edit');
    Route::any('/delete-features-data/{id}', [features_Controller::class, 'destroy'])->name('features.delete');
    Route::any('/stutus-features-data', [features_Controller::class, 'active_and_deactive']);

    // company work in features  
    Route::any('/add-company-work-features-data', [company_work_features_Controller::class, 'create'])->name('company-work-features.create');
    Route::any('/view-company-work-features-data', [company_work_features_Controller::class, 'show'])->name('company-work-features.view');
    Route::any('/edit-company-work-features-data/{id}', [company_work_features_Controller::class, 'edit'])->name('company-work-features.edit');
    Route::any('/delete-company-work-features-data/{id}', [company_work_features_Controller::class, 'destroy'])->name('company-work-features.delete');
    Route::any('/stutus-company-work-features-data', [company_work_features_Controller::class, 'active_and_deactive']);
    
    // company projects  
    Route::any('/add-company-projects-data', [company_projects::class, 'create'])->name('company-projects.create');
    Route::any('/view-company-projects-data', [company_projects::class, 'show'])->name('company-projects.view');
    Route::any('/edit-company-projects-data/{id}', [company_projects::class, 'edit'])->name('company-projects.edit');
    Route::any('/delete-company-projects-data/{id}', [company_projects::class, 'destroy'])->name('company-projects.delete');
    Route::any('/stutus-company-projects-data', [company_projects::class, 'active_and_deactive']);





    // footer 
    Route::any('/add-footer-first-data', [footer_first_controller::class, 'create'])->name('footer-first.create');
    Route::any('/view-footer-first-data', [footer_first_controller::class, 'show'])->name('footer-first.view');
    Route::any('/edit-footer-first-data/{id}', [footer_first_controller::class, 'edit'])->name('footer-first.edit');
    Route::any('/delete-footer-first-data/{id}', [footer_first_controller::class, 'destroy'])->name('footer-first.delete');
    Route::any('/stutus-footer-first-data', [footer_first_controller::class, 'active_and_deactive']);

    Route::any('/add-footer-forth-data', [footer_forth_controller::class, 'create'])->name('footer-forth.create');
    Route::any('/view-footer-forth-data', [footer_forth_controller::class, 'show'])->name('footer-forth.view');
    Route::any('/edit-footer-forth-data/{id}', [footer_forth_controller::class, 'edit'])->name('footer-forth.edit');
    Route::any('/delete-footer-forth-data/{id}', [footer_forth_controller::class, 'destroy'])->name('footer-forth.delete');
    Route::any('/stutus-footer-forth-data', [footer_forth_controller::class, 'active_and_deactive']);

    Route::any('/add-footer-fifth-data', [footer_fifth_controller::class, 'create'])->name('footer-fifth.create');
    Route::any('/view-footer-fifth-data', [footer_fifth_controller::class, 'show'])->name('footer-fifth.view');
    Route::any('/edit-footer-fifth-data/{id}', [footer_fifth_controller::class, 'edit'])->name('footer-fifth.edit');
    Route::any('/delete-footer-fifth-data/{id}', [footer_fifth_controller::class, 'destroy'])->name('footer-fifth.delete');
    Route::any('/stutus-footer-fifth-data', [footer_fifth_controller::class, 'active_and_deactive']);
});
