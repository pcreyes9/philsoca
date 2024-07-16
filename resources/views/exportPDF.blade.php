<!DOCTYPE html>
<html>
    <head>
        <title>PDF EXPORT</title>
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
    <body>

        @foreach ($info as $infos)
        
            <h2 style="text-align:left;float:left;">Name: {{ $infos->last_name }},  {{ $infos->first_name }}</h2> 
            <h1 style="text-align:right;float:right;"> # {{ $infos->id }}</h1> 
            <hr style="clear:both;"/>
            <h2 >PSA ID: {{ $infos->psa_id }}</h2>
            @if ($infos->membership == 'RM' && $infos->senior_citizen != 'Not available')
                <h2>Membership: {{ $infos->membership }} | with Senior</h2>
            @else
            <h2>
                Membership: {{ $infos->membership }}
            </h2>
            @endif
            
            <h3>
                Email: {{ $infos->email }}
            </h3>
            <br>
            <div class="text-center">
                <img class="img" src='storage/photos/proof of payments/{{ $infos->proof_payment }}'   alt="">
            </div>
            <div class="page-break"></div>
        @endforeach
    </body>
</html>