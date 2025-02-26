<?php

namespace App\Livewire;

use Livewire\Component;
use DNS1D;
use DNS2D;
use App\Models\Registration;
use Livewire\WithPagination;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\DB;
use App\Mail\ApprovedEmail;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Mail;



class ViewMemReg extends Component
{
    use WithPagination;
    public $barcode, $from, $to, $sort ="regNew", $sortName="Registration ID";

    public function render()
    {
        if($this->sort == 'regNew'){
            $reg = Registration::orderBy('id', 'DESC')->simplePaginate(10);
            $this->sortName="Registration ID (newest)";
        }
        else if($this->sort == 'regOld'){
            $reg = Registration::orderBy('id', 'ASC')->simplePaginate(10);
            $this->sortName="Registration ID (oldest)";
        }
        else if($this->sort == 'psaIDNew'){
            $reg = Registration::orderBy('psa_id', 'DESC')->simplePaginate(10);
            $this->sortName="PSA ID (newest)";
        }
        else if($this->sort == 'psaIDOld'){
            $reg = Registration::orderBy('psa_id', 'ASC')->simplePaginate(10);
            $this->sortName="PSA ID (oldest)";
        }
        else if ($this->sort == 'dateNew'){
            $reg = Registration::orderBy('created_at', 'DESC')->simplePaginate(10);
            $this->sortName="Date of Registration (newest)";
        }
        else if ($this->sort == 'dateOld'){
            $reg = Registration::orderBy('created_at', 'ASC')->simplePaginate(10);
            $this->sortName="Date of Registration (oldest)";
        }

        $barcode = DNS1D::getBarcodeHTML('123456789', 'C128'); 
        // dd($barcode);
        if ($barcode === false) {
            dd("Failed to generate barcode. Check your input.") ;
        }

        return view('livewire.view-mem-reg',  ['reg' => $reg, 'barcode' => $barcode]);
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

    public function approval ($id){
        notify()->success('Laravel Notify is awesome!');
        // dd($id);
        // return redirect()->back();
        
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

    public function recoverReg($id){
        Registration::where('psa_id', $id)->update(['status' => 'Pending']);
        return redirect(request()->header('Referer'));
    }

    public function emailSend ($id){
        $info = Registration::where('psa_id', $id)->first();
        // dd($info->psa_id); 


        $pdf = PDF::loadView('barcodePDF', [
            'info' => $info
        ])->setPaper('a5', 'landscape');
    
        $path = Storage::put('public/storage/uploads/'.  $info->psa_id . '.pdf', $pdf->output());
        Storage::put($path, $pdf->output());
        
        Mail::to($info->email)->send(new ApprovedEmail($info->last_name, $info->psa_id));
    
        Registration::where('psa_id', $info->psa_id)->update(['status' => 'Approved']);
    

        notify()->success( $info->name . ' has been approved and barcode was already sent!', 'Approval Success!');
        // return redirect()->back();

        // $this->emit('notifySuccess', 'User has been approved and barcode sent!');
    }
}
