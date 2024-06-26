<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

class PSAIDChecker extends Component
{
    public $name, $list, $res;
    public function render()
    {
        if(strlen($this->name) >= 3){
            // dd(strlen($this->name));
            $this->res=array();
            $this->list=DB::table('members')->where('mem_last_name', 'like', '%'.$this->name )->orWhere('mem_last_name', 'like', $this->name .'%' )->get()->toArray();
            foreach($this->list as $lis){
                $this->res [] = $lis->member_id_no . ' - ' . $lis->mem_last_name . ', ' . $lis->mem_first_name;
            }
        // dd($this->res);
        }
        return view('livewire.p-s-a-i-d-checker');
    }
}
