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
    <section id="LandingPage">
        <div class="container-fluid m2">
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
                    <div class="text-center py-2 kata-kata text-light rouded-5 ps-3">Mending Ngapa-ngapain dari pada ga ngapa-ngapain</div>
                </div>
            </div>
            
           <section id="akun">
                <div class="contaier akun-kontainer">
                    <div class="row g-0 d-flex justify-content-center">
                        

                        {{-- @foreach ($collection as $item) --}}
                            <div class="col-md-2 text-akun">
                                <div class="border-akun m-auto mt-4">
                                    <a href="https://web.facebook.com/?_rdc=1&_rdr"><img src="{{url('gambar/ricky.jpg')}}" alt="" class="akun"></a>
                                </div>
                                <span><i class="fa-solid fa-user"></i> Ricky Agung S.</span>
                            </div>
                        {{-- @endforeach --}}

                        <div class="col-md-2 text-akun">
                            <div class="border-akun m-auto mt-4">
                                <a href="google.com"><button type="button" class="btn btn-success akun" style="position: relative"><i class="fa-solid fa-plus"></i></button></a>
                            </div>
                            <span> Tambahkan Akun</span>
                        </div>

                    </div>
                </div>
           </section>
        </div>
    </section>

    <script src="https://kit.fontawesome.com/5b3710b119.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>