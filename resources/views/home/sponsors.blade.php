<?php $page='venue'; ?>
@extends('home.master')

@section('title', 'Sponsorship & Exhibition')
@section('banner-name', 'Venue')

@section('content')
{{-- @include('home.banner') --}}


<section id="news" class="project-area">
    <div class="container" >
        <div class="d-grid gap-2 mt-5">
            <a href="{{ route('memReg') }}" target="_blank" class="btn btn-primary mb-1" style="font-size: 20px">Local Registration</a>
            <h2>QR Code Scanner</h2>

    <!-- Button -->
    <button id="start-scan" class="btn btn-primary">📷 Open Camera</button>

    <!-- Camera scanner -->
    <div id="reader" style="width:300px; margin-top:20px;"></div>

    <!-- Input -->
    <input type="text" id="booth_code" class="form-control mt-3" readonly>
        </div>
        {{-- <div>
            <h3 class="py-2 text-center pb-5" style="font-weight: 700; font-size: 25px; text-transform: none">For Sponsorship, write an email to: <span style="font-style: italic; font-size: 25px;">sponsorshipaca2025@gmail.com</span></h3>
        </div> --}}
        {{-- style="background: rgba(255, 255, 255, 0.5); border-radius: 25px" --}}
        <div class="d-flex justify-content-center">
            <img style="width: 100%;" class="align-middle mt-3 " src="images/sponsors/gold.jpg?v={{ time() }}" alt="Image is still in process.">
        </div>
        <div class="d-flex justify-content-center">
            <img style="width: 100%;" class="align-middle mt-5 " src="images/sponsors/silver1.jpg?v={{ time() }}" alt="Image is still in process.">
        </div>
        <div class="d-flex justify-content-center">
            <img style="width: 100%;" class="align-middle mt-5 " src="images/sponsors/silver2.jpg?v={{ time() }}" alt="Image is still in process.">
        </div>
        <div class="d-flex justify-content-center">
            <img style="width: 100%;" class="align-middle mt-5 " src="images/sponsors/bronze1.jpg?v={{ time() }}" alt="Image is still in process.">
        </div>
        <div class="d-flex justify-content-center">
            <img style="width: 100%;" class="align-middle mt-5 " src="images/sponsors/bronze2.jpg?v={{ time() }}" alt="Image is still in process.">
        </div>
        <div class="d-flex justify-content-center">
            <img style="width: 100%;" class="align-middle mt-5 " src="images/sponsors/bronze3.jpg?v={{ time() }}" alt="Image is still in process.">
        </div>
        <div class="d-flex justify-content-center">
            <img style="width: 100%;" class="align-middle mt-5 " src="images/sponsors/brass.jpg?v={{ time() }}" alt="Image is still in process.">
        </div>
    </div>
</section>
@endsection

@section('scripts')
<script src="https://unpkg.com/html5-qrcode"></script>
<script>
let html5QrCode;

document.getElementById("start-scan").addEventListener("click", function() {
    if (!html5QrCode) {
        html5QrCode = new Html5Qrcode("reader");
    }

    html5QrCode.start(
        { facingMode: "environment" }, // back camera
        { fps: 10, qrbox: 250 },
        qrCodeMessage => {
            document.getElementById("booth_code").value = qrCodeMessage;

            // stop after one successful scan
            html5QrCode.stop().then(() => {
                console.log("Scanner stopped after success.");
            });
        },
        errorMessage => {
            console.log("Scanning error:", errorMessage);
        }
    ).catch(err => {
        console.error("Camera start failed:", err);
    });
});
</script>
@endsection