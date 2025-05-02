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
        $startDate = '2025-01-01';  // Adjust the start date as needed
        $endDate = '2025-05-01';  // Current date
        
        $data = DB::table('registrations')
            ->select('membership', DB::raw('COUNT(*) as total_count'))
            ->groupBy('membership')
            ->get();
        
        // Convert to array of just the counts
        $series = $data->pluck('total_count')->toArray();
        
        $RM = DB::table(DB::raw("(
            WITH RECURSIVE month_range AS (
                SELECT CAST('$startDate' AS DATE) AS month_start
                UNION ALL
                SELECT month_start + INTERVAL 1 MONTH
                FROM month_range
                WHERE month_start < CAST('$endDate' AS DATE)
            )
            SELECT 
                DATE_FORMAT(m.month_start, '%b %Y') as x, 
                COUNT(r.created_at) as y
            FROM month_range m
            LEFT JOIN registrations r 
                ON DATE_FORMAT(r.created_at, '%Y-%m') = DATE_FORMAT(m.month_start, '%Y-%m')
                AND r.membership = 'RM'
            GROUP BY m.month_start
            ORDER BY m.month_start
            ) as RM"))
            ->get();
            
        $TM = DB::table(DB::raw("(
            WITH RECURSIVE month_range AS (
                SELECT CAST('$startDate' AS DATE) AS month_start
                UNION ALL
                SELECT month_start + INTERVAL 1 MONTH
                FROM month_range
                WHERE month_start < CAST('$endDate' AS DATE)
            )
            SELECT 
                DATE_FORMAT(m.month_start, '%b %Y') as x, 
                COUNT(r.created_at) as y
            FROM month_range m
            LEFT JOIN registrations r 
                ON DATE_FORMAT(r.created_at, '%Y-%m') = DATE_FORMAT(m.month_start, '%Y-%m')
                AND r.membership = 'TM'
            GROUP BY m.month_start
            ORDER BY m.month_start
        ) as TM"))
            ->get();

            
        $LM = DB::table(DB::raw("(
            WITH RECURSIVE month_range AS (
                SELECT CAST('$startDate' AS DATE) AS month_start
                UNION ALL
                SELECT month_start + INTERVAL 1 MONTH
                FROM month_range
                WHERE month_start < CAST('$endDate' AS DATE)
            )
            SELECT 
                DATE_FORMAT(m.month_start, '%b %Y') as x, 
                COUNT(r.created_at) as y
            FROM month_range m
            LEFT JOIN registrations r 
                ON DATE_FORMAT(r.created_at, '%Y-%m') = DATE_FORMAT(m.month_start, '%Y-%m')
                AND r.membership = 'LM'
            GROUP BY m.month_start
            ORDER BY m.month_start
        ) as LM"))
            ->get();
            
        $FDA = DB::table(DB::raw("(
            WITH RECURSIVE month_range AS (
                SELECT CAST('$startDate' AS DATE) AS month_start
                UNION ALL
                SELECT month_start + INTERVAL 1 MONTH
                FROM month_range
                WHERE month_start < CAST('$endDate' AS DATE)
            )
            SELECT 
                DATE_FORMAT(m.month_start, '%b %Y') as x, 
                COUNT(r.created_at) as y
            FROM month_range m
            LEFT JOIN registrations r 
                ON DATE_FORMAT(r.created_at, '%Y-%m') = DATE_FORMAT(m.month_start, '%Y-%m')
                AND r.membership = 'FD-AM'
            GROUP BY m.month_start
            ORDER BY m.month_start
        ) as FDA"))
            ->get();
            
        
        $FDN = DB::table(DB::raw("(
            WITH RECURSIVE month_range AS (
                SELECT CAST('$startDate' AS DATE) AS month_start
                UNION ALL
                SELECT month_start + INTERVAL 1 MONTH
                FROM month_range
                WHERE month_start < CAST('$endDate' AS DATE)
            )
            SELECT 
                DATE_FORMAT(m.month_start, '%b %Y') as x, 
                COUNT(r.created_at) as y
            FROM month_range m
            LEFT JOIN registrations r 
                ON DATE_FORMAT(r.created_at, '%Y-%m') = DATE_FORMAT(m.month_start, '%Y-%m')
                AND r.membership = 'FD-NM'
            GROUP BY m.month_start
            ORDER BY m.month_start
        ) as FDN"))
            ->get();

            
        // dd($FDN);
            

        return view("user_account.dashboard", compact('series', 'RM', 'TM', 'LM', 'FDA', 'FDN'));
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