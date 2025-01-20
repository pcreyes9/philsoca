<!DOCTYPE html>
<html>
    <head>
        
        <style>
            .page-break {
                page-break-after: always;
            }
            .img{
                width:60%;
                height:auto;
            }
            .text-center{
                text-align:center;
            }
        </style>
    </head>
    <body class="text-center">
        @foreach ($info as $infos)
            <title>{{ $infos->psa_id }}</title>
            <img style="width: 100%" src="images/barcode_header.png" alt="ASEAN CONGRESS OF ANESTHESIOLOGISTS">
            {{-- <h1 style="text-align:left;float:left;"> # {{ $infos->membership }}</h1>  --}}
            {{-- <hr style="clear:both;"/> --}}
            <h1>{{ $infos->last_name }},  {{ $infos->first_name }}, MD</h1>
            <div style="text-align: center">
                <h1 style="text-align: center;"> {!! DNS1D::getBarcodeHTML("$infos->psa_id", 'C128',3,50, 'black', true) !!}</h1>
            </div>
            
            <h3> {{ $infos->membership }} | {{ $infos->psa_id }}</h3>
            {{-- <h3></h3> --}}
        @endforeach
    </body>
</html>