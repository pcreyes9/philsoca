<div class="container">
    <div class="row justify-content-center mb-5" data-animation-in="slideInLeft" data-duration-in="1.2">
        <div class="col-lg-12" >
            <h3 class="into-workshop-title" >Booth Checker</h3>
        </div>
        <div class="col-lg-11 mb-3">
            <p class="hotel-p text-center "><i>You have to visit all 50 exhibibtors to be qualified for PSA Raffle</i></p>
        </div>
        <div class="col-lg-12 mt-4 mt-lg-0">

            <div class="col-md-2">
                
            </div>
            <div class="form-group w-25">
                    <label style=" font-weight: 750; font-size: medium; color: black">PSA ID No.</label>
                    <input style="box-shadow: 2px 2px 3px gray; background-color: #000066; color: white; font-weight: bold" class="form-control form-control-name" name="psa_id" required autofocus autocomplete="psa_id" type="text" required wire:model.live='PSAid' value={{$PSAid}}>
                    
                </div>
            <p class="hotel-p text-left mb-4"><strong>{{ $name }}</strong></p>


            <div class="table-responsive mb-3">
                <table class="table fd">
                    <thead class="bg-primary text-white">
                        <tr>
                            <th class="align-middle" scope="col">#</th> <!-- Row number -->
                            <th class="text-left align-middle" scope="col">Visited Booths</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($visited as $booth)
                            <tr>
                                <td scope="row">{{ $loop->iteration }}</td> <!-- row number -->
                                <td class="text-left">{{ $booth->booth }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="table-responsive mb-3">
                <table class="table fd">
                    <thead class="bg-dark text-white">
                        <tr>
                            <th class="align-middle" scope="col">#</th> <!-- Row number -->
                            <th class="text-left align-middle" scope="col">Booths to visit</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($non as $booth)
                            <tr>
                                <td scope="row">{{ $loop->iteration }}</td> <!-- row number -->
                                <td class="text-left">{{ $booth->name }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            
            <br>
                        
            {{-- <div class="d-grid gap-2">
                <a href="{{ route('workshopReg') }}" target="_blank" class="btn btn-dark mb-1" style="font-size: 20px">Workshop Registration</a>
            </div> --}}
        </div>
    </div>
</div>
