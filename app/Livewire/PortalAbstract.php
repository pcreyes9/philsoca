<?php

namespace App\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;
use App\Exports\ExcelExport;
use Illuminate\Support\Facades\Artisan;

class PortalAbstract extends Component

{
    public function render()
    {
        $reg =  DB::table('abstract')->Paginate(30);
        // dd($reg);
        return view('livewire.portal-abstract', ['reg' => $reg]);
    }

    public function export(){
        // Excel::download(new ExcelExport, 'regs.xlsx');
    }

    public function download($fileName, $category){
        // dd($category);
        $pathToFile = public_path('storage/abstract/'. $category) . '/' . $fileName;
        return response()->download($pathToFile);
    }
}
