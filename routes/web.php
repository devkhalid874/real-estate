<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\admin\AboutController;
use App\Http\Controllers\admin\LeaseController;
use App\Http\Controllers\admin\SquadController;
use App\Http\Controllers\admin\ContactController;
use App\Http\Controllers\admin\OffPlanController;
use App\Http\Controllers\admin\OurVisionController;
use App\Http\Controllers\admin\PartnershipController;
use App\Http\Controllers\admin\BuyingSellingController;
use App\Http\Controllers\admin\InvestDubaiController;
use App\Http\Controllers\admin\OurMissionController;
use App\Http\Controllers\admin\OurServicesController;
use App\Http\Controllers\admin\PropertyManagementController;
use App\Http\Controllers\admin\WhyChooseUsController;

Route::get('/', function () {
    return view('frontend.welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::prefix('admin')->middleware(['auth', 'admin'])->group(function () {

    Route::get('dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::resource('about-sections', AboutController::class)->names('admin.about');
    Route::resource('property-management', PropertyManagementController::class)->names('admin.property_management');
    Route::resource('lease',LeaseController::class)->names('admin.lease');
    Route::resource('buying-selling', BuyingSellingController::class)->names('admin.buying_selling');
    Route::resource('off-plan', OffPlanController::class)->names('admin.off_plan');
    Route::resource('contact', ContactController::class)->names('admin.contact');
    Route::resource('partnership', PartnershipController::class)->names('admin.partnership');
    Route::resource('squad', SquadController::class)->names('admin.squad');
    Route::resource('ourvision', OurVisionController::class)->names('admin.ourvision');
    Route::resource('ourmission', OurMissionController::class)->names('admin.ourmission');
    Route::resource('ourservices', OurServicesController::class)->names('admin.ourservices');
    Route::resource('whychooseus', WhyChooseUsController::class)->names('admin.whychooseus');
    Route::resource('investdubai', InvestDubaiController::class)->names('admin.investdubai');

});

require __DIR__.'/auth.php';



