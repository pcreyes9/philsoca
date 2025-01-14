<!DOCTYPE html>
<html>
    <head>
        <title>BARCODE PDF</title>
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
            <h2 > {{ !! DNS2D::getBarcodeHtml("$infos->psa_id", 'barcode') !! }}</h2>
        @endforeach
    </body>
</html>