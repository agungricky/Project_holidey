@extends('Lp.landingPage')

@section('content')
    <section id="akun" style="display: block">
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
                            <button type="button" id="Button" class="btn btn-success akun" style="position: relative">
                                <i class="fa-solid fa-plus"></i>
                            </button>
                    </div>
                    <span> Tambahkan Akun</span>
                </div>

            </div>
        </div>
    </section>

    <section id="register" style="display: none">
        <h1>Halo Ricky</h1>
    </section>
@endsection
