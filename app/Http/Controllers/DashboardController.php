<?php

namespace App\Http\Controllers;


use App\Exports\ExcelExport;
use App\Models\Registration;
use App\Models\PaymentHistory;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;


class DashboardController extends Controller
{
    public $re, $info;

    public function dashboard(){
        
        // $userType = Auth()->user()->userType;
        // if($userType != 'admin'){
        //     return view('user_account.viewMemReg');
        // }
        return view("user_account.dashboard");
    }
    public function viewMemReg (){
        // $reg = Registration::all()->orderBy('id');
        $reg = DB::table('registrations')->orderBy('id', 'DESC')->get();
        
        // dd($reg->toArray());
        return view ("user_account.viewMemReg", ['reg' => $reg]);
    }

    public function exportExcel(){
        // dd("working");
        return Excel::download(new ExcelExport, 'export-excel.xlsx');
    }

    
}