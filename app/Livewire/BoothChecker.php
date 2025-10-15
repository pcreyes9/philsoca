<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

class BoothChecker extends Component
{
    public $PSAid, $visited, $non, $name;
    public function render()
    {
        $this->visited = DB::table('booth_reg')->select('id','booth')->where('psa_id', $this->PSAid)->orderBy('id', 'DESC')->get();
        $this->name = DB::table('booth_reg')->where('psa_id', $this->PSAid)->value('name');
        
        $this->non = DB::table('pharma')
        ->select('id','name')
        ->whereNotIn('name', function($query) {
            $query->select('booth')
                ->from('booth_reg')
                ->where('psa_id', $this->PSAid);
        })
        ->orderBy('id', 'ASC')
        ->get();
        // dd($this->visited);
        return view('livewire.booth-checker');
    }
}
