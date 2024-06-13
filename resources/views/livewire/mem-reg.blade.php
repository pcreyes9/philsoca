<div class="container">
    <form wire:submit.prevent="submit">
        @csrf
        <div class="error-container"></div>
        <div class="row">
            <div class="col-md-2">
                <div class="form-group">
                    <label style=" font-weight: 750; font-size: medium;" >PSA ID</label>
                    <input style="box-shadow: 2px 2px 3px;" class="form-control form-control-name" name="psa_id" required autofocus autocomplete="psa_id" type="number" required  wire:model.live='PSAid' value={{$PSAid}}>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label style=" font-weight: 750; font-size: medium;">Last Name </label>
                    <input style="box-shadow: 2px 2px 3px;" class="form-control form-control-name" name="name" id="name" placeholder="" readonly type="text" wire:model="last_name" value={{$last_name}} >
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label style=" font-weight: 750; font-size: medium;">First Name</label>
                    <input style="box-shadow: 2px 2px 3px;" class="form-control form-control-email" name="text" id="text" placeholder="" readonly type="text" wire:model="first_name" value={{$first_name}}>
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group">
                    <label style=" font-weight: 750; font-size: medium;">Middle Initial</label>
                    <input style="box-shadow: 2px 2px 3px;" class="form-control form-control-email" name="text" id="text" placeholder=""  wire:model="middle_initial" type="text" required >
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                <label style=" font-weight: 750; font-size: medium;">Name of Hospital</label>
                <input style="box-shadow: 2px 2px 3px;" class="form-control form-control-subject" name="subject" id="subject" wire:model="hospitalName" placeholder="" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                <label style=" font-weight: 750; font-size: medium;">Address of Hospital</label>
                <input style="box-shadow: 2px 2px 3px;" class="form-control form-control-subject" name="subject" id="subject" wire:model="hospitalAddress" placeholder="" required>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                <label style=" font-weight: 750; font-size: medium;">Email</label>
                <input style="box-shadow: 2px 2px 3px;" class="form-control form-control-subject" type="email" name="subject" id="subject" wire:model="email" placeholder="" required>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                <label style=" font-weight: 750; font-size: medium;">Contact Number</label>
                <input style="box-shadow: 2px 2px 3px;" class="form-control form-control-subject" type="number" name="subject" id="subject" wire:model="contactNumber" placeholder="" required>
                </div>
            </div>
            <div class="col-md-4">
                <label style=" font-weight: 750; font-size: medium;">Gender</label><br>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="radioGender" value = "male" id="male" wire:model.live="gender" required>
                    <label class="form-check-label" for="male">
                        Male
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="radioGender" value = "female" id="female" wire:model.live="gender" required>
                    <label class="form-check-label" for="female">
                        Female
                    </label>
                    </div>
                </div>
                <div class="col-md-4">
                    <label style=" font-weight: 750; font-size: medium;">Membership Type</label><br>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="radioMem" value = "regMem" id="regMem" wire:model.live="memType" required>
                        <label class="form-check-label" for="regMem">
                        Regular Member
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="radioMem" value = "lifeMem" id="lifeMem" wire:model.live="memType" required>
                        <label class="form-check-label" for="lifeMem">
                        Life Member
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="radioMem" value = "trainMem" id="trainMem" wire:model.live="memType" required>
                        <label class="form-check-label" for="trainMem">
                        Trainee Member
                        </label>
                    </div>
                </div>
                @if ($memType == 'regMem')
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
            
                @if ( $senior  == 'yesSen' && $memType == 'regMem')
                    <div class="col-md-4">
                        <label style=" font-weight: 750; font-size: medium;">Senior Citizen ID</label><br>
                        <input type="file" id="myFile" name="filename" required>
                    </div>
                @endif

                @if ($memType == 'trainMem')
                    <div class="col-md-4">
                        <label style=" font-weight: 750; font-size: medium;">Certificate of Institution</label><br>
                        <input type="file" id="myFile" name="filename" required>
                    </div>
                @endif
                <div class="col-md-4">
                    <label style=" font-weight: 750; font-size: medium;">Proof of Payment</label><br>
                    <input type="file" wire:model="paymentProof" required>
                    @error('paymentProof') <span class="error">{{ $message }}</span> @enderror
                </div>
            </div>


            {{-- <div class="form-group">
                <label>Message</label>
                <textarea class="form-control form-control-message" name="message" id="message" placeholder="" rows="10" required></textarea>
            </div> --}}
            <div class="text-right"><br>
                <button class="btn btn-primary solid blank" type="submit">Register</button>
            </div>
        </div>
    </form>
</div>

