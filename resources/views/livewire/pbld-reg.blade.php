<form wire:submit.prevent="submit">
    @if (session()->has('message'))
        <div class="alert alert-{{ session('status') }}">
            <strong>{{ session('message') }}</strong>
        </div>
    @endif
    @csrf
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
            <div class="col-md-4">
                <div class="form-group">
                <label style=" font-weight: 750; font-size: medium; color: black">Email</label>
                <input style="box-shadow: 2px 2px 3px gray; background-color: #000066; color: white;; font-weight: bold;s" class="form-control form-control-subject" type="email" name="subject" id="subject" readonly wire:model="email" placeholder="" required value={{$email}}>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                <label style=" font-weight: 750; font-size: medium; color: black">Contact Number</label>
                <input style="box-shadow: 2px 2px 3px gray; background-color: #000066; color: white; font-weight: bold;s" class="form-control form-control-subject" type="number" name="subject" id="subject" readonly wire:model="contactNumber" placeholder="" required value={{$contactNumber}}>
                </div>
            </div>
            <div class="col-md-4">
            <div class="form-group">
                <label style=" font-weight: 750; font-size: medium; color: black">PRC Number (7 digits)</label>
                <input style="box-shadow: 2px 2px 3px gray; background-color: #000066; color: white; font-weight: bold;s" class="form-control form-control-subject" type="number" name="subject" id="subject" wire:model="prcNumber" placeholder="" required>
            </div>
        </div>
            <div class="col-md-4 mt-4 text-left">
                <label style="font-weight: 750; font-size: medium; color: black">Day 2</label><br>
                <div class="form-check">
                    <input style="color: #000066" class="form-check-input" type="radio" readonly name="radioGender" value = "Pediatric Airway Management (Pierre-RobIn)" id="Pediatric Airway Management (Pierre-RobIn)" wire:model="day2" required>
                    <label style="color: #000066" class="form-check-label" for="Pediatric Airway Management (Pierre-RobIn)">
                        Pediatric Airway Management (Pierre-RobIn)
                    </label>
                </div>
                <div class="form-check">
                    <input style="color: #000066" class="form-check-input" type="radio" name="radioGender" value = "Hypotensive Patient for Surgery for EXLAP" id="Hypotensive Patient for Surgery for EXLAP" wire:model="day2" required>
                    <label style="color: #000066" class="form-check-label" for="Hypotensive Patient for Surgery for EXLAP">
                        Hypotensive Patient for Surgery for EXLAP
                    </label>
                </div>
                <div class="form-check">
                    <input style="color: #000066" class="form-check-input" type="radio" readonly name="radioGender" value = "Neonatal TIVA" id="Neonatal TIVA" wire:model="day2" required>
                    <label style="color: #000066" class="form-check-label" for="Neonatal TIVA">
                        Neonatal TIVA 
                    </label>
                </div>
                <div class="form-check">
                    <input style="color: #000066" class="form-check-input" type="radio" name="radioGender" value = "Hip Surgery" id="Hip Surgery" wire:model="day2" required>
                    <label style="color: #000066" class="form-check-label" for="Hip Surgery">
                        Hip Surgery
                    </label>
                </div>
                <div class="form-check">
                    <input style="color: #000066" class="form-check-input" type="radio" readonly name="radioGender" value = "Coagulopathy" id="Coagulopathy" wire:model="day2" required>
                    <label style="color: #000066" class="form-check-label" for="Coagulopathy">
                        Coagulopathy  
                    </label>
                </div>
            </div>
            <div class="col-md-4 mt-4 text-left">
                <label style="font-weight: 750; font-size: medium; color: black">Day 3</label><br>
                <div class="form-check">
                    <input style="color: #000066" class="form-check-input" type="radio" readonly name="radioGender" value = "Hypertension in Pregnancy" id="Hypertension in Pregnancy" wire:model="day2" required>
                    <label style="color: #000066" class="form-check-label" for="Hypertension in Pregnancy">
                        Hypertension in Pregnancy
                    </label>
                </div>
                <div class="form-check">
                    <input style="color: #000066" class="form-check-input" type="radio" name="radioGender" value = "Neonatal Surgical Emergencies" id="Neonatal Surgical Emergencies" wire:model="day2" required>
                    <label style="color: #000066" class="form-check-label" for="Neonatal Surgical Emergencies">
                        Neonatal Surgical Emergencies
                    </label>
                </div>
                <div class="form-check">
                    <input style="color: #000066" class="form-check-input" type="radio" readonly name="radioGender" value = "Anesthesia for Spine Surgery" id="Anesthesia for Spine Surgery" wire:model="day2" required>
                    <label style="color: #000066" class="form-check-label" for="Anesthesia for Spine Surgery">
                        Anesthesia for Spine Surgery 
                    </label>
                </div>
                <div class="form-check">
                    <input style="color: #000066" class="form-check-input" type="radio" name="radioGender" value = "Obstetric Hemorrhage" id="Obstetric Hemorrhage" wire:model="day2" required>
                    <label style="color: #000066" class="form-check-label" for="Obstetric Hemorrhage">
                        Obstetric Hemorrhage
                    </label>
                </div>
                <div class="form-check">
                    <input style="color: #000066" class="form-check-input" type="radio" readonly name="radioGender" value = "VATS" id="VATS" wire:model="day2" required>
                    <label style="color: #000066" class="form-check-label" for="VATS">
                        VATS  
                    </label>
                </div>
            </div>
        </div>
        
        <br>
        {{-- <div class="form-group">
            <label>Message</label>
            <textarea class="form-control form-control-message" name="message" id="message" placeholder="" rows="10" required></textarea>
        </div> --}}
        
        <div class="text-right"><br>
            @if ($showButton)
                <button wire:loading.attr="disabled" type="submit" class="btn btn-primary solid blank" style="background: #000066; color: white">
                    {{-- <div class="loader"></div> --}}
                    <svg wire:loading xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24"><path fill="currentColor" d="M12,1A11,11,0,1,0,23,12,11,11,0,0,0,12,1Zm0,19a8,8,0,1,1,8-8A8,8,0,0,1,12,20Z" opacity="0.25"/><path fill="currentColor" d="M10.14,1.16a11,11,0,0,0-9,8.92A1.59,1.59,0,0,0,2.46,12,1.52,1.52,0,0,0,4.11,10.7a8,8,0,0,1,6.66-6.61A1.42,1.42,0,0,0,12,2.69h0A1.57,1.57,0,0,0,10.14,1.16Z"><animateTransform attributeName="transform" dur="0.75s" repeatCount="indefinite" type="rotate" values="0 12 12;360 12 12"/></path></svg>
                    <div wire:loading.remove>
                        Register
                    </div>
                </button>
            @endif
            
        </div>
    </div>
</form>









