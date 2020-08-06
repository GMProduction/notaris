@extends('navbar')
@section('content')
    <div id="carouselExampleIndicators" class="carousel slide ml-auto mr-auto" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner text-center">
            <div class="carousel-item active">
                <img class="d-block w-100" src="{{asset('assets/img/slider/slider1.webp')}}" alt="First slide"
                     style="height: 550px; object-fit: cover">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{asset('assets/img/slider/slider2.jpg')}}" alt="Second slide"
                     style="height: 550px; object-fit: cover">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{asset('assets/img/slider/slider3.webp')}}" alt="Third slide"
                     style="height: 550px; object-fit: cover">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <section class="container">
        <div class="card m--6" style="height: 200px">
            <div class="text-center mt-4 mb-0 text-primary">
                <a class="text-gray" style="font-size: 20px; font-weight: lighter">Masukan nomor transaksi anda</a>
                <div class="d-block bg-gradient-primary ml-auto mr-auto" style="height: 3px; width: 300px"></div>
            </div>

            <div style="display: flex " class="ml-auto mr-auto mt-3">
                <div class="form-group mr-3" style="width: 300px">
                    <input type="text" id="saksi" name="saksi"
                           class="form-control">
                </div>
                <button class="btn btn-primary btn-sm" style="height: 45px; width: 75px">Cari</button>
            </div>
        </div>
    </section>

    <div style="height: 100px"></div>

@endsection

@section('script')


@endsection
