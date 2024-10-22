@extends('home.master')

@section('title', 'Register')
@section('banner-name', 'REGISTRATION')

@section('content')
@include('home.banner')

<section id="main-container" class="pb-4 main-container text-center project-area ">
    <div class="container">
        <div class="row justify-content-center mb-5" data-animation-in="slideInLeft" data-duration-in="1.2">
            <div class="col-lg-12 mb-5" >
                <h3 class="into-sub-title" >The 24th ASEAN Congress of Anesthesiologists (ACA 2024)</h3>
                <h3 class="section-header">23rd - 25th October 2025 | MARRIOTT GRAND BALLROOM | Pasay City | Philippines</h3>
            </div>
            <div class="col-lg-9 mt-4 mt-lg-0">
                <p class="para-head fd">Registration Guidelines</p>
                <p class="hotel-p fd">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas semper nunc nec ornare ornare. Nam sagittis elit ac ligula bibendum condimentum. In sodales, neque et tincidunt congue, lorem dui interdum arcu, id lobortis tortor nibh quis magna. Pellentesque sit amet semper turpis, non feugiat tellus. Duis malesuada nibh nec suscipit volutpat.
                </p>
                <br>
                <p class="para-head fd">Registration Rates</p>
                <p class="hotel-p fd">
                    All conference participants and presenters of accepted presentations must register and make the registration fees in full.               
                </p>
                <br>
                <p class="para-head text-center fd">International Rates</p>
                <div class="table-responsive">
                    <table class="table fd">
                        <thead class="bg-primary text-white">
                            <tr>
                                <th class="text-left" scope="col">Registration Type</th>
                                <th scope="col">Early Bird Rate</th>
                                <th scope="col">Pre-Registration</th>
                                <th scope="col">Onsite Registration</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th class="text-left" scope="row">Asean Members</th>
                                <td>$400</td>
                                <td>$450</td>
                                <td>$600</td>
                            </tr>
                            <tr>
                                <th class="text-left" scope="row">Non-Asean Members</th>
                                <td>$500</td>
                                <td>$550</td>
                                <td>$700</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                
                <br>
                <p class="para-head text-center fd ">Local (Philippines) Rates</p>
                <div class="table-responsive">
                    <table class="table">
                        <thead class="bg-danger text-white" >
                            <tr>
                                <th class="text-left" scope="col">Registration Type</th>
                                <th scope="col">Early Bird Rate</th>
                                <th scope="col">Pre-Registration</th>
                                <th scope="col">Onsite Registration</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th class="text-left" scope="row">Regular Life Members</th>
                                <td>P15,000</td>
                                <td>P18,000</td>
                                <td>P21,000</td>
                            </tr>
                            <tr>
                                <th class="text-left" scope="row">Residents/Trainees</th>
                                <td>P12,000</td>
                                <td>P15,000</td>
                                <td>P18,000</td>
                            </tr>
                            <tr>
                                <th class="text-left" scope="row">PWD/Seniors</th>
                                <td>P9,600</td>
                                <td>P12,000</td>
                                <td>P14,400</td>
                            </tr>
                            <tr>
                                <th class="text-left" scope="row">Life Members</th>
                                <td>P9,000</td>
                                <td>P9,000</td>
                                <td>P9,000</td>
                            </tr>
                            <tr>
                                <th class="text-left" scope="row">Non-Members</th>
                                <td>P18,000</td>
                                <td>P21,000</td>
                                <td>P24,000</td>
                            </tr>
                        </tbody>
                    </table>
                </div>                

                {{-- <a class="gallery-popup wrapper" href="images/MC 2024 RATES.jpg">
                    <img class="img-fluid w-50 zoom fade-img" src="images/MC 2024 RATES.jpg" alt="">
                </a> --}}
                <p class="hotel-p fd">
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
                <br>
                <p class="para-head fd">Payment Details</p>
                <p class="hotel-p fd">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas semper nunc nec ornare ornare. Nam sagittis elit ac ligula bibendum condimentum. In sodales, neque et tincidunt congue, lorem dui interdum arcu, id lobortis tortor nibh quis magna. Pellentesque sit amet semper turpis, non feugiat tellus. Duis malesuada nibh nec suscipit volutpat.
                </p>
            </div>
        </div>
        <div class="d-grid gap-4 mt-4">
            <a href="{{route('memReg')}}" target="_blank" class="btn btn-primary mb-1" style="font-size: 20px">Local Registration</a>
            <a href="#" class="btn btn-dark mb-1" style="font-size: 20px">International Registration</a>
        </div>
    </div>
</section><!-- Main container end -->
@endsection


