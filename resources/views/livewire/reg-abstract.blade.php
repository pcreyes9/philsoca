
<form wire:submit.prevent="submit">
    {{-- <div wire:loading>LOADING...</div> --}}
    @csrf
    <div class="error-container"></div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label style="font-weight: 750; font-size: medium; color: black">Brief Title <br> <span class="font-italic font-weight-normal">[Do not include special characters (/, :, -, etc.)]</span></label>
                    <input style="box-shadow: 2px 2px 3px gray; background-color: #000066; color: white; font-weight: bold; text-transform:uppercase" class="form-control form-control-name" name="name" id="name" placeholder="" type="text" wire:model="title" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label style="font-weight: 750; font-size: medium; color: black">Author</label>
                    <input style="box-shadow: 2px 2px 3px gray; background-color: #000066; color: white; font-weight: bold; text-transform:uppercase" class="form-control form-control-email" name="text" id="text" placeholder="" type="text" wire:model="author" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label style="font-weight: 750; font-size: medium; color: black">Name of Hospital</label>
                    <input style="box-shadow: 2px 2px 3px gray; background-color: #000066; color: white; font-weight: bold; " class="form-control form-control-subject" name="subject" id="subject" wire:model="hospital" placeholder="" required>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label style="font-weight: 750; font-size: medium; color: black">Country</label>
                    <input style="box-shadow: 2px 2px 3px gray; background-color: #000066; color: white; font-weight: bold; text-transform:uppercase" class="form-control form-control-email" name="text" type="text"  id="text" placeholder=""  wire:model="country" required>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                <label style="font-weight: 750; font-size: medium; color: black">Email</label>
                <input style="box-shadow: 2px 2px 3px gray; background-color: #000066; color: white; font-weight: bold" class="form-control form-control-subject" type="email" name="email" id="email" wire:model="email" placeholder="" required>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="form-group">
                <label style="font-weight: 750; font-size: medium; color: black">Contact Number</label>
                <input style="box-shadow: 2px 2px 3px gray; background-color: #000066; color: white;; font-weight: bold" class="form-control form-control-subject" type="number" name="subject" id="subject" wire:model="contact" placeholder="">
                </div>
            </div>
            <div class="col-md-4 mt-4">
                <label style="font-weight: 750; font-size: medium; color: black">Category</label><br>
                <div class="form-check">
                    <input style="color: #000066" class="form-check-input" type="radio" readonly name="radioGender" value = "fellow" id="fellow" wire:model="category" required>
                    <label style="color: #000066" class="form-check-label" for="fellow">
                        Fellow
                    </label>
                </div>
                <div class="form-check">
                    <input style="color: #000066" class="form-check-input" type="radio" name="radioGender" value = "resident" id="resident" wire:model="category" required>
                    <label style="color: #000066" class="form-check-label" for="resident">
                        Resident
                    </label>
                </div>
            </div>
            

            <div class="col-md-4 mt-4">
                <label style="font-weight: 750; font-size: medium; color: black">Upload File</label><br>
                <input style="color: #000066" type="file" wire:model="file" required>

                @error('file') <span class="error">{{ $message }}</span> @enderror
            </div>
                
            
            <br>

            @if (session()->has('message'))
                <div class="alert alert-warning">
                    {{ session('message') }}
                </div>
            @endif

            <div class="text-right"><br>
                <button wire:loading.attr="disabled" type="submit" class="btn btn-primary solid blank" style="background: #d6cb00; color: #000066">
                    {{-- <div class="loader"></div> --}}
                    <svg wire:loading xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24"><path fill="currentColor" d="M12,1A11,11,0,1,0,23,12,11,11,0,0,0,12,1Zm0,19a8,8,0,1,1,8-8A8,8,0,0,1,12,20Z" opacity="0.25"/><path fill="currentColor" d="M10.14,1.16a11,11,0,0,0-9,8.92A1.59,1.59,0,0,0,2.46,12,1.52,1.52,0,0,0,4.11,10.7a8,8,0,0,1,6.66-6.61A1.42,1.42,0,0,0,12,2.69h0A1.57,1.57,0,0,0,10.14,1.16Z"><animateTransform attributeName="transform" dur="0.75s" repeatCount="indefinite" type="rotate" values="0 12 12;360 12 12"/></path></svg>
                    <div wire:loading.remove>
                        Register
                    </div>
                    
                </button>
            </div>
        </div>
    </div>
</form>









