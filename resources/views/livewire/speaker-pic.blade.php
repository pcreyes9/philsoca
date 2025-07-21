<div class="container-fluid px-5">
  <div class="row px-lg-5 px-md-5">
    <div class="col-12 px-lg-5">
      <div class="row px-lg-5">

      @foreach ($speaker as $speakers)
        <div class="col-sm-6 col-md-6 col-xl-3 shuffle-item mb-4 px-3 " data-toggle="modal" data-target="#exampleModalCenter" wire:click="modalShow('{{ $speakers->name }}', {{ $speakers->id }})">
          <div class="project-img-container" style="position: relative;">
            <a class="gallery-popup" >
              @if ($speakers->photo == null || $speakers->photo == "")
                <img onerror="this.src='{{ asset('storage/speaker_placeholder.png') }}';" style="width: 100%;" class="align-middle mt-3 align-middle" src="images/speaker_placeholder.png" alt="Image is still in process.">
              @else
                <img onerror="this.src='{{ asset('storage/speaker_placeholder.png') }}';" style="width: 100%;" class="align-middle mt-3 align-middle" src='storage/resized/{{ $speakers->photo }} ' alt="Image is still in process.">
              @endif
            </a>
            <div style="background: rgba(73, 73, 73, 0.6); width: 100%; position: absolute;
                        top: 95%; 
                        left: 50%; 
                        transform: translate(-50%, -70%); 
                        color: #fff; 
                        padding: 10px 20px;   
                        font-size: 20px; 
                        text-align: left;">
                
                  <div class="mb-2">
                    <h3 class="ts-name" style="font-size: 17px;  font-weight: 600; color: white; text-transform: capitalize;">{{ $speakers->name }}</h3>
                    <h3 class="ts-name" style="font-size: 14px;  font-weight: 500;  color: white; text-transform: capitalize;">{{ $speakers->affiliation }}</h3>
                  </div>
                 
              {{-- <h3 class="ts-name" style="font-size: 15px;">{{ $speakers->affiliation }}</h3> --}}
            </div>
          </div>
          
        </div><!-- shuffle item 1 end -->
        
        @endforeach
      </div><!-- shuffle end -->
    </div>
  </div><!-- Content row end -->

  <!-- Button trigger modal -->
{{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
  Launch demo modal
</button> --}}

<!-- Modal -->
<div wire:ignore.self class="modal fade bd-example-modal-lg" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" class="z-3">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header " style="background-color: #ac071a">
        <h5 class="modal-title font-weight-bold" id="exampleModalLongTitle" style="color: #fff">Speaker Information</h5><br>

        <button type="button" class="close" style="color: white; opacity: 1;" data-dismiss="modal" aria-label="Close" >
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-left mx-3">

        <div class="row mb-4">
          <div class="col-md-2">
            @if ($photoModal == null || $photoModal == "")
              <img onerror="this.src='{{ asset('storage/speaker_placeholder.png') }}';" style="width: 100%;" class="fixed-size-img align-middle mt-3 align-middle" src="images/speaker_placeholder.png" alt="Image is still in process.">
            @else 
              <img onerror="this.src='{{ asset('storage/speaker_placeholder.png') }}';" style="width: 100%;" class="fixed-size-img align-middle mt-3 align-middle" src='storage/resized/{{ $photoModal }} ' alt="Image is still in process.">
            @endif
          </div>
          <div class="col-md-10">
            <div class="mb-5">
              <h1 class="mb-n4 font-weight-bold" style="font-size: 24px">{{ $nameModal }}</h1>
              <h1 class="mb-n4 mt-2" style="font-size: 20px">{{ $affiModal }}</h1>
              <h1 style="font-size: 20px">{{ $countryModal }}</h1>
              {{-- <h1 style="font-size: 20px">{{ $speakerID }}</h1> --}}
            </div>
          </div>
        </div>
        
        <textarea class="text-left" style="font-size: 20px; width: 100%; resize: none; background-color: white" rows="17" disabled>{{ $bioModal }}</textarea>
        
      </div>
      <div class="modal-header " style="background-color: #000066">
          <h5 class="modal-title font-weight-bold" id="exampleModalLongTitle" style="color: #fff">Speaker Schedule</h5><br>
      </div>
      {{-- <h1 class="my-3" style="font-size: 20px">Coming soon!</h1> --}}
      
      <div class="">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th class="text-center" scope="col">Topic</th>
              <th scope="col">Time & Date</th>
              <th scope="col">Venue</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($schedule as $sched)
              <tr>
                <td class="text-left align-middle">{{ $sched->topic }}</td>
                <td class="align-middle">{{ $sched->date }} <br> {{ $sched->time }}</td>
                <td class="align-middle">{{ $sched->venue }}</td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>

      <script>
        const textArea = document.querySelector('textarea')
       
        textArea.addEventListener("mousemove", e =>{
          textArea.style.height = "auto";
          let scHeight = e.target.scrollHeight;
          textArea.style.height = `${scHeight}px`;
        })
  
      </script>
      <div class="modal-footer">
        {{-- <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button> --}}
      </div>
    </div>
  </div>
</div>
</div><!-- Conatiner end -->