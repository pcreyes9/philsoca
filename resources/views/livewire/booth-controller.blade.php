<form wire:submit.prevent="submit">
    <div>
        @if (session()->has('message'))
            <div class="text-center alert alert-{{ session('status') }}">
                <strong>{{ session('message') }}</strong>
            </div> 
        @endif
        {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}

        <h1 class="pharma-title mb-5" style="color: black">PSA RAFFLE REGISTRATION IS NOW CLOSED</h1>
    </div>
</form>
