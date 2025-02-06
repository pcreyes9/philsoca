<div class="container">
  <div class="row">
    <div class="col-12">
      <div class="row shuffle-wrapper">

      @foreach ($speaker as $speakers)
        <div class="col-lg-3 col-md-6 shuffle-item mb-4 px-2" data-bs-toggle="modal" data-bs-target="#exampleModalCenter" wire:click="modalShow('{{ $speakers->name }}')">
          <div class="project-img-container">
            <a class="gallery-popup" href="images/speaker_placeholder.png">
              <img class="img-fluid" style="width: 100%;" src="images/speaker_placeholder.png" alt="project-image">
            </a>
          </div>
          <div style="background: #f2de02; width: 100%;" class="py-1">
            <h3 class="ts-name" style="font-size: 20px;">{{ $speakers->name }}</h3>
          </div>
        </div><!-- shuffle item 1 end -->
        
        @endforeach
      </div><!-- shuffle end -->
    </div>
  </div><!-- Content row end -->

  <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
  Launch demo modal
</button>

<!-- Modal -->
<div wire:ignore.self class="modal fade bd-example-modal-lg" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">{{ $nameModal }}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" >
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-left">
        {{ $bioModal }}
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
</div><!-- Conatiner end -->

