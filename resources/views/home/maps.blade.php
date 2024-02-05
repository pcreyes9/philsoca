<section id="news" class="project-area solid-bg">
    <div class="container">
        <div class="text-center row">
            <div class="col-12">
                <h2 class="section-title">REACHING OUR OFFICE</h2>
                <h3 class="section-sub-title">FIND OUR LOCATION</h3>
            </div>
        </div>
      <!--/ Title row end -->

        {{-- <div class="row"> --}}
            {{-- <div class="google-map"> --}}
        <div id="map" style="width: 100%, height: 300px;"></div>
            {{-- </div> --}}
        {{-- <div> --}}
    <div>
    <!--/ Container end -->
    <script type="text/javascript"
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDv73ypneUnh8vB98s6fslx1MC_BGBDC98">
    </script>

        <script>

            function showMap(lat, long){
                var coord = {lat:lat, lng:long};
                new google.maps.Map(
                    document.getElementById("map"),
                    {
                        zoom: 10,
                        center: coord
                    }
                );

                new google.maps.Marker({
                    position: coord,
                    map: map
                });

            }

            showMap(14.655388779940841, 121.03318533402278);
        </script>
        {{-- <script src="{{asset('home/js/script.js')}}"></script> --}}
  </section>
