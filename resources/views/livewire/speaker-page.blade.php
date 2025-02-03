

<div class="container">
    
    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
      <li class="nav-item" role="presentation">
        <button class="nav-link active nav-speaker" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Personal Information</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link nav-speaker" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">My Session</button>
      </li>
        <li class="nav-item" role="presentation">
            <form method="POST" action="{{ route('logout') }}" x-data>
                @csrf
                <button class="nav-link nav-speaker" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="submit" role="tab" aria-controls="pills-profile" aria-selected="false">Logout</button>
            </form>      
        </li>
    </ul>


    <div class="tab-content" id="pills-tabContent">
      <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
        <div class="table-responsive mb-3">
            <table class="table table-bordered table-striped">
                {{-- <thead class="bg-primary text-white">
                    <tr>
                        <th class="text-left align-middle" scope="col">Registration Type</th>
                        <th scope="col">Early Bird <br> <span style="font-weight: normal;"><i>(Jan 20 - Apr 30, 2025)</i></span></th>
                        <th scope="col">Registration Period <br> <span style="font-weight: normal;"><i>(May 01 - Sept 30, 2025)</i></span></th>
                        <th scope="col">Onsite Registration <br> <span style="font-weight: normal;"><i>(Oct 22 - Oct 25, 2025)</i></span></th>
                    </tr>
                </thead> --}}
                <tbody>
                    <tr>
                        <th class="align-middle">Country</th>
                        <td class="text-left" scope="row">
                            <input {{ $status }} style="background: rgba(76, 175, 80, {{ $opacity }}); color: black; font-weight: bold; font-size: 15px;" class="form-control form-control-subject" type="text" name="subject" id="subject" wire:model="country" placeholder="" required>
                        </td>
                        
                    </tr>
                    <tr>
                        <th class="align-middle">Email</th>
                        <td class="text-left" scope="row">
                            <input {{ $status }} style="background: rgba(76, 175, 80, {{ $opacity }}); color: black; font-weight: bold; font-size: 15px;" class="form-control form-control-subject" type="email" name="subject" id="subject" wire:model="email" placeholder="" required>
                        </td>
                    </tr>
                    <tr>
                        <th class="align-middle">Name</th>
                        <td class="text-left" scope="row" data-editable="true">
                            <input {{ $status }} style="background: rgba(76, 175, 80, {{ $opacity }}); color: black; font-weight: bold; font-size: 15px;" class="form-control form-control-subject" type="text" name="subject" id="subject" wire:model="name" placeholder="" required>
                        </td>
                    </tr>
                    <tr>
                        <th class="align-middle">Affiliation</th>
                        <td class="text-left" scope="row">
                            <input {{ $status }} style="background: rgba(76, 175, 80, {{ $opacity }}); color: black; font-weight: bold; font-size: 17px;" class="form-control form-control-subject" type="text" name="subject" id="subject" wire:model="affiliation" placeholder="" required>
                        </td>
                    </tr>
                    <tr>
                        <th class="align-middle">Bio <br> <span style="font-weight: normal;"><i>{{ $words }} of 300</i></span> </th>
                        <td class="text-left" scope="row">
                            <textarea rows="6" {{ $status }} style="background: rgba(76, 175, 80, {{ $opacity }}); color: black; font-weight: bold; font-size: 15px;" class="form-control form-control-subject" type="text" name="subject" id="subject" wire:model.live="bio" placeholder="" required></textarea>
                        </td>
                    </tr>
                    <tr>
                        <th class="align-middle">Photo</th>
                        <td class="align-middle" scope="row">
                            <input {{ $hide }} {{ $status }} style="background: rgba(76, 175, 80, {{ $opacity }}); color: black; font-weight: bold; font-size: 15px; padding-top: 10px" class="form-control form-control-subject align-middle w-50" type="file" wire:model="photo"  required>
                            {{-- {{ $photo }} --}}

                            {{-- <img loading="lazy" style="width: 20%;" class="logo img-fluid align-middle mt-3 align-middle" src="{{ asset('storage/photos/speakersIMG/'. $photoDisplay) }} " alt=""> --}}

                            {{-- WORKING IN LOCAL --}}
                            {{-- <img loading="lazy" style="width: 20%;" class="logo img-fluid align-middle mt-3 align-middle" src='storage/photos/speakersIMG/{{ $photoDisplay }} ' alt=""> --}}
                            
                            {{-- WORKING IN HOSTINGER --}}
                            <img loading="lazy" style="width: 20%;" class="logo img-fluid align-middle mt-3 align-middle" src='storage/{{ $photoDisplay }} ' alt="Image is still in process.">
                        </td>
                    </tr>
                </tbody>
            </table>
            <div>
                <a href="#" wire:click.prevent="modify" class="btn btn-primary mb-1" style="font-size: 15px">Modify Information</a>
                <a href="#" {{ $hide }} wire:click.prevent="update" class="btn btn-dark mb-1" style="font-size: 15px">Update Information</a>
            </div>
            
            
        </div>

        </div>
        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
            <div class="table-responsive mb-3 mt-4">
            </div>
            <div class="table-responsive mb-3 mt-5">
                <h3 class="into-sub-title mb-4">My Session Schedule</h3>
                <table class="table fd table-bordered table-striped">
                    
                    <tbody>
                        <tr>
                            <th>Bio</th>
                            <td class="text-left" scope="row">{{ $country }}</td>
                            
                        </tr>
                        <tr>
                            <th>Photo</th>
                            <td class="text-left" scope="row">{{ $email }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
      <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">...</div>
    </div>
   </div>