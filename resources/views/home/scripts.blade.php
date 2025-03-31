<!-- initialize jQuery Library -->
<script src="home/plugins/jQuery/jquery.min.js"></script>
<!-- Bootstrap jQuery -->
<script src="home/plugins/bootstrap/bootstrap.min.js" defer></script>
<!-- Slick Carousel -->
<script src="home/plugins/slick/slick.min.js"></script>
<script src="home/plugins/slick/slick-animation.min.js"></script>
<!-- Color box -->
<script src="home/plugins/colorbox/jquery.colorbox.js"></script>
<!-- shuffle -->
<script src="home/plugins/shuffle/shuffle.min.js" defer></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


<!-- Google Map API Key-->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU" defer></script>
<!-- Google Map Plugin-->
<script src="home/plugins/google-map/map.js" defer></script>

<!-- Template custom -->
<script src="home/js/script.js?ver=<?php echo time()?>"></script>


{{-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> --}}

{{-- SWEET ALERT SCRIPTS --}}

<script>
    window.addEventListener('show-confirmation', event => {
        Swal.fire({
            title: "Are you sure?",
            text: "You won't be able to revert this!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, delete it!"
            }).then((result) => {
                if (result.isConfirmed) {
                    Livewire.emit('approvalConfirmed')
                    Swal.fire({
                        title: "Approved!",
                        text: "Your file has been approved.",
                        icon: "success"
                    });
                }
        })
    });
</script>






