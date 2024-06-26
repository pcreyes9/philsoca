<!DOCTYPE html>
<html>
    <head>
        <title>PDF EXPORT</title>
        <style>
            .page-break {
                page-break-after: always;
            }
            .img{
                width:75%;
                height:auto;
            }
            .text-center{
                text-align:center;
            }
        </style>
    </head>
    <body>

        @foreach ($info as $infos)
            <h1 style="text-align:right">
                # {{ $infos->id }}
            </h1>
            <h2>
                Name: {{ $infos->last_name }},  {{ $infos->first_name }}
            </h2>
            <h2>
                PSA ID: {{ $infos->psa_id }}
            </h2>
            <h2>
                Membership: {{ $infos->membership }}
            </h2>
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