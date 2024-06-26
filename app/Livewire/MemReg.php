<?php

namespace App\Livewire;

use App\Models\Members;
use Livewire\Component;
use App\Livewire\Request;
use App\Models\Registration;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class MemReg extends Component
{
    use WithFileUploads;

    public $PSAid="";
    public $last_name;
    public $first_name;
    public $memType;
    public $senior;
    public $gender, $contactNumber, $email, $hospitalName, $hospitalAddress, $middle_initial, $paymentProof, $imgName, $imgSenior, $imgCert;
    public $imgNamePayment, $imgNameSenior = "", $imgNameCert = "";

    public $err = "";
    public $name, $res, $list, $x, $show = false;
    
    public function render()
    {

        $this->last_name=Members::where('member_id_no', $this->PSAid)->value('mem_last_name');
        $this->first_name=Members::where('member_id_no', $this->PSAid)->value('mem_first_name');
        $this->middle_initial=Members::where('member_id_no', $this->PSAid)->value('mem_middle_name');
        $this->gender=Members::where('member_id_no', $this->PSAid)->value('mem_gender');
        $this->memType=Members::where('member_id_no', $this->PSAid)->value('psa_mem_type');

        
        if(strlen($this->name) >= 3){
            // dd(strlen($this->name));
            $this->res=array();
            $this->list=DB::table('members')->where('mem_last_name', 'like', '%'.$this->name )->orWhere('mem_last_name', 'like', $this->name .'%' )->get()->toArray();
            foreach($this->list as $lis){
                $this->res [] = $lis->member_id_no . ' - ' . $lis->mem_last_name . ', ' . $lis->mem_first_name;
            }
        // dd($this->res);
        }
            
        

        // if($this->PSAid == ""){
        //     $this->last_name=Members::where('member_id_no', $this->PSAid)->value('mem_last_name');
        //     $this->first_name=Members::where('member_id_no', $this->PSAid)->value('mem_first_name');
        //     $this->middle_initial=Members::where('member_id_no', $this->PSAid)->value('mem_middle_name');
        //     $this->gender=Members::where('member_id_no', $this->PSAid)->value('mem_gender');
        //     $this->memType=Members::where('member_id_no', $this->PSAid)->value('psa_mem_type');
            
           
        //     // dd($this->list->toArray());
        // }
        return view('livewire.mem-reg');
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

        $err = "";
        if(Registration::where('psa_id', '=', $this->PSAid)->exists()){
            session()->flash('message', 'You are already registered. If you have any concern about your registration, please kindly reply to the email we sent to '. Registration::where('psa_id', '=', $this->PSAid)->value('email') .'. Thank you!');
        }
        else if ( $this->PSAid != "" ||  $this->PSAid != null){
            if(strtolower($this->paymentProof->extension()) == "jpg" || strtolower($this->paymentProof->extension()) == "png" || strtolower($this->paymentProof->extension()) ==  "jpeg" || strtolower($this->paymentProof->extension()) == "gif"){
                // IMG CERT
                if($this->imgCert != null && $this->imgCert != ""){
                    if(strtolower($this->imgCert->extension()) == "jpg" || strtolower($this->imgCert->extension()) == "png" || strtolower($this->imgCert->extension()) ==  "jpeg" || strtolower($this->imgCert->extension()) == "gif"){
                        $imgNameCert = $this->PSAid.' '.$this->last_name . ', ' . $this->first_name . " - Trainee Certification" . '.' . $this->imgCert->extension();
                        $this->imgCert->storeAs('photos/trainee cert', $imgNameCert);
                    }
                    else{
                        $err = "Invalid file format of certificate.";
                        // session()->flash('message', 'Invalid file format of certificate.');
                    }
                }
                else{
                    $imgNameCert = "Not available";
                }
                
                //IMG SENIOR
                if($this->imgSenior != null && $this->imgSenior != ""){
                    if(strtolower($this->imgSenior->extension()) == "jpg" || strtolower($this->imgSenior->extension()) == "png" || strtolower($this->imgSenior->extension()) ==  "jpeg" || strtolower($this->imgSenior->extension()) == "gif"){
                        $imgNameSenior = $this->PSAid.' '.$this->last_name . ', ' . $this->first_name . " - Senior ID" . '.' . $this->imgSenior->extension();
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
                
    
                $imgNamePayment = $this->PSAid.' '.$this->last_name . ', ' . $this->first_name . " - Proof of Payment" . '.' . $this->paymentProof->extension();
                $this->paymentProof->storeAs('photos/proof of payments', $imgNamePayment);
    
    
                if($err != ""){
                    session()->flash('message', $err);
                    $err = "";
                }
                else{
                    Registration::create([
                        'psa_id' => $this->PSAid,
                        'last_name' => $this->last_name,
                        'first_name' => $this->first_name,
                        'middle_name' => $this->middle_initial,
                        'hospital_name' => $this->hospitalName,
                        'hospital_address' => $this->hospitalAddress,
                        'email' => $this->email,
                        'contact_number' => $this->contactNumber,
                        'gender' => $this->gender,
                        'membership' => $this->memType,
            
                        'senior_citizen' => $imgNameSenior,
                        'proof_payment' => $imgNamePayment,
                        'trainee_cert' => $imgNameCert
                    ]);
                    
                    session()->flash('message', 'YOU ARE REGISTERED SUCCESSFULLY, DR ' . $this->last_name . '!');
                    // dd($this->email);
                    return redirect()->route('emailsend', ['email' => $this->email, 'name' => $this->last_name]);
                    return $this->cleanvars();
                }
                
            }
            else{
                session()->flash('message', 'Invalid file format of proof of payment.');
            }
        }
    }

    public function cleanvars(){
        $imgName = "";
        $this->imgCert = "";
        $this->paymentProof = "";
        $this->imgSenior = "";
        $this->PSAid = "";
        $this->hospitalName = "";
        $this->hospitalAddress = "";
        $this->email = "";
        $this->contactNumber = "";
    }
}
