<div class="container">
  <div class="row">
    <div class="col-12">
      <div class="row shuffle-wrapper">

      @foreach ($speaker as $speakers)
        <div class="col-lg-3 col-md-6 shuffle-item mb-4 px-2" data-bs-toggle="modal" data-bs-target="#exampleModalCenter" wire:click="modalShow('{{ $speakers->name }}')">
          <div class="project-img-container">
            <a class="gallery-popup" >
              @if ($speakers->photo == null || $speakers->photo == "")
              <img loading="lazy" style="width: 100%;" class="logo img-fluid align-middle mt-3 align-middle" src="images/speaker_placeholder.png" alt="Image is still in process.">
            @else
              <img onerror="this.src='{{ asset('storage/speaker_placeholder.png') }}';" loading="lazy" style="width: 100%;" class="logo img-fluid align-middle mt-3 align-middle" src='storage/resized/{{ $speakers->photo }} ' alt="Image is still in process.">
            @endif
            </a>
          </div>
          <div style="background: #f2de02; width: 100%;" class="py-1">
            <h3 class="ts-name" style="font-size: 15px;">{{ $speakers->name }}</h3>
            {{-- <h3 class="ts-name" style="font-size: 15px;">{{ $speakers->affiliation }}</h3> --}}
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
<div wire:ignore.self class="modal fade bd-example-modal-lg" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header " style="background-color: #ac071a">
        <h5 class="modal-title font-weight-bold" id="exampleModalLongTitle" style="color: #fff">Speaker Information</h5><br>

        {{-- <button type="button" class="close" data-dismiss="modal" aria-label="Close" >
          <span aria-hidden="true">&times;</span>
        </button> --}}
      </div>
      <div class="modal-body text-left mx-3">

        <div class="row mb-4">
          <div class="col-md-2">
            @if ($photoModal == null || $photoModal == "")
              <img loading="lazy" style="width: 100%;" class="logo img-fluid align-middle mt-3 align-middle" src="images/speaker_placeholder.png" alt="Image is still in process.">
            @else
              <img onerror="this.src='{{ asset('storage/speaker_placeholder.png') }}';" loading="lazy" style="width: 100%;" class="logo img-fluid align-middle mt-3 align-middle" src='storage/resized/{{ $photoModal }} ' alt="Image is still in process.">
            @endif
          </div>
          <div class="col-md-10">
            <div class="mb-5">
              <h1 class="mb-n4 font-weight-bold" style="font-size: 23px">{{ $nameModal }}</h1>
              <h1 class="mb-n4 mt-2">{{ $affiModal }}</h1>
              <h1 >{{ $countryModal }}</h1>
            </div>
          </div>
        </div>
        
        <textarea class="text-justify" style="width: 100%; resize: none; background-color: white" rows="17" disabled>{{ $bioModal }}</textarea>
        
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