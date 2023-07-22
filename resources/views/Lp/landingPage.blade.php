<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Landing Pages</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

</head>
<body>
    <style>
        #animatedText {
        position: relative;
        top: 0;
        transition: top 0.5s ease-in-out;
    }
    </style>
    
    <div class="container-fluid m2">
        <header id="header">
            <div class="row">
                <div class="col-md-12">
                        <table class="m-auto tabel">
                            <tr>
                                <td><img src="{{ url('gambar/logo.png') }}" alt="" id="row-logo"></td>
                                <td><h1 class="text-infoku mx-1">FreshMove</h1></td>
                            </tr>
                        </table>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-6 m-auto">
                    <div class="text-center py-2 kata-kata text-light rouded-5 ps-3">
                        <span id="teks"></span>
                    </div>
                </div>
            </div>
        </header>
        
        <div id="content">
            @yield('content')
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="https://kit.fontawesome.com/5b3710b119.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src={{ asset('js/jsku.js') }}></script>
</body>
</html>