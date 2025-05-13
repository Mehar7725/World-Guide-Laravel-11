<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PublicController;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });



Route::controller(AuthController::class)->group(function () {
    Route::get('/admin-login', 'AdminLogin'); 
    Route::get('/admin-singup', 'AdminSignUp');  
    Route::post('/admin-register', 'AdminRegister');  
    Route::post('/admin-singin', 'AdminSignIn');  
    Route::get('/admin-logout', 'LogOut');
    Route::get('/signup-user', 'UserSingUp');  
    Route::post('/signup', 'UserRegister');  
    Route::post('/login', 'UserSignIn');  
    Route::get('/logout', 'UserLogOut');

    // Sign With Google ================
    Route::get('/google/redirect', 'redirectToGoogle')->name('google.redirect');
    Route::get('/google/callback', 'handleGoogleCallback')->name('google.callback');
    // Sign With Google ================
     //Start ==== With Facebook account =====
     Route::get('/facebook/redirect','facebookRedirect');
     Route::get('/auth/facebook/callback','facebookCallback');
       //End ==== With Facebook account =====
});

Route::controller(AdminController::class)->group(function () {
    Route::get('/admin-dashboard', 'AdminDashboard');
    // Country Routes ======== 
    Route::get('/country-management', 'CountryManagement'); 
    Route::get('/country-management-add', 'CountryManagementAdd'); 
    Route::post('/add-new-country', 'AddNewCountry'); 
    Route::get('/delete-country/{id}', 'DeleteCountry'); 
    Route::get('/edit-country-{id}', 'EditCountry'); 
    Route::post('/update-new-country', 'UpdateNewCountry'); 
    // Country Routes ======== 
     // City Routes ======== 
     Route::get('/city-management', 'CityManagement'); 
     Route::get('/city-management-add', 'CityManagementAdd'); 
     Route::post('/add-new-city', 'AddNewCity'); 
     Route::get('/delete-city/{id}', 'DeleteCity'); 
     Route::get('/edit-city-{id}', 'EditCity'); 
     Route::post('/update-new-city', 'UpdateNewCity'); 
     // City Routes ======== 
     // Category Routes ======== 
     Route::get('/category', 'Category'); 
     Route::post('/get-cities', 'GetCities'); 
     Route::post('/add-new-category', 'AddNewCategory'); 
     Route::get('/delete-category/{id}', 'DeleteCategory'); 
     Route::post('/update-category', 'UpdateCategory'); 
     // Category Routes ======== 
     // Users Routes ======== 
     Route::get('/user-action/{id}/{action}', 'UserAdminAction');
     // Users Routes ======== 
     
     // Adds Routes ======== 
     Route::get('/add-action/{id}/{action}', 'AddAdminAction');
     Route::post('/update-add', 'UpdateAdd'); 
     // Adds Routes ======== 

});

Route::controller(PublicController::class)->group(function () {
    Route::get('/', 'Index'); 
    Route::get('/blog', 'Blog'); 
    Route::get('/blog-details', 'BlogDetails'); 
    Route::get('/our-companies', 'OurCompanies'); 
    Route::get('/about-us', 'AboutUs'); 
    Route::get('/policy', 'Policy'); 
    Route::get('/contact', 'ContactUs'); 
    Route::get('/add-listing', 'AddListing'); 
    Route::get('/submit-listing', 'SubmitListing'); 
    Route::get('/country-{name}-{id}-{code}', 'CountryShow')->name('country.show'); 
    Route::get('/city-{name}-{id}-{code}-{city_id}-{city}', 'CityShow')->name('city.show'); 
    Route::get('/category-{name}-{id}-{code}-{city_id}-{city}-{category_id}-{category}-{slug}', 'CategoryShow')->name('category.show'); 

    // Routes For User Add create
    Route::post('/get-countries', 'GetCountries'); 
    Route::post('/get-cities', 'GetCities'); 
    Route::post('/get-categories', 'GetCategories'); 
    //Routes For Create User Add ====
    Route::post('/create-user-add', 'CreateUserAdd'); 
    Route::post('/add-payment', 'AddPayment');
    Route::post('/upload-add', 'UploadAdd');
});

