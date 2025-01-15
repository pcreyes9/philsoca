<?php

namespace App\Livewire;

use Livewire\Component;
use DNS1D;
use DNS2D;
use App\Models\Registration;
use Livewire\WithPagination;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\DB;

class PendingReg extends Component
{
    use WithPagination;
    public $barcode, $from, $to, $sort ="regNew", $sortName="Registration ID";

    public function render()
    {
        if($this->sort == 'regNew'){
            $reg = Registration::where('status', 'Pending')->orderBy('id', 'DESC')->paginate(10);
            $this->sortName="Registration ID (newest)";
        }
        else if($this->sort == 'regOld'){
            $reg = Registration::orderBy('id', 'ASC')->paginate(10);
            $this->sortName="Registration ID (oldest)";
        }
        else if($this->sort == 'psaIDNew'){
            $reg = Registration::orderBy('psa_id', 'DESC')->paginate(10);
            $this->sortName="PSA ID (newest)";
        }
        else if($this->sort == 'psaIDOld'){
            $reg = Registration::orderBy('psa_id', 'ASC')->paginate(10);
            $this->sortName="PSA ID (oldest)";
        }
        else if ($this->sort == 'dateNew'){
            $reg = Registration::orderBy('created_at', 'DESC')->paginate(10);
            $this->sortName="Date of Registration (newest)";
        }
        else if ($this->sort == 'dateOld'){
            $reg = Registration::orderBy('created_at', 'ASC')->paginate(10);
            $this->sortName="Date of Registration (oldest)";
        }

        return view('livewire.pending-reg',  ['reg' => $reg]);
    }

    public function exportPDF(){
        $info = Registration::where('id', '>=' , $this->from)->where('id', '<=' , $this->to)->get();
        dd($info);
        $pdf = Pdf::loadView('exportPDF', [
            'info' => $info
        ]);
        return response()->streamDownload(function () use ($pdf) { echo $pdf->stream(); }, 'Registration ID ' . $this->from . ' - ' . $this->to .'.pdf');
        return redirect()->back();
    }

    public function barcodePDF(){
        $info = Registration::where('id', $this->id)->get();
        
        $pdf = Pdf::loadView('barcodePDF', [
            'info' => $info
        ]);

        Storage::put('public/storage/uploads/'. $info->psa_id . 'pdf', $pdf->output());
    }
}
