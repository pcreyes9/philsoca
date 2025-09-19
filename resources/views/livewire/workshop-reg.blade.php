<form wire:submit.prevent="submit">
    @if (session()->has('message'))
        <div class="alert alert-{{ session('status') }}">
            <strong>{{ session('message') }}</strong>
        </div> 
    @endif
    @csrf
    <div class="error-container"></div>
        <div class="row p-3">
            <div class="col-md-2">
                <div class="form-group">
                    <label style=" font-weight: 750; font-size: medium; color: black">ENTER PSA ID No.</label>
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
                <input style="box-shadow: 2px 2px 3px gray; background-color: #000066; color: white;; font-weight: bold;s" class="form-control form-control-subject" name="subject" id="subject" wire:model="hospitalName" placeholder="" required readonly>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                <label style=" font-weight: 750; font-size: medium; color: black">Address of Hospital</label>
                <input style="box-shadow: 2px 2px 3px gray; background-color: #000066; color: white;; font-weight: bold;s" class="form-control form-control-subject" name="subject" id="subject" wire:model="hospitalAddress" placeholder="" required readonly>
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
        </div>
        <div class="text-left mt-5">
            <h3 class="into-sub-title" style="color: black">ACA 2025 Workshops</h3>
            {{-- <h4 class="mt-n2" style="color: black; font-style: italic; "><strong>(You can only choose 1 session)</strong></h4> --}}
        </div>
        
        <div class="row p-3">
            <div class="col-md-12 mt-2 text-left">
                {{-- <label style="font-weight: 750; font-size: medium; color: black">Workshop</label><br> --}}
                @foreach ($wrk as $session)
                    <div class="form-check reg-text">
                        <input 
                            style="color: #000066" 
                            class="form-check-input" 
                            type="radio" 
                            name="workshop" 
                            id="workshop-{{ $session->id }}" 
                            value="{{ $session->workshop }}" 
                            wire:model.live="workshop"
                            {{ $session->status }}
                        >
                        <label class="form-check-label mb-3" 
                            style="color: black" 
                            for="workshop-{{ $session->id }}">
                            
                            <strong>{{ $session->workshop }}</strong> 
                            <i> (3/F VIP East | 

                                @if ($session->workshop == 'REGIONAL ANESTHESIA WORKSHOP')
                                1:00 PM – 4:00 PM)
                                @elseif ($session->workshop == 'POCUS WORKSHOP')
                                8:00 AM - 11:00 AM)
                                @else
                                10:30 AM – 1:30 PM)

                                @endif
                            </i> 
                            
                            <br> (Registered: {{$session->total}} out of 
                            @if ($session->workshop == 'POCUS WORKSHOP') 
                                40)
                            @else
                                42)                           
                            @endif
                        </label>
                    </div>
                @endforeach

            </div>
        </div>
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









