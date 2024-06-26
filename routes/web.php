<?php

use App\Livewire\MemReg;
// use Barryvdh\DomPDF\PDF;


use App\Mail\MyTestEmail;
use App\Exports\ExcelExport;
use App\Livewire\ViewMemReg;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\DashboardController;
use Barryvdh\DomPDF\Facade\PDF;

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

Route::get('/', function () {
    return view('home/landing');
})->name('home');

Route::get('/venue', function () {
    return view('home/venue');
})->name('venue');

Route::get('/registration', function () {
    return view('registration.mem-registration');
})->name('reg');
Route::get('/psa-id-checker', function () {
    return view('registration.psa-id-checker');
})->name('psaID-checker');


Route::get('/emailsend', function (Request $request){
    $email = $request->query('email');
    $name = $request->query('name');

    Mail::to($email)->send(new MyTestEmail($name));

    return redirect()->route('reg')->with('success', 'Your registration is on process, Dr. ' . $name . '. We will update you in this email, ' . $email);

})->name('emailsend');

//ADMIN SIDE

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/admin/dashboard', [DashboardController::class, 'dashboard'])->name('admin');
    // Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
    
    Route::get('/admin/viewMemReg', function () {
        return view('user_account.viewMemReg');
    })->name('viewMemReg');


    Route::get('/admin/dashboard/export-excel', function () {
        return Excel::download(new ExcelExport, 'regs.xlsx');
    })->name('exportExcel');

    // Route::get('/admin/dashboard/export-pdf', function (Request $request) {
    //     $info = $request->query('info');
    //     // dd($info);
    //     $pdf = PDF::loadView('exportPDF', $info);
    //     return $pdf->download('reg.pdf');
    // })->name('exportPDF');
});


