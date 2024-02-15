<?php

namespace App\Http\Controllers;

use App\Models\Ledger;
use App\Models\Members;
use Illuminate\Http\Request;
use App\Models\PaymentHistory;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public $ledger, $info;

    public function dashboard(){
        
        $id = Auth::user()->psa_id;
        $info = Members::where('id', Auth::user()->psa_id)->get();

        // dd($info->toArray());
        return view("user_account.dashboard", [
            'info' =>$info
        ]);
    }

    public function contactInfo(){
        $info = Members::where('id', Auth::user()->psa_id)->get();

        // dd("contactInfo");
        return view("user_account.contactInfo", [
            'info' =>$info
        ]);
    }


    public function ledger(){

        $ledger = Ledger::where('member_id_no', Auth::user()->psa_id)->orderBy('fiscal_year', 'desc')->get();

        // dd($ledger->toArray());
        return view("user_account.ledger", [
            'ledger' => $ledger
        ]);
    }
    public function paymentHistory(){

        $ledger = PaymentHistory::select(DB::raw('payment_date, payment_type, or_no, payment_ref_no, SUM(amount_due) as amount'))
        ->where('member_id_no', Auth::user()->psa_id)
        ->orderBy('fiscal_year', 'desc')
        ->groupBy('payment_date', 'payment_type', 'or_no','payment_ref_no')
        ->get();

        // dd(Auth::user()->psa_id);
        return view("user_account.payment-history", [
            'ledger' => $ledger
        ]);
    }
}
