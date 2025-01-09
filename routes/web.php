<?php

use App\Livewire\MemReg;
// use Barryvdh\DomPDF\PDF;

use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;



use App\Mail\MyTestEmail;
use App\Exports\ExcelExport;
use App\Livewire\ViewMemReg;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\DashboardController;


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
Route::get('/sitemap.xml', function () {
    $sitemap = Sitemap::create()
        ->add(Url::create('/'))
        ->add(Url::create('/about'))
        ->add(Url::create('/contact'));

    return $sitemap->toResponse(request());
});

Route::get('/', function () {
    Artisan::call('cache:clear');
    Artisan::call('route:clear');
    Artisan::call('config:clear');
    Artisan::call('view:clear');
    return view('home/landing');
})->name('home');

Route::get('/venue', function () {
    return view('home/venue');
})->name('venue');

Route::get('/organizing-committee', function () {
    return view('home/pages/organizing-committee');
})->name('orgCom');

// Route::get('/organizing-committee', function () {
//     return view('home/pages/orgComPic');
// })->name('orgCom');

Route::get('/speakers', function () {
    return view('home/pages/speakers');
})->name('speakers');

Route::get('/contact', function () {
    return view('home/pages/contact');
})->name('contact');

// Route::get('/abstract', function () {
//     return view('home/pages/abstract');
// })->name('abstract');


// Route::get('/accommodations', function () {
//     return view('home/pages/accommodations');
// })->name('accommodations');

// Route::get('/registration', function () {
//     return view('home/pages/registration-details');
// })->name('reg');

// Route::get('/mem-registration', function () {
//     return view('registration.mem-registration');
// })->name('memReg');

// Route::get('/psa-id-checker', function () {
//     return view('registration.psa-id-checker');
// })->name('psaID-checker');



// Route::get('/emailsend', function (Request $request){
    
//     $email = $request->query('email');
//     $name = $request->query('name');
    
//     Mail::to($email)->send(new MyTestEmail($name));
    
//     return redirect()->route('reg')->with('success', 'Your registration is on process, Dr. ' . $name . '. We will update you in this email, ' . $email);
    
// })->name('emailsend');

//ADMIN SIDE

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified',
// ])->group(function () {
//     Route::get('/admin/dashboard', [DashboardController::class, 'dashboard'])->name('admin');
//     // Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
    
//     Route::get('/admin/viewMemReg', function () {
//         return view('user_account.viewMemReg');
//     })->name('viewMemReg');

//     Route::get('/admin/viewMemReg/download/trainee/{trainee_cert}', function ($trainee_cert){
//         // dd($trainee_cert);
//         $pathToFile = public_path('storage/photos/trainee cert/'. $trainee_cert);
//         return response()->download($pathToFile);
//     });

//     Route::get('/admin/viewMemReg/download/senior/{senior_citizen}', function ($senior_citizen){
//         // dd($trainee_cert);
//         $pathToFile = public_path('storage/photos/senior ids/'. $senior_citizen);
//         return response()->download($pathToFile);
//     });

//     // Route::get('/admin/dashboard/export-excel', function () {
//     //     return Excel::download(new ExcelExport, 'regs.xlsx');
//     // })->name('exportExcel');

//     // Route::get('/admin/dashboard/export-pdf', function (Request $request) {
//     //     $info = $request->query('info');
//     //     // dd($info);
//     //     $pdf = PDF::loadView('exportPDF', $info);
//     //     return $pdf->download('reg.pdf');
//     // })->name('exportPDF');
// });


