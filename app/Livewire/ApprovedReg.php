<?php

namespace App\Livewire;

use DNS1D;
use DNS2D;
use Livewire\Component;
use App\Models\Registration;
use Illuminate\Http\Request;
use Livewire\WithPagination;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\DB;

class ApprovedReg extends Component
{
    use WithPagination;
    public $barcode, $from, $to, $sort ="dateNew", $sortName="Approved Date (latest)";

    public function render()
    {
        if($this->sort == 'regNew'){
            $reg = Registration::where('status', 'Approved')->orderBy('id', 'DESC')->paginate(30);
            $this->sortName="Registration ID (newest)";
        }
        else if($this->sort == 'regOld'){
            $reg = Registration::where('status', 'Approved')->orderBy('id', 'ASC')->paginate(30);
            $this->sortName="Registration ID (oldest)";
        }
        else if($this->sort == 'psaIDNew'){
            $reg = Registration::where('status', 'Approved')->orderBy('psa_id', 'DESC')->paginate(30);
            $this->sortName="PSA ID (newest)";
        }
        else if($this->sort == 'psaIDOld'){
            $reg = Registration::where('status', 'Approved')->orderBy('psa_id', 'ASC')->paginate(30);
            $this->sortName="PSA ID (oldest)";
        }
        else if ($this->sort == 'dateNew'){
            $reg = Registration::where('status', 'Approved')->orderBy('updated_at', 'DESC')->paginate(30);
            $this->sortName="Approved Date (latest)";
        }
        else if ($this->sort == 'dateOld'){
            $reg = Registration::where('status', 'Approved')->orderBy('updated_at', 'ASC')->paginate(30);
            $this->sortName="Approved Date (oldest)";
        }

        return view('livewire.approved-reg',  ['reg' => $reg]);
    }

    public function exportPDF(){
        $info = Registration::where('id', '>=' , $this->from)->where('id', '<=' , $this->to)->get();
        // dd($info);
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

    public function statusCheck($id){
        // dd("gea");
        Registration::where('psa_id', $id)->update(['status' => 'Pending']);
        return redirect(request()->header('Referer'));
        // return back(); 
    }

    public function deleteReg($id){
        Registration::where('psa_id', $id)->update(['status' => 'Deleted']);
        return redirect(request()->header('Referer'));
    }
}
