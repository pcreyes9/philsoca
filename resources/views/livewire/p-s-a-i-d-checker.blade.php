<div class="row mt-5">
    <div class="col-md-6">
        <div class="form-group">
            <label style=" font-weight: 750; font-size: medium;">Enter Last Name:</label>
            <input style="box-shadow: 2px 2px 3px;" class="form-control form-control-subject" placeholder="" wire:model.live='name'>
        </div>
        {{-- <button class="btn btn-primary solid blank mb-3" wire:click="checker">Check</button> --}}
    </div>
    <div class="col-md-6">
        <div class="form-group">
        <label style=" font-weight: 750; font-size: medium;">PSA ID</label>
        @if ($this->res !=null)
            <textarea class="form-control " rows="5" style=" font-weight: 750; font-size: medium; box-shadow: 2px 2px 3px; text-align:left;" id="message-text" readonly>{{ implode("\n", $res)}}</textarea>
        @endif
        </div>
    </div>
</div>