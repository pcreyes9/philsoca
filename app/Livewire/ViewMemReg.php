<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Registration;
use Livewire\WithPagination;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade\PDF;


class ViewMemReg extends Component
{
    use WithPagination;
    public $from, $to, $sort ="id";

    public function render()
    {
        // $reg = DB::table('registrations')->orderBy('id', 'DESC')->get()->paginate(5);
        $reg = Registration::orderBy($this->sort, 'DESC')->paginate(10);
        
        return view('livewire.view-mem-reg',  ['reg' => $reg]);

    }

    public function exportPDF(){
        $info = Registration::where('id', '>=' , $this->from)->where('id', '<=' , $this->to)->get();
        $pdf = PDF::loadView('exportPDF', [
            'info' => $info
        ]);
        return response()->streamDownload(function () use ($pdf) { echo $pdf->stream(); }, 'Registration ID ' . $this->from . ' - ' . $this->to .'.pdf');
        return redirect()->back();
    }
}
