@extends('home.master')

@section('title', 'Register')
@section('banner-name', 'REGISTRATION')

@section('content')
@include('home.banner')

<section id="main-container" class="pb-4 main-container text-center project-area ">


    <div class="container">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <div class="row justify-content-center mb-5" data-animation-in="slideInLeft" data-duration-in="1.2">
            <div class="col-lg-12" >
                <h3 class="into-sub-title" >The 24<sup class="text-lowercase">th</sup> ASEAN Congress of Anesthesiologists (ACA 2025)</h3>
            </div>
            <div class="col-lg-11 mb-3">
                <h3 class="section-header">23<sup class="text-lowercase">rd</sup> - 25<sup class="text-lowercase">th</sup> October 2025 | MARRIOTT GRAND BALLROOM <br> Pasay City | Philippines</h3>
            </div>
            <div class="col-lg-10 mt-4 mt-lg-0">
                {{-- <p class="para-head fd">Registration Guidelines</p>
                <p class="hotel-p fd">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas semper nunc nec ornare ornare. Nam sagittis elit ac ligula bibendum condimentum. In sodales, neque et tincidunt congue, lorem dui interdum arcu, id lobortis tortor nibh quis magna. Pellentesque sit amet semper turpis, non feugiat tellus. Duis malesuada nibh nec suscipit volutpat.
                </p>
                <br> --}}
                {{-- <p class="para-head fd">Registration Rates</p> --}}
                <p class="hotel-p fd">
                    {{-- All conference participants and presenters of accepted presentations must register and make the registration fees in full.                --}}
                </p>
                <br>
                <p class="para-head text-center fd mb-4">International Rates</p>
                <div class="table-responsive mb-3">
                    <table class="table fd">
                        <thead class="bg-primary text-white">
                            <tr>
                                <th class="text-left align-middle" scope="col">Registration Type</th>
                                <th scope="col">Early Bird <br> <span style="font-weight: normal;"><i>(Jan 20 - Apr 30, 2025)</i></span></th>
                                <th scope="col">Registration Period <br> <span style="font-weight: normal;"><i>(May 01 - Sept 30, 2025)</i></span></th>
                                <th scope="col">Onsite Registration <br> <span style="font-weight: normal;"><i>(Oct 22 - Oct 25, 2025)</i></span></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th class="text-left" scope="row">Asean Members</th>
                                <td>$450</td>
                                <td>$550</td>
                                <td>$750</td>
                            </tr>
                            <tr>
                                <th class="text-left" scope="row">Non-Asean Members</th>
                                <td>$600</td>
                                <td>$650</td>
                                <td>$850</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                
                <br>
                <p class="para-head text-center fd mb-4">Local (Philippines) Rates</p>
                <div class="table-responsive mb-3">
                    <table class="table">
                        <thead class="bg-danger text-white" >
                            <tr>
                                <th class="text-left align-middle" scope="col">Registration Type</th>
                                <th scope="col">Early Bird <br> <span style="font-weight: normal;"><i>(Jan 20 - Apr 30, 2025)</i></span></th>
                                <th scope="col">Registration Period <br> <span style="font-weight: normal;"><i>(May 01 - Sept 30, 2025)</i></span></th>
                                <th scope="col">Onsite Registration <br> <span style="font-weight: normal;"><i>(Oct 22 - Oct 25, 2025)</i></span></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th class="text-left" scope="row">Regular Members</th>
                                <td>₱16,000</td>
                                <td>₱18,000</td>
                                <td>₱20,000</td>
                            </tr>
                            <tr> 
                                <th class="text-left" scope="row">Resident/Trainee Members</th>
                                <td>₱14,000</td>
                                <td>₱15,000</td>
                                <td>₱18,000</td>
                            </tr>
                            <tr>
                                <th class="text-left" scope="row">PWD/Seniors Citizens <br>  (with 20% discount)</th>
                                <td class="align-middle">₱12,800</td>
                                <td class="align-middle">₱14,400</td>
                                <td class="align-middle">₱16,000</td>
                            </tr>
                            <tr>
                                <th class="text-left" scope="row">Life Members</th>
                                <td>₱10,000</td>
                                <td>₱10,000</td>
                                <td>₱10,000</td>
                            </tr>
                            <tr>
                                <th class="text-left" scope="row">Non-Members</th>
                                <td>-</td>
                                <td>-</td>
                                <td>₱25,000</td>
                            </tr>
                        </tbody>
                    </table>
                </div>                

                {{-- <p class="hotel-p fd">
                    <br>
                    Remarks: other type of registrations stated above will fall under “NON-Member” category.
                </p>
                <br>    
                <p class="para-head fd">Member States of Asean</p>
                <p class="hotel-p fd">
                    Brunei, Cambodia, Indonesia, Laos, Malaysia, Myanmar, Philippines, Singapore, Thailand, and Vietnam.
                </p>
                <br>    
                <p class="para-head fd">Registration Procedure</p>
                <p class="hotel-p fd">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas semper nunc nec ornare ornare. Nam sagittis elit ac ligula bibendum condimentum. In sodales, neque et tincidunt congue, lorem dui interdum arcu, id lobortis tortor nibh quis magna. Pellentesque sit amet semper turpis, non feugiat tellus. Duis malesuada nibh nec suscipit volutpat.
                </p>
                <br> --}}
                <p class="para-head fd mb-2">Bank Details</p>
                <p class="hotel-p fd">
                    Security Bank Account Number:<strong> 0000039-8075-39</strong> <br> Account name: <strong>Philippine Society of Anesthesiologists, Inc.</strong>
                </p>
                <br>
                <p class="hotel-p fd">
                    BPI Dollar Account Number:<strong> 004434-0395-47</strong> <br> Account name: <strong>Philippine Society of Anesthesiologists, Inc.</strong> <br> SWIFT CODE: <strong>BOPIPHMM</strong>
                </p>


                <div class="d-grid gap-2 mt-5">
                    <a href="{{ route('memReg') }}" target="_blank" class="btn btn-primary mb-1" style="font-size: 20px">Local Registration</a>
                    <a href="{{ route('nonMemReg') }}"  target="_blank" class="btn btn-dark mb-1" style="font-size: 20px">International Registration</a>
                </div>
            </div>
            
        </div>
        
    </div>
</section><!-- Main container end -->
@endsection


