<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class PharmaController extends Controller
{

    public $pharmaName;

    public function checkin($booth)
    {
        // dd($booth);
        $pharmaName = DB::table('pharma')->where('code', $booth)->value('name');
        // dd($pharmaName);


        return view('registration.boothreg', compact('pharmaName'));
    }
}
