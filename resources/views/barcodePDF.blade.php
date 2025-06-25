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
            /* div {
                display: flex;
                justify-content: center;
            } */
        </style>
    </head>
    <body class="text-center">
        {{-- @foreach ($info as $info) --}}
            <title>{{ $info->psa_id }}</title>
            <img style="width: 100%" src="images/barcode_header.png" alt="ASEAN CONGRESS OF ANESTHESIOLOGISTS">
            {{-- <h1 style="text-align:left;float:left;"> # {{ $info->membership }}</h1>  --}}
            {{-- <hr style="clear:both;"/> --}}
            <h1>{{ $info->last_name }},  {{ $info->first_name }}, MD</h1>
            <div style="">
                <h1 style="padding-left: 237px;">{!! DNS1D::getBarcodeHTML("$info->psa_id", 'C128',4,60, 'black', true) !!}</h1>
            </div>
            
            <h3> {{ $info->membership }} | {{ str_pad($number, 4, '0', STR_PAD_LEFT) }}</h3>
            {{-- <h3></h3> --}}
        {{-- @endforeach --}}
    </body>
</html>