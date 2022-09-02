<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\BlogController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\ProjectsController;
use App\Http\Controllers\Frontend\ServicesController;
use App\Http\Controllers\Frontend\ShopController;
use App\Http\Controllers\Frontend\RagesterController;
use App\Http\Controllers\Frontend\GuiderRegistrationModelController;
use App\Http\Controllers\Frontend\TransportController;
use App\Http\Controllers\Frontend\TourPakagesController;
use App\Http\Controllers\Frontend\LocalRoomBookingController;
use App\Http\Controllers\Frontend\HotelBookingController;
use App\Http\Controllers\Frontend\ChatingController;
use App\Http\Controllers\Frontend\CategoryTourPakageController;
use App\Http\Controllers\Frontend\CategoryProvincesController;
use App\Http\Controllers\Frontend\TourPointController;
use App\Http\Controllers\Frontend\CityController;
use App\Http\Controllers\Frontend\DivisionsController;
use App\Http\Controllers\Frontend\HealthCareCenterController;
use App\Http\Controllers\Frontend\TblHotelController;
use App\Http\Controllers\Frontend\TblRoomBookingController;
use App\Http\Controllers\Frontend\SubscribeController;
use App\Http\Controllers\Frontend\ContactUsController;
use App\Http\Controllers\Admincontroller;
use App\Http\Controllers\TblPakageBookingController;
use App\Http\Controllers\TblVisitorReviewsController;
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
// home page
Route::get('/', [HomeController::class,'index']);
// about
Route::get('/about',[AboutController::class,'index']);
Route::get('/team',[AboutController::class,'team']);
Route::get('/testimonials',[AboutController::class,'testimonials']);
// blog
Route::get('/blog',[BlogController::class,'index']);
Route::get('/punjab-blog',[BlogController::class,'punjab_blog']);
Route::get('/interesting_point/{id}',[BlogController::class,'interesting_point']);
Route::get('/punjab-blog2',[BlogController::class,'punjab_blog2']);
Route::get('/sindh-blog',[BlogController::class,'sindh_blog']);
Route::post('/sindh-blog',[BlogController::class,'search']);
Route::get('/sindh-blog2',[BlogController::class,'sindh_blog2']);
Route::get('/balochistan-blog',[BlogController::class,'balochistan_blog']);
Route::get('/balochistan-blog2',[BlogController::class,'balochistan_blog2']);
Route::get('/kpk-blog',[BlogController::class,'kpk_blog']);
Route::get('/kpk-blog2',[BlogController::class,'kpk_blog2']);
// Route::get('/blog-2',[BlogController::class,'blog_2']);
// Route::get('/blog-detail',[BlogController::class,'blog_detail']);
// contact
Route::get('/contact',[ContactController::class,'index']);
// projects-classic
Route::get('/projects-classic',[ProjectsController::class,'index']);
Route::get('/masonry',[ProjectsController::class,'masonry']);
Route::get('/fullwidth',[ProjectsController::class,'fullwidth']);

