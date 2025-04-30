<?php

use App\Livewire\MemReg;

use App\Models\Speakers;
use App\Mail\MyTestEmail;



use App\Mail\ApprovedEmail;
use Spatie\Sitemap\Sitemap;
use App\Exports\ExcelExport;
use App\Livewire\ViewMemReg;
use App\Models\Registration;
use Illuminate\Http\Request;
use Spatie\Sitemap\Tags\Url;
use App\Livewire\SpeakerPage;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\SpeakerController;
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
// Route::get('/sitemap.xml', function () {
//     $sitemap = Sitemap::create()
//         ->add(Url::create('/'))
//         ->add(Url::create('/about'))
//         ->add(Url::create('/contact'));

//     return $sitemap->toResponse(request());
// });


//SPEAKERS MY PAGE



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

Route::get('/prelim-program', function () {
    return view('home/pages/prelimProgram');
})->name('prelim');

// Route::get('/organizing-committee', function () {
//     return view('home/pages/orgComPic');
// })->name('orgCom');

Route::get('/speakers', function () {
    return view('home/pages/speakersPic');
})->name('speakers');

Route::get('/contact', function () {
    return view('home/pages/contact');
})->name('contact');

// Route::get('/abstract-important-dates', function () {
//     return view('home/pages/abstract/abstract');
// })->name('abstract');

Route::get('/abstract-submission-guidelines', function () {
    return view('home/pages/abstract/rules');
})->name('rules');

Route::get('/abstract-instructions', function () {
    return view('home/pages/abstract/instruction');
})->name('instruction');

Route::get('/abstract-prizes', function () {
    return view('home/pages/abstract/prizes');
})->name('prizes');

Route::get('/abstract-submit', function () {
    return view('home/pages/abstract/regAbs');
})->name('regabs');

Route::get('/sponsors', function () {
    return view('home/sponsors');
})->name('sponsors');


Route::get('/accommodations', function () {
    return view('home/pages/accommodations');
})->name('accommodations');

Route::get('/registration', function () {
    return view('home/pages/registration-details');
})->name('reg');

Route::get('/local-registration', function () {
    return view('registration.mem-registration');
})->name('memReg');


Route::get('/international-registration', function () {
    // dd("asd");
    return view('registration.non-mem-registration');
})->name('nonMemReg');

// Route::get('/psa-id-checker', function () {
//     return view('registration.psa-id-checker');
// })->name('psaID-checker');



Route::get('/emailsend', function (Request $request){
    
    $email = $request->query('email');
    $name = $request->query('name');
    
    Mail::mailer('smtp')->to($email)->send(new MyTestEmail($name));
    // Mail::mailer('info')->to($email)->send(new MyTestEmail($name));
    return redirect()->route('reg')->with('success', 'Your registration is on process, Dr. ' . $name . '. We will update you in this email, ' . $email . '. Thank you and we hope to see you soon!');
    
})->name('emailsend');


//SPEAKER SIDE
Route::get('/checker', [SpeakerPage::class, 'index'])->name('checker');

//ADMIN SIDE

// Route::get('/admin/dashboard/sending', function (Request $request) {
//     $info = Registration::where('psa_id', $request->query('id'))->get();

//     $email = $request->query('email');
//     $name = $request->query('name');
//     $id = $request->query('id');

//     $pdf = PDF::loadView('barcodePDF', [
//         'info' => $info
//     ])->setPaper('a5', 'landscape');

//     $path = Storage::put('public/storage/uploads/'.  $request->query('id') . '.pdf', $pdf->output());
//     Storage::put($path, $pdf->output());

//     Mail::to($email)->send(new ApprovedEmail($name, $id));

//     Registration::where('psa_id', $id)->update(['status' => 'Approved']);

//     notify()->success( $name . ' has been approved and barcode was already sent!', 'Approval Success!');
//     return redirect()->back();
    
//     // return $pdf->download('testing.pdf');

// })->name('sending');

Route::get('/admin/dashboard', [DashboardController::class, 'dashboard'])->name('admin');
Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');

Route::get('/admin/pendingReg', function () {
    // notify()->success('Laravel Notify is awesome!');
    return view('user_account.pendingReg');
})->name('pendingReg');

Route::get('/admin/approvedReg', function () {
    return view('user_account.approvedReg');
})->name('approvedReg');

Route::get('/admin/viewMemReg', function () {
    return view('user_account.viewMemReg');
})->name('viewMemReg');

Route::get('/admin/viewMemReg/download/trainee/{trainee_cert}', function ($trainee_cert){
    // dd($trainee_cert);
    $pathToFile = public_path('storage/photos/trainee cert/'. $trainee_cert);
    return response()->download($pathToFile);
});

Route::get('/admin/viewMemReg/download/senior/{senior_citizen}', function ($senior_citizen){
    // dd($trainee_cert);
    $pathToFile = public_path('storage/photos/senior ids/'. $senior_citizen);
    return response()->download($pathToFile);
});

Route::get('/download-abstract', function (){
    // dd("hello");
    $pathToFile = public_path('images/abstract/ACA Abstract Submission Template.pptx');
    return response()->download($pathToFile);
})->name('dlabs');


Route::get('/admin/dashboard/export-excel', function () {
    $fileName = 'ACA Registration as of ' . now()->format('m-d-Y_H-i-s') . '.xlsx';
    return Excel::download(new ExcelExport, $fileName);
})->name('exportExcel');



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {

    

    // Route::get('/admin/dashboard/export-pdf', function (Request $request) {
    //     $info = $request->query('info');
    //     // dd($info);
    //     $pdf = PDF::loadView('exportPDF', $info);
    //     return $pdf->download('reg.pdf');
    // })->name('exportPDF');
});
// Route::prefix('speaker')->middleware('guest:speaker')->group(function(){
//     Route::get('register', [SpeakerController::class, 'regCreate'])->name('speaker_register');
//     Route::post('register', [SpeakerController::class, 'regStore']);


//     Route::get('login', [SpeakerController::class, 'logCreate'])->name('speaker_login');
//     Route::get('login', [SpeakerController::class, 'logStore']);
// });

// Route::prefix('speaker')->middleware('auth:speaker')->group(function(){
//     // Route::get('login', [SpeakerController::class, 'login'])->name('speaker_login');
//     // Route::post('login', [SpeakerController::class, 'store']);
// });

