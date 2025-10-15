<?php

namespace App\Livewire;

use Livewire\Component;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class BoothController extends Component
{
    public $pharmaName, $PSAid, $showButton = true;
    public function mount ($booth){
        // dd($booth);

        $this->pharmaName = DB::table('pharma')->where('code', $booth)->value('name');
    }

    public function render()
    {
        return view('livewire.booth-controller');
    }

    public function submit(){
        //  dd($this->PSAid);
        if (!DB::table(table: 'members')->where('member_id_no', $this->PSAid)->exists()) {
            
            // $this->workshop=DB::table('pbld')->where('psa_id', $this->PSAid)->value('workshop');

            session()->flash('status', 'danger');
            session()->flash('message', 'PSA Raffle is only for LOCAL DELEGATES and PSA MEMBERS' );
        } 
        else if (DB::table(table: 'booth_reg')->where('psa_id', $this->PSAid)->where('booth', $this->pharmaName)->exists()){
            session()->flash('status', 'warning');
            session()->flash('message', 'You are already registered in this booth: ' . "(" . DB::table('booth_reg')->where('psa_id', $this->PSAid)->value('name'). ")" );
        }
        else 
        {
            // dd($this->station);
            DB::table('booth_reg')->insert([
                'psa_id' => $this->PSAid,
                'name' => DB::table('members')->select(DB::raw("CONCAT(mem_first_name, ' ', mem_last_name) as name"))->where('member_id_no', $this->PSAid)->value('name'),
                'mem_type' => null,
                'booth' => $this->pharmaName,

                'created_at' => Carbon::now(),  // Use Carbon to get the current timestamp
            ]);

            
            return redirect()->route('sponsors')->with('success', 'You have successfully registered to Booth '. $this->pharmaName .', Dr. ' . DB::table('members')->select(DB::raw("CONCAT(mem_first_name, ' ', mem_last_name) as name"))->where('member_id_no', $this->PSAid)->value('name'));
            // session()->flash('status', 'success');
            // session()->flash('message', "You have successfully registered, '" . $this->pharmaName);

            

            // return redirect()->route('reg')->with('success', "You have successfully registered for the PBLD session, '" . $this->day2 . "', " . ' Dr. '. $this->first_name ." " . $this->last_name);
        }
    }
    public function cleanvars(){
        $this->PSAid="";
        $this->last_name="";
        $this->pharmaName="";
    }
}