// services
Route::get('/services',[ServicesController::class,'index']);
Route::get('/residence',[ServicesController::class,'residence']);
Route::get('/hotel-residence',[ServicesController::class,'hotel_residence']);
Route::get('/local-residence',[ServicesController::class,'local_residence']);
Route::get('/health_care_center',[ServicesController::class,'care_center']);
Route::get('/tour-guide',[ServicesController::class,'tour_guide']);
// Route::get('/services',[ServicesController::class,'index']);
// Route::get('/services',[ServicesController::class,'index']);
// Route::get('/services',[ServicesController::class,'index']);
// Route::get('/services',[ServicesController::class,'index']);
Route::get('/services',[ServicesController::class,'index']);
// shop
Route::get('/shop',[ShopController::class,'index']);
Route::get('/product-detail/{id?}',[ShopController::class,'product_detail']);
Route::post('/pakagbooking/{id?}',[TblPakageBookingController::class,'store']);
Route::get('/cart-page',[ShopController::class,'cart_page']);
Route::get('/checkout',[ShopController::class,'checkout']);
// regester visiter
Route::get('/register',[RagesterController::class,'index']);
Route::get('/register_user_sight',[RagesterController::class,'index_user_sight']);
Route::post('/register_user_sight',[RagesterController::class,'register_user_sight']);
Route::post('/register',[RagesterController::class,'register']);
Route::get('/visiter-view',[RagesterController::class,'visiter_data']);
Route::get('/visiter-delete/{id}',[RagesterController::class,'delete'])->name('visiter.delete');
Route::get('/update_profile/{id}',[RagesterController::class,'edit'])->name('visiter.edit_profile');
Route::get('/update_status/{id}',[RagesterController::class,'status']);
Route::post('/visiter/profile_update/{id}',[RagesterController::class,'profile_update'])->name('visiter.profile_update');
//Tour Guider registration
Route::get('/tour_guider_registration',[GuiderRegistrationModelController::class,'index']);
Route::get('/registration_guider_user_sight',[GuiderRegistrationModelController::class,'index_user']);
Route::post('/guider_registration_user_sight',[GuiderRegistrationModelController::class,'store_user']);
Route::post('/tour_guider_registration',[GuiderRegistrationModelController::class,'store']);
Route::get('/guider-view',[GuiderRegistrationModelController::class,'show']);
Route::get('/team',[GuiderRegistrationModelController::class,'show_team']);
Route::get('/guider-edit/{id}',[GuiderRegistrationModelController::class,'edit']);
Route::post('/guider-update/{id}',[GuiderRegistrationModelController::class,'update']);
Route::get('/guider-delete/{id}',[GuiderRegistrationModelController::class,'destroy']);
Route::get('/guider-status/{id}',[GuiderRegistrationModelController::class,'status']);
// transport booking table
Route::get('/transport',[TransportController::class,'index']);
Route::post('/transport',[TransportController::class,'store']);
Route::get('/transport-booking-view',[TransportController::class,'show']);
Route::get('/transport_booking-edit/{id}',[TransportController::class,'edit']);
Route::post('/transport_booking-update/{id}',[TransportController::class,'update']);
Route::get('/transport_booking-delete/{id}',[TransportController::class,'delete']);
//hotel-booking
Route::get('/hotel_booking',[HotelBookingController::class,'index']);
Route::get('/hotel_booking_user_sight/{name?}',[HotelBookingController::class,'index_user_sight']);
Route::post('/hotel_booking_user_sight',[HotelBookingController::class,'insert_user_sight']);
Route::post('/hotel_booking',[HotelBookingController::class,'insert']);
Route::get('/hotel_booking_view',[HotelBookingController::class,'show']);
Route::get('/hotel-booking-edit/{id}',[HotelBookingController::class,'edit']);
Route::post('/update_hotel_booking/{id}',[HotelBookingController::class,'update']);
Route::get('/hotel-booking-delete/{id}',[HotelBookingController::class,'delete']);
// Hotel registeration
Route::get('/register_hotel',[TblHotelController::class,'index']);
Route::get('/register_hotel_user_sight',[TblHotelController::class,'index_user_sight']);
Route::post('/register_hotel_user_sight',[TblHotelController::class,'store_user_sight']);
Route::post('/register_hotel',[TblHotelController::class,'store']);
Route::get('/hotel_register_view',[TblHotelController::class,'show']);
Route::get('/hotel_register_delete/{id}',[TblHotelController::class,'destroy']);
Route::get('/hotel_register_edit/{id}',[TblHotelController::class,'edit']);
Route::post('/hotel_register_update/{id}',[TblHotelController::class,'update']);
Route::get('/hotel_register_status/{id}',[TblHotelController::class,'status']);
//Local Room Booking
Route::get('register_LocalRoom',[LocalRoomBookingController::class,'index']);
Route::get('register_LocalRoom_user_sight',[LocalRoomBookingController::class,'index_user_sight']);
Route::post('register_LocalRoom_user_sight',[LocalRoomBookingController::class,'insert_user_sight']);
Route::post('register_LocalRoom',[LocalRoomBookingController::class,'insert']);
Route::get('LocalRoom-view',[LocalRoomBookingController::class,'view']);
Route::get('LocalRoom_edit/{id}',[LocalRoomBookingController::class,'edit']);
Route::post('LocalRoom_update/{id}',[LocalRoomBookingController::class,'update']);
Route::get('LocalRoom_delete/{id}',[LocalRoomBookingController::class,'delete']);
Route::get('LocalRoom_status/{id}',[LocalRoomBookingController::class,'changeStatus']);
//Room booking
Route::get('room_booking',[TblRoomBookingController::class,'index']);
Route::get('room_booking_user_sight',[TblRoomBookingController::class,'index_user_sight']);
Route::post('room_booking_user_sight',[TblRoomBookingController::class,'store_user_sight']);
Route::post('room_booking',[TblRoomBookingController::class,'store']);
Route::get('/roomby_booking_type',[TblRoomBookingController::class,'roomby_booking_type']);
Route::get('room-booking-view',[TblRoomBookingController::class,'show']);
Route::get('room-booking-edit/{id}',[TblRoomBookingController::class,'edit']);
Route::post('room-booking-update/{id}',[TblRoomBookingController::class,'update']);
Route::get('room-booking-delete/{id}',[TblRoomBookingController::class,'destroy']);
//tour pointes
Route::get('tour_point_registeration',[TourPointController::class,'index']);
Route::post('tour_point_registeration',[TourPointController::class,'store']);
Route::get('tour_point_view',[TourPointController::class,'show']);
Route::get('tour_point_edit/{id}',[TourPointController::class,'edit']);
Route::get('tour_point_delete/{id}',[TourPointController::class,'delete']);
Route::post('tour_point_update/{id}',[TourPointController::class,'update']);
//TourPakagesController
Route::get('new_pakages_create',[TourPakagesController::class,'index']);
Route::post('new_pakages_create',[TourPakagesController::class,'store']);
Route::post('update_pakage_detailes/{id}',[TourPakagesController::class,'update']);
Route::get('tour_pakage_view',[TourPakagesController::class,'show']);
Route::get('tour_pakage_edit/{id}',[TourPakagesController::class,'edit']);
Route::get('delete_tour_pakage/{id}',[TourPakagesController::class,'delete']);
//CategoryTourPakageController
Route::get('category_tour_pakage',[CategoryTourPakageController::class,'index']);
Route::post('category_tour_pakage',[CategoryTourPakageController::class,'store']);
Route::get('category_tour_pakage_show',[CategoryTourPakageController::class,'show']);
Route::post('category_tour_pakage_update/{id}',[CategoryTourPakageController::class,'update']);
Route::get('category_tour_pakage_edit/{id}',[CategoryTourPakageController::class,'edit']);
Route::get('category_tour_pakage_delete/{id}',[CategoryTourPakageController::class,'delete']);
//HealthCareCenterController
Route::get('HealthCareCenter',[HealthCareCenterController::class,'index']);
Route::post('HealthCareCenter',[HealthCareCenterController::class,'store']);
Route::get('HealthCareCenter-view',[HealthCareCenterController::class,'show']);
Route::get('health_care_center-delete/{id}',[HealthCareCenterController::class,'delete']);
Route::get('health_care_center-edit/{id}',[HealthCareCenterController::class,'edit']);
Route::post('health_care_center-update/{id}',[HealthCareCenterController::class,'update']);
//DivisionsController
Route::get('Divisions',[DivisionsController::class,'index']);
Route::post('Divisions',[DivisionsController::class,'store']);
Route::get('Divisions-view',[DivisionsController::class,'show']);
Route::get('Divisions-edit/{id}',[DivisionsController::class,'edit']);
Route::get('Divisions-delete/{id}',[DivisionsController::class,'delete']);
Route::post('Divisions-update/{id}',[DivisionsController::class,'update']);
// SubscribeController//
Route::post('Subscribe',[SubscribeController::class,'store']);
Route::get('Subscribe_view',[SubscribeController::class,'show']);
Route::get('delete_subscribe/{id}',[SubscribeController::class,'destroy']);
// ContactUsController

