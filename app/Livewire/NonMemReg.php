<?php

namespace App\Livewire;

use Carbon\Carbon;
use App\Models\Members;
use Livewire\Component;
use App\Livewire\Request;
use App\Models\Registration;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class NonMemReg extends Component
{
    use WithFileUploads;

    public $last_name;
    public $first_name;
    public $memType;
    public $senior;
    public $gender, $contactNumber, $email, $hospitalName, $hospitalAddress, $middle_initial, $paymentProof, $imgName, $imgSenior, $imgCert;
    public $imgNamePayment, $imgNameSenior = "", $imgNameCert = "Not available";
    public $regType, $country;

    public $err = "";
    public $name, $res, $list, $x, $show = false;
    
    public function render()
    {
        return view('livewire.non-mem-reg');
    }
    public function showChecker(){
        // dd("checker");
        if($this->show)
            $this->show = false;
        else
            $this->show = true; 
    }
    public function checker(){
        $this->res=array();
        
        $this->list=DB::table('members')->where('mem_last_name', 'like', '%'.$this->name )->orWhere('mem_last_name', 'like', $this->name .'%' )->get()->toArray();
        foreach($this->list as $lis){
            $this->res [] = $lis->member_id_no . ' - ' . $lis->mem_last_name . ', ' . $lis->mem_first_name;
        }
    }

    public function submit (){
        if($this->country == "Brunei" || $this->country == "Cambodia" || $this->country == "Indonesia" || $this->country == "Laos" || $this->country == "Malaysia" || 
        $this->country == "Myanmar" || $this->country == "Singapore" || $this->country == "Thailand" || $this->country == "Vietnam"){

            $this->memType = "FD-AM";
        }
        else{
            $this->memType = "FD-NM";
        }

        // dd(ucfirst($this->last_name));
        $date = Carbon::now()->format('mdy - his');
        // dd($date->toDateTimeString());
        $err = "";
        if( $this->paymentProof == null){
            session()->flash('message', 'Invalid file format of proof of payment. Please try refreshing the page');
        }
        else if(strtolower($this->paymentProof->extension()) == "heic" || strtolower($this->paymentProof->extension()) == "jpg" || strtolower($this->paymentProof->extension()) == "png" || strtolower($this->paymentProof->extension()) ==  "jpeg" || strtolower($this->paymentProof->extension()) == "gif"){
            //IMG SENIOR
            // dd($this->senior);
            if($this->imgSenior != null && $this->imgSenior != "" && $this->senior == "yesSen"){
                if(strtolower($this->imgSenior->extension()) == "jpg" || strtolower($this->imgSenior->extension()) == "png" || strtolower($this->imgSenior->extension()) ==  "jpeg" || strtolower($this->imgSenior->extension()) == "gif"){
                    $imgNameSenior = $this->last_name .' '. $this->first_name . " - Senior ID " . $date . '.' . $this->imgSenior->extension();
                    $this->imgSenior->storeAs('photos/senior ids', $imgNameSenior);
                }
                else{
                    $err = "Invalid file format of senior id.";
                    // session()->flash('message', 'Invalid file format of senior id.');
                }
            }
            else{
                $imgNameSenior = "Not available";
            }
            // dd($date);
            $imgNamePayment = $this->last_name .' '. $this->first_name . " - Proof of Payment " . $date .'.' . $this->paymentProof->extension();
            $this->paymentProof->storeAs('photos/proof of payments', $imgNamePayment);

            if($err != ""){
                session()->flash('message', $err);
                $err = "";
            }
            else{
                Registration::create([
                    'psa_id' => '0000',
                    'prc_number' => '0',
                    'last_name' => ucfirst($this->last_name),
                    'first_name' => ucfirst($this->first_name),
                    'middle_name' => ucfirst($this->middle_initial),
                    'reg_type' => $this->regType,
                    'hospital_name' => $this->hospitalName,
                    'hospital_address' => $this->hospitalAddress,
                    'email' => $this->email,
                    'contact_number' => $this->contactNumber,
                    'gender' => $this->gender,
                    'membership' => $this->memType,
                    'status' => 'Pending',
                    'country' => $this->country,
        
                    'senior_citizen' => $imgNameSenior,
                    'proof_payment' => $imgNamePayment,
                    'trainee_cert' => 'Not available'
                ]);
                
                session()->flash('message', 'YOU ARE REGISTERED SUCCESSFULLY, DR ' . $this->last_name . '!');
                // dd($this->email);
                
                return redirect()->route('emailsend', ['email' => $this->email, 'name' => ucfirst($this->last_name)]);
                // sleep(seconds: 3);
                return $this->cleanvars();
                
            }
        }
        else{
            session()->flash('message', 'Invalid file format of proof of payment. Please try refreshing the page.');
        }
    }

    public function cleanvars(){
        
        $imgName = "";
        $this->imgCert = "";
        $this->paymentProof = "";
        $this->imgSenior = "";
        $this->hospitalName = "";
        $this->hospitalAddress = "";
        $this->email = "";
        $this->contactNumber = "";
    }
}
