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
        $data = DB::table('registrations')
            ->select('membership', DB::raw('COUNT(*) as total_count'))
            ->groupBy('membership')
            ->get();
        
        // Convert to array of just the counts
        $series = $data->pluck('total_count')->toArray();
        
        $monthly = DB::table('registrations')
            ->select(
                DB::raw("DATE_FORMAT(created_at, '%b %Y') as x"),
                DB::raw("COUNT(*) as y")
            )
            ->groupBy(DB::raw("DATE_FORMAT(created_at, '%b %Y')"))
            ->orderBy(DB::raw("MIN(created_at)"))
            ->get();
            

        return view("user_account.dashboard", compact('series', 'monthly'));
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