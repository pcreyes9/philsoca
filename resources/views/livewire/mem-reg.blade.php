<form wire:submit.prevent="submit">
    {{-- <div wire:loading>LOADING...</div> --}}
    @csrf
    <div class="mb-5">
        <button type="button" class="btn btn-dark solid mb-2" wire:click="showChecker" style="box-shadow: 2px 2px 3px gray; background-color: #ac071a; color: white; font-weight: bold">PSA ID NO. Checker</button>
        @if ($show)
            <div class="row mt-3">
                <div class="col-md-4">
                    <div class="form-group">
                        <label style=" font-weight: 750; font-size: medium; color:black;">Enter Last Name:</label>
                        <input style="box-shadow: 2pAx 2px 3px gray; background-color: #000066; color: white; font-weight: bold" class="form-control form-control-subject" placeholder="" wire:model.live='name'>
                    </div>
                    <button type="button" class="btn btn-primary solid blank mb-3" wire:click="checker" style="background: #d6cb00; color: #000066">Check</button>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                    <label style=" font-weight: 750; font-size: medium; color:white;">PSA ID No.</label>
                    @if ($this->res != null)
                        <textarea class="form-control " rows="6" style="box-shadow: 2px 2px 3px gray; background-color: white; color: black; font-weight: bold; text-align:left;" id="message-text" readonly>{{ implode("\n", $res)}}</textarea>
                    @endif
                    </div>
                </div>
            </div>
        @endif
    </div>
    <div class="error-container"></div>
    <div class="row mt-5 p-3">
        <div class="col-md-2">
            <div class="form-group">
                <label style=" font-weight: 750; font-size: medium; color: black">PSA ID No.</label>
                <input style="box-shadow: 2px 2px 3px gray; background-color: #000066; color: white; font-weight: bold" class="form-control form-control-name" name="psa_id" required autofocus autocomplete="psa_id" type="number" required wire:model.live='PSAid' value={{$PSAid}}>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label style=" font-weight: 750; font-size: medium; color: black">Last Name </label>
                <input style="box-shadow: 2px 2px 3px gray; background-color: #000066; color: white;  font-weight: bold;s" class="form-control form-control-name" name="name" id="name" placeholder="" readonly type="text" wire:model="last_name" value={{$last_name}} >
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label style=" font-weight: 750; font-size: medium; color: black">First Name</label>
                <input style="box-shadow: 2px 2px 3px gray; background-color: #000066; color: white;; font-weight: bold;s" class="form-control form-control-email" name="text" id="text" placeholder="" readonly type="text" wire:model="first_name" value={{$first_name}}>
            </div>
        </div>
        <div class="col-md-2">
            <div class="form-group">
                <label style=" font-weight: 750; font-size: medium; color: black">Middle Initial</label>
                <input style="box-shadow: 2px 2px 3px gray; background-color: #000066; color: white;; font-weight: bold;s" class="form-control form-control-email" name="text" type="text"  id="text" placeholder=""  readonly wire:model="middle_initial" value={{$middle_initial}}  >
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
            <label style=" font-weight: 750; font-size: medium; color: black">Name of Hospital</label>
            <input style="box-shadow: 2px 2px 3px gray; background-color: #000066; color: white;; font-weight: bold;s" class="form-control form-control-subject" name="subject" id="subject" wire:model="hospitalName" placeholder="" required>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
            <label style=" font-weight: 750; font-size: medium; color: black">Address of Hospital</label>
            <input style="box-shadow: 2px 2px 3px gray; background-color: #000066; color: white;; font-weight: bold;s" class="form-control form-control-subject" name="subject" id="subject" wire:model="hospitalAddress" placeholder="" required>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
            <label style=" font-weight: 750; font-size: medium; color: black">Email</label>
            <input style="box-shadow: 2px 2px 3px gray; background-color: #000066; color: white;; font-weight: bold;s" class="form-control form-control-subject" type="email" name="subject" id="subject" wire:model="email" placeholder="" required>
            </div>
        </div>
        <div class="col-md-4">
        <div class="form-group">
                <label style=" font-weight: 750; font-size: medium; color: black">Contact Number</label>
                <input style="box-shadow: 2px 2px 3px gray; background-color: #000066; color: white; font-weight: bold;s" class="form-control form-control-subject" type="number" name="subject" id="subject" wire:model="contactNumber" placeholder="" required>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label style=" font-weight: 750; font-size: medium; color: black">PRC Number (7 digits)</label>
                <input style="box-shadow: 2px 2px 3px gray; background-color: #000066; color: white; font-weight: bold;s" class="form-control form-control-subject" type="number" name="subject" id="subject" wire:model="prcNumber" placeholder="" required>
            </div>
        </div>
        
            <div class="col-md-4">
                <label style=" font-weight: 750; font-size: medium; color: black">Membership Type</label><br>
                {{-- <div class="pl-5 ml-5 text-left"> --}}
                    <div class="form-check">
                        <input style="color: black" class="form-check-input" type="radio" readonly name="radioMem" value = "regMem" id="regMem" disabled required>
                        @if ($memType == "RM")
                            <input style="color: black" class="form-check-input" type="radio" readonly name="radioMem" value = "regMem" id="regMem" required checked>
                        @endif
                        <label style="color: #000066" class="form-check-label" for="regMem">
                            Regular Member
                        </label>
                    </div>
                    <div class="form-check">
                        <input style="color: black" class="form-check-input" type="radio" readonly  name="radioMem" value = "lifeMem" id="lifeMem" disabled required>
                        @if ($memType == "LM")
                            <input style="color: black" class="form-check-input" type="radio" readonly  name="radioMem" value = "lifeMem" id="lifeMem" required checked>
                        @endif
                        <label style="color: #000066" class="form-check-label" for="lifeMem">
                            Life Member
                        </label>
                    </div>
                    <div class="form-check">
                        <input style="color: black" class="form-check-input" type="radio" readonly name="radioMem" value = "trainMem" id="trainMem" disabled required>
                        @if ($memType == "TM")
                            <input style="color: black" class="form-check-input" type="radio" readonly name="radioMem" value = "trainMem" id="trainMem" required checked>
                        @endif
                        <label style="color: #000066" class="form-check-label" for="trainMem">
                            Trainee Member
                        </label>
                    </div>
                {{-- </div> --}}
            </div>

            @if ($memType != 'TM')
                <div class="col-md-4 mt-4">
                    <label style=" font-weight: 750; font-size: medium; color:black">Senior Citizen/PWD ID</label><br>
                    <div class="form-check">
                        <input style="color: black" class="form-check-input" type="radio" name="radioSenior" value = "yesSen" id="yesSen" wire:model.live='senior' required>
                        <label style="color: #000066" class="form-check-label" for="yesSen">
                            Yes
                        </label>
                    </div>
                    <div class="form-check">
                        <input style="color: black" class="form-check-input" type="radio" name="radioSenior" value = "noSen"  id="noSen" wire:model.live='senior'  required>
                        <label style="color: #000066" class="form-check-label" for="noSen">
                            No
                        </label>
                    </div>
                </div>
            @endif            
        
            @if ( $senior  == 'yesSen' && $memType != 'TM')
                <div class="col-md-4 mt-4">
                    <label style=" font-weight: 750; font-size: medium; color: black">Senior Citizen ID</label><br>
                    <input style="color: black" type="file" wire:model="imgSenior" required>
                    @error('paymentProof') <span class="error">{{ $message }}</span> @enderror
                </div>
            @endif

            @if ($memType == 'TM')
                <div class="col-md-4 mt-4">
                    <label style=" font-weight: 750; font-size: medium; color:black">PWD</label><br>
                    <div class="form-check">
                        <input style="color: black" class="form-check-input" type="radio" name="radioSenior" value = "yesSen" id="yesSen" wire:model.live='senior' required>
                        <label style="color: black" class="form-check-label" for="yesSen">
                            Yes
                        </label>
                    </div>
                    <div class="form-check">
                        <input style="color: black" class="form-check-input" type="radio" name="radioSenior" value = "noSen"  id="noSen" wire:model.live='senior'  required>
                        <label style="color: black" class="form-check-label" for="noSen">
                            No
                        </label>
                    </div>
                </div>
            {{-- <div class="col-md-4 mt-4">
                <label style=" font-weight: 750; font-size: medium; color: black">Rate to be paid </label><br>
                
                @if ($memType == "RM" && $senior == "yesSen")
                    <label style=" font-weight: 750; font-size: medium; color: black">PWD/Senior Citizen: ₱12,800</label><br>
                @elseif ($memType == "TM" && $senior == "yesSen")
                    <label style=" font-weight: 750; font-size: medium; color: black">PWD/Senior Citizen: ₱12,800</label><br>
                @elseif ( $memType == "RM")
                    <label style=" font-weight: 750; font-size: medium; color: black">Regular Member: ₱16,000</label><br>
                @elseif ($memType == "TM")
                    <label style=" font-weight: 750; font-size: medium; color: black">Resident/Trainee Member: ₱14,000</label><br>
                @elseif ($memType ==  "LM")
                    <label style=" font-weight: 750; font-size: medium; color: black">Resident/Trainee Member: ₱10,000</label><br>
                @endif
                <label style="font-style: italic; font-weight: 300; font-size: normal; color: black">Early Bird (Jan 20 - Apr 30, 2025)</label><br>
            </div> --}}
                @if ( $senior  == 'yesSen')
                    <div class="col-md-4 mt-4">
                        <label style=" font-weight: 750; font-size: medium; color: black">PWD ID</label><br>
                        <input style="color: black" type="file" wire:model="imgSenior" required>
                        @error('paymentProof') <span class="error">{{ $message }}</span> @enderror
                    </div>
                @endif
                {{-- <div class="col-md-4 mt-4">
                    <label style=" font-weight: 750; font-size: medium;  color:black">Certificate of Institution</label><br>
                    <input style="color: black" type="file" wire:model="imgCert" required>
                </div> --}}
            @endif
            <div class="col-md-4 mt-4">
                <label style=" font-weight: 750; font-size: medium; color:black">Proof of Payment</label><br>
                <input style="color: black" type="file" wire:model="paymentProof" required>
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

        <p class="para-head fd mb-2">Bank Details</p>
        <p class="hotel-p fd">
            {{-- <strong>Peso Account</strong> <br> --}}
            Security Bank Account Number:<strong> 0000039-8075-39</strong> <br> Account name: <strong>Philippine Society of Anesthesiologists, Inc.</strong>
        </p>
        
        <div class="text-right"><br>
            <button wire:loading.attr="disabled" type="submit" class="btn btn-primary solid blank" style="background: #000066; color: white">
                {{-- <div class="loader"></div> --}}
                <svg wire:loading xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24"><path fill="currentColor" d="M12,1A11,11,0,1,0,23,12,11,11,0,0,0,12,1Zm0,19a8,8,0,1,1,8-8A8,8,0,0,1,12,20Z" opacity="0.25"/><path fill="currentColor" d="M10.14,1.16a11,11,0,0,0-9,8.92A1.59,1.59,0,0,0,2.46,12,1.52,1.52,0,0,0,4.11,10.7a8,8,0,0,1,6.66-6.61A1.42,1.42,0,0,0,12,2.69h0A1.57,1.57,0,0,0,10.14,1.16Z"><animateTransform attributeName="transform" dur="0.75s" repeatCount="indefinite" type="rotate" values="0 12 12;360 12 12"/></path></svg>
                <div wire:loading.remove>
                    Register
                </div>
            </button>
        </div>
    </div>
</form>









