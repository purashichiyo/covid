<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ URL::asset('/css/app.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('/css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
</head>

<body>
    @foreach ($jsonData as $item)

    <div class="container-fluid">
        <div class="container mt-4">
            <h1 class="text-center">Status COVID-19</h1>
            <hr class="w-25">
            <h5>
                <marquee>Informasi Kasus Corona di {{ $item['name'] }} - LIVE! - Data ini diambil menggunakan API dari Kawalcorona.com </marquee>
            </h5>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 mb-2">
                    <div class="card border-0">
                        <div class="card-body bg-danger rounded text-white">
                            <img class="virus" src="http://desabuahan-tabanan.com/desa/themes/cosmos/assets/image/corona.png">
                            <h4>Jumlah Positif</h4><br>
                            <h2>{{ $item['positif'] }}</h2><br>
                            <h5>Orang</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-12 mb-2">
                    <div class="card border-0">
                        <div class="card-body bg-success rounded text-white">
                            <img class="virus" src="http://desabuahan-tabanan.com/desa/themes/cosmos/assets/image/corona.png">
                            <h4>Jumlah Sembuh</h4><br>
                            <h2>{{ $item['sembuh'] }}</h2><br>
                            <h5>Orang</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-12 mb-2">
                    <div class="card border-0">
                        <div class="card-body bg-secondary rounded text-white">
                            <img class="virus" src="http://desabuahan-tabanan.com/desa/themes/cosmos/assets/image/corona.png">
                            <h4>Jumlah Meninggal</h4><br>
                            <h2>{{ $item['meninggal'] }}</h2><br>
                            <h5>Orang</h5>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    @endforeach

    <script src="{{ URL::asset('/js/app.js') }}"></script>
</body>

</html>