@extends('Lp.landingPage')

@section('content')
    <section id="akun" style="display: block">
        <div class="contaier akun-kontainer">
            <div class="row g-0 d-flex justify-content-center">

                {{-- @foreach ($collection as $item) --}}
                    <div class="col-md-2 text-akun">
                        <div class="border-akun m-auto mt-4">
                            <a href={{ url('Ricky') }}><img src="{{url('gambar/ricky.jpg')}}" alt="" class="akun"></a>
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
        <div class="container-fluid akun-register mt-4">
            <div class="row">
                <div class="col-md-4 bg-dark rounded-start-2 text-light">
                    <h5 class="mb-0 mt-2">
                        <a href="#" class="fs-6"><img src={{ asset('gambar/number/number-1.png') }} alt="1"> Akun</a>
                    </h5>
                    <hr class="my-2">
                    <h5 class="mb-0 mt-2">
                        <a href="#" class="fs-6"><img src={{ asset('gambar/number/number-2.png') }} alt="1"> Data Diri</a>
                    </h5>
                    <hr class="my-2">
                    <h5 class="mb-0 mt-2">
                        <a href="#" class="fs-6"><img src={{ asset('gambar/number/number-3.png') }} alt="1"> Riwayat Pekerjaan</a>
                    </h5>
                    <hr class="my-2">
                    <h5 class="mb-0 mt-2">
                        <a href="#" class="fs-6"><img src={{ asset('gambar/number/number-4.png') }} alt="1"> Keahlian</a>
                    </h5>
                    <hr class="my-2">
                    <h5 class="mb-0 mt-2">
                        <a href="#" class="fs-6"><img src={{ asset('gambar/number/number-5.png') }} alt="1"> Galery</a>
                    </h5>
                    <hr class="my-2">
                </div>
                <div class="col-md-8 bg-light rounded-end-2 overflow-auto" style="height: 300px;">
                   <div class="hal1">
                    <p class="m-3"><span class="text-danger fw-bold fs-5">*</span> Data anda akan digunakan sebagai data yang di tampilkan di portofolio Halaman Web</p>
                    <hr>
                    <form class="row g-3">
                        <div class="col-md-12">
                          <label for="inputEmail4" class="form-label">Email</label>
                          <input type="email" class="form-control" id="inputEmail4">
                        </div>
                        <div class="col-md-6">
                          <label for="inputPassword4" class="form-label">Password</label>
                          <input type="password" class="form-control" id="inputPassword4">
                        </div>
                        <div class="col-md-6">
                            <label for="inputPassword4" class="form-label">Ulangi Password</label>
                            <input type="password" class="form-control" id="inputPassword4">
                        </div>
                        <nav aria-label="Page navigation example" class="mt-5">
                            <ul class="pagination justify-content-end">
                              <li class="page-item disabled">
                                <a class="page-link bg-warning">Previous</a>
                              </li>
                              <li class="page-item"><a class="page-link bg-primary" href="#">1</a></li>
                              <li class="page-item"><a class="page-link" href="#">2</a></li>
                              <li class="page-item"><a class="page-link" href="#">3</a></li>
                              <li class="page-item">
                                <a class="page-link bg-success" href="#">Next</a>
                              </li>
                            </ul>
                          </nav>
                      </form>
                   </div>
                </div>
            </div>
        </div>
    </section>
@endsection