Route::post('Contact_Us',[ContactUsController::class,'store']);
Route::get('Contact_Us_view',[ContactUsController::class,'show']);
Route::get('Contact_Us_delete/{id}',[ContactUsController::class,'destroy']);
// admin
Route::get('admin',[Admincontroller::class,'index'])->middleware('adminauth');
Route::get('/log-out',[Admincontroller::class,'log_out']);
Route::get('/auth-register',[Admincontroller::class,'auth_register']);
Route::post('/log-out',[Admincontroller::class,'admin_auth']);
//pakage booking TblPakageBookingController
Route::get('/pakagbooking_view',[TblPakageBookingController::class,'show']);
// Route::get('/pakage_booking-edit/{id}',[TblPakageBookingController::class,'show']);
// Route::get('/pakage_booking-edit/{id}',[TblPakageBookingController::class,'show']);
Route::get('/pakage_booking-delete/{id}',[TblPakageBookingController::class,'destroy']);
//TblVisitorReviewsController
Route::post('vistor_reviews',[TblVisitorReviewsController::class,'store']);
Route::get('vistor_reviews-view',[TblVisitorReviewsController::class,'show']);
Route::get('visiter_review_delete/{id}',[TblVisitorReviewsController::class,'destroy']);
//CityController
Route::get('City_register',[CityController::class,'index']);
Route::post('City_register',[CityController::class,'store']);
Route::get('City_view',[CityController::class,'show']);
Route::get('City_view_by_divistion',[CityController::class,'City_view']);
Route::get('search_city',[CityController::class,'search']);
Route::get('search_tourpoint',[CityController::class,'search_point']);
Route::get('/city_delete/{id}',[CityController::class,'delete']);
Route::get('/city_edit/{id}',[CityController::class,'edit']);
Route::post('/city_update/{id}',[CityController::class,'update']);
