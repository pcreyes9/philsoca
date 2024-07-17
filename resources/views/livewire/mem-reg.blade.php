
<form wire:submit.prevent="submit">
    
    {{-- <div wire:loading>LOADING...</div> --}}
    @csrf
    <div class="error-container"></div>
    <div class="row">
        <div class="col-md-2">
            <div class="form-group">
                <label style=" font-weight: 750; font-size: medium;" >PSA ID</label>
                <input style="box-shadow: 2px 2px 3px gray; background-color: white; color: black; font-weight: bold;s" class="form-control form-control-name" name="psa_id" required autofocus autocomplete="psa_id" type="number" required  wire:model.live='PSAid' value={{$PSAid}}>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label style=" font-weight: 750; font-size: medium;">Last Name </label>
                <input style="box-shadow: 2px 2px 3px gray; background-color: white; color: black; font-weight: bold;s" class="form-control form-control-name" name="name" id="name" placeholder="" readonly type="text" wire:model="last_name" value={{$last_name}} >
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label style=" font-weight: 750; font-size: medium;">First Name</label>
                <input style="box-shadow: 2px 2px 3px gray; background-color: white; color: black; font-weight: bold;s" class="form-control form-control-email" name="text" id="text" placeholder="" readonly type="text" wire:model="first_name" value={{$first_name}}>
            </div>
        </div>
        <div class="col-md-2">
            <div class="form-group">
                <label style=" font-weight: 750; font-size: medium;">Middle Initial</label>
                <input style="box-shadow: 2px 2px 3px gray; background-color: white; color: black; font-weight: bold;s" class="form-control form-control-email" name="text" type="text"  id="text" placeholder=""  readonly wire:model="middle_initial" value={{$middle_initial}}  >
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
            <label style=" font-weight: 750; font-size: medium;">Name of Hospital</label>
            <input style="box-shadow: 2px 2px 3px gray; background-color: white; color: black; font-weight: bold;s" class="form-control form-control-subject" name="subject" id="subject" wire:model="hospitalName" placeholder="" required>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
            <label style=" font-weight: 750; font-size: medium;">Address of Hospital</label>
            <input style="box-shadow: 2px 2px 3px gray; background-color: white; color: black; font-weight: bold;s" class="form-control form-control-subject" name="subject" id="subject" wire:model="hospitalAddress" placeholder="" required>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
            <label style=" font-weight: 750; font-size: medium;">Email</label>
            <input style="box-shadow: 2px 2px 3px gray; background-color: white; color: black; font-weight: bold;s" class="form-control form-control-subject" type="email" name="subject" id="subject" wire:model="email" placeholder="" required>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
            <label style=" font-weight: 750; font-size: medium;">Contact Number</label>
            <input style="box-shadow: 2px 2px 3px gray; background-color: white; color: black; font-weight: bold;s" class="form-control form-control-subject" type="number" name="subject" id="subject" wire:model="contactNumber" placeholder="" required>
            </div>
        </div>
        <div class="col-md-4">
            <label style=" font-weight: 750; font-size: medium;">Gender</label><br>
            <div class="form-check">
                <input class="form-check-input" type="radio" readonly name="radioGender" value = "male" id="male" disabled required>
                @if ($gender == "Male")
                    <input class="form-check-input" type="radio" readonly name="radioGender" value = "male" id="male" required checked>
                @endif
                <label class="form-check-label" for="male">
                    Male
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" readonly name="radioGender" value = "female" id="female" disabled required>
                @if ($gender == "Female")
                    <input class="form-check-input" type="radio" readonly name="radioGender" value = "female" id="female" required checked>
                @endif
                <label class="form-check-label" for="female">
                    Female
                </label>
                </div>
            </div>
            
            <div class="col-md-4">
                <label style=" font-weight: 750; font-size: medium;">Membership Type</label><br>
                {{-- <div class="pl-5 ml-5 text-left"> --}}
                    <div class="form-check">
                        <input class="form-check-input" type="radio" readonly name="radioMem" value = "regMem" id="regMem" disabled required>
                        @if ($memType == "RM")
                            <input class="form-check-input" type="radio" readonly name="radioMem" value = "regMem" id="regMem" required checked>
                        @endif
                        <label class="form-check-label" for="regMem">
                            Regular Member
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" readonly  name="radioMem" value = "lifeMem" id="lifeMem" disabled required>
                        @if ($memType == "LM")
                            <input class="form-check-input" type="radio" readonly  name="radioMem" value = "lifeMem" id="lifeMem" required checked>
                        @endif
                        <label class="form-check-label" for="lifeMem">
                            Life Member
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" readonly name="radioMem" value = "trainMem" id="trainMem" disabled required>
                        @if ($memType == "TM")
                            <input class="form-check-input" type="radio" readonly name="radioMem" value = "trainMem" id="trainMem" required checked>
                        @endif
                        <label class="form-check-label" for="trainMem">
                            Trainee Member
                        </label>
                    </div>
                {{-- </div> --}}
            </div>
            
            @if ($memType == 'RM')
                <div class="col-md-4">
                    <label style=" font-weight: 750; font-size: medium;">Senior Citizen</label><br>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="radioSenior" value = "yesSen" id="yesSen" wire:model.live='senior' required>
                        <label class="form-check-label" for="yesSen">
                            Yes
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="radioSenior" value = "noSen"  id="noSen" wire:model.live='senior'  required>
                        <label class="form-check-label" for="noSen">
                            No
                        </label>
                    </div>
                </div>
            @endif
        
            @if ( $senior  == 'yesSen' && $memType == 'RM')
                <div class="col-md-4">
                    <label style=" font-weight: 750; font-size: medium;">Senior Citizen ID</label><br>
                    <input type="file" wire:model="imgSenior" required>
                    @error('paymentProof') <span class="error">{{ $message }}</span> @enderror
                </div>
            @endif

            @if ($memType == 'TM')
                <div class="col-md-4">
                    <label style=" font-weight: 750; font-size: medium;">Certificate of Institution</label><br>
                    <input type="file" wire:model="imgCert" required>
                </div>
            @endif
            <div class="col-md-4">
                <label style=" font-weight: 750; font-size: medium;">Proof of Payment</label><br>
                <input type="file" wire:model="paymentProof" required>
                @error('paymentProof') <span class="error">{{ $message }}</span> @enderror
            </div>
            
        </div>
        
        <br>

        @if (session()->has('message'))
            <div class="alert alert-warning">
                {{ session('message') }}
            </div>
        @endif


        {{-- <div class="form-group">
            <label>Message</label>
            <textarea class="form-control form-control-message" name="message" id="message" placeholder="" rows="10" required></textarea>
        </div> --}}
        
        <div class="text-right"><br>
            <button type="button" class="btn btn-dark solid blank" wire:click="showChecker">PSA ID Checker</button>
            <button wire:loading.attr="disabled" type="submit" class="btn btn-primary solid blank" >
                {{-- <div class="loader"></div> --}}
                <svg wire:loading xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24"><path fill="currentColor" d="M12,1A11,11,0,1,0,23,12,11,11,0,0,0,12,1Zm0,19a8,8,0,1,1,8-8A8,8,0,0,1,12,20Z" opacity="0.25"/><path fill="currentColor" d="M10.14,1.16a11,11,0,0,0-9,8.92A1.59,1.59,0,0,0,2.46,12,1.52,1.52,0,0,0,4.11,10.7a8,8,0,0,1,6.66-6.61A1.42,1.42,0,0,0,12,2.69h0A1.57,1.57,0,0,0,10.14,1.16Z"><animateTransform attributeName="transform" dur="0.75s" repeatCount="indefinite" type="rotate" values="0 12 12;360 12 12"/></path></svg>
                <div wire:loading.remove>
                    Register
                </div>
                
            </button>
        </div>
    </div>
    @if ($show)
        <div class="row mt-5">
            <div class="col-md-6">
                <div class="form-group">
                    <label style=" font-weight: 750; font-size: medium;">Enter Last Name:</label>
                    <input style="box-shadow: 2px 2px 3px gray; background-color: white; color: black; font-weight: bold;" class="form-control form-control-subject" placeholder="" wire:model.live='name'>
                </div>
                <button type="button" class="btn btn-primary solid blank mb-3" wire:click="checker">Check</button>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                <label style=" font-weight: 750; font-size: medium;">PSA ID</label>
                @if ($this->res != null)
                    <textarea class="form-control " rows="6" style="box-shadow: 2px 2px 3px gray; background-color: white; color: black; font-weight: bold; text-align:left;" id="message-text" readonly>{{ implode("\n", $res)}}</textarea>
                @endif
                </div>
            </div>
        </div>
    @endif
</form>









