<form wire:submit.prevent="submit">
    <div>
        @if (session()->has('message'))
            <div class="text-center alert alert-{{ session('status') }}">
                <strong>{{ session('message') }}</strong>
            </div> 
        @endif
        {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}

        <h1 class="pharma-title mb-5" style="color: black">{{$pharmaName}}</h1>

        <div class="d-flex justify-content-center">
        <div class="col-md-4">
            <div class="form-group text-center">
                <label style="font-weight: 750; font-size: medium; color: black">
                    ENTER your 4-digit PSA ID No.
                </label>
                <input
                    style="box-shadow: 2px 2px 3px gray; background-color: #000066; color: white; font-weight: bold"
                    class="form-control form-control-name"
                    name="psa_id"
                    required
                    autofocus
                    autocomplete="psa_id"
                    type="TEXT"
                    wire:model.live="PSAid"
                    value="{{ $PSAid }}"
                >
            </div>
            <div class="d-flex justify-content-center"><br>
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
    </div>
</form>
