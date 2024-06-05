<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\PaypalController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\Admin\ImageController;
use App\Http\Controllers\DestinationController;



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

Route::get('/', [\App\Http\Controllers\HomeController::class,'index'])->name('index');
Route::get('/about', function () {
    return view('frontend.about');
});
Route::get('/destination/{destination:city}', [\App\Http\Controllers\DetailController::class,'show'])->name('destination.show');
Route::get('/destination/detail', function () {
    return view('frontend.destination.detail');
});
Route::get('/contact', function () {
    return view('frontend.contact');
});

Route::get('/destination/{destination}', [DestinationController::class, 'show'])->name('destination.show');
Route::get('/destination', [\App\Http\Controllers\DestinationController::class,'index'])->name('index');
Route::get('/image', [\App\Http\Controllers\ImageController::class,'index'])->name('index');
Route::get('/logout', [\App\Http\Controllers\Auth\LogoutController::class, 'logout'])->name('logout')->middleware('auth');
Route::get('/destination/{id}/book', [\App\Http\Controllers\BookingController::class,'showBookingPage'])->name('show.booking.page');
Route::post('/destination/{id}/confirm-booking', [\App\Http\Controllers\BookingController::class,'confirmBooking'])->name('confirm.booking');
Route::get('/bookings/{client_id}/{destination_id}', [BookingController::class, 'show']);
Route::put('/bookings/{client_id}/{destination_id}', [BookingController::class, 'update']);
Route::delete('/bookings/{client_id}/{destination_id}', [BookingController::class, 'destroy']);
Route::get('/booking/success', [BookingController::class, 'bookingSuccess'])->name('booking.success');
Route::post('/payment/checkout/{booking}', [BookingController::class, 'checkout'])->name('checkout.pay');
Route::get('/payment/pay/{booking}', [PaypalController::class, 'payment'])->name('payment.pay');
Route::post('/checkout/pay-on-arrival/{booking}', [BookingController::class, 'payOnArrival'])->name('checkout.payOnArrival');


Route::get('/admin/images', [ImageController::class, 'index'])->name('admin.images.index');
Route::get('/admin/images/create', [ImageController::class, 'create'])->name('admin.images.create');
Route::post('/admin/images', [ImageController::class, 'store'])->name('admin.images.store');
Route::get('/admin/images/{image}', [ImageController::class, 'show'])->name('admin.images.show');
Route::get('/admin/images/{image}/edit', [ImageController::class, 'edit'])->name('admin.images.edit');
Route::put('/admin/images/{image}', [ImageController::class, 'update'])->name('admin.images.update');
Route::delete('/admin/images/{image}', [ImageController::class, 'destroy'])->name('admin.images.destroy');
Route::get('/admin/images', [ImageController::class, 'index'])->name('admin.images.index');


Route::get('/payment/on-arrival-page/{booking}', function () {
    return view('payment.arrival');
})->name('payment.onArrivalPage');

Route::get('/thankyou', function () {
    return view('thankyou');
})->name('thankyou');

Route::post('/generate-bill', [\App\Http\Controllers\PdfController::class,'generateBill'])->name('generateBill');

Route::middleware('auth')->group(function () {
    Route::get('/booking/{id}', [BookingController::class, 'showBookingPage'])->name('show.booking.page');
    // Other booking-related routes
});

Route::get('register', [App\Http\Controllers\Auth\RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [App\Http\Controllers\Auth\RegisterController::class, 'register']);

Route::get('payment/cancel', [PaypalController::class, 'cancel'])->name('payment.cancel');
Route::get('payment/success', [PaypalController::class, 'success'])->name('payment.success');

Route::get('/payment/checkout/{booking}', [BookingController::class, 'checkout'])->name('payment.paywithpaypal');
Route::get('/create-invoice/{bookingId}', [InvoiceController::class, 'createInvoice']);
Route::get('/InvoicesDetails/{invoiceId}', [InvoiceController::class, 'showInvoiceDetails'])->name('invoices.details');
Route::get('/invoices/{id}', [InvoiceController::class, 'show'])->name('invoice.show');
Route::post('/send-invoice-email', [InvoiceController::class, 'sendInvoiceEmail'])->name('sendInvoiceEmail');
Route::post('/send-arrival-invoice-email', [InvoiceController::class, 'sendArrivalInvoiceEmail'])->name('sendArrivalInvoiceEmail');
Route::get('/invoices/{id}', [InvoiceController::class, 'showPaidInvoice'])->name('invoices.showPaid');
Route::get('/invoices2/{id}', [InvoiceController::class, 'showUnpaidInvoice'])->name('invoices.showUnpaid');


Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => 'isAdmin','prefix' => 'admin', 'as' => 'admin.'], function() {
    Route::get('dashboard', [\App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard.index');
    Route::resource('permissions', \App\Http\Controllers\Admin\PermissionController::class);
    Route::resource('roles', \App\Http\Controllers\Admin\RoleController::class);
    Route::resource('users', \App\Http\Controllers\Admin\UserController::class);
    Route::get('profile', [\App\Http\Controllers\ProfileController::class, 'show'])->name('profile.show');
    Route::put('profile', [\App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');
    Route::resource('sliders', \App\Http\Controllers\Admin\SliderController::class);
    Route::resource('destinations', \App\Http\Controllers\Admin\DestinationController::class);
    Route::resource('images', \App\Http\Controllers\Admin\ImageController::class);
    Route::resource('testimonials', \App\Http\Controllers\Admin\TestimonialContoller::class);
    Route::resource('settings', \App\Http\Controllers\Admin\SettingController::class);
    Route::get('/send_email/{id}', [\App\Http\Controllers\Admin\EmailController::class, 'send_email'])->name('admin.email.send_email');
    Route::post('/mail/{id}', [\App\Http\Controllers\Admin\EmailController::class, 'mail'])->name('mail');
    Route::resource('email', \App\Http\Controllers\Admin\EmailController::class);
});