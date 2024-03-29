@extends('navbar')
@section('content')
    @if(\Illuminate\Support\Facades\Session::has('success'))
        <script>
            alert('Pesanan Berhasil Di Simpan!');
        </script>
    @endif
    @if(\Illuminate\Support\Facades\Session::has('fail'))
        <script>
            alert('Pesanan Gagal Di Simpan!');
        </script>
    @endif
    <section class="container mt-5 mb-5">
        <div class="row">

        </div>

        <div class="d-block bg-gradient-warning" style="height: 3px; width: 300px; margin-top: 50px"></div>
        <p class="text-gray" style="font-size: 25px">Progress</p>

        <form method="POST" enctype="multipart/form-data">
            @csrf
            <h6 class="heading-small text-muted mb-4">Data</h6>
            <div class="pl-lg-4">
                <div class="row">

                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="namapemohon">Nama Pemohon</label>
                            <input readonly type="text" id="namapemohon" name="namapemohon" value="{{ $permohonan->pemohon->nama }}"
                                   class="form-control">
                        </div>
                    </div>


                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="namaDokumen">Nama Dokumen</label>
                            <input readonly type="text" id="namaDokumen" name="namaDokumen" value="{{ $permohonan->nama_dokumen }}"
                                   class="form-control">
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="tanggal" class="form-control-label">Tanggal Permohonan</label>
                            <input readonly class="form-control" type="text" id="form" value="{{ $permohonan->created_at }}"
                                   name="form">
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="luastanah">Luas Tanah</label>
                            <input readonly type="number" id="luastanah" name="luastanah" value="{{ $permohonan->luas_sementara }}"
                                   class="form-control">
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="hakmilik">Hak Milik</label>
                            <input readonly type="text" id="hakmilik" name="hakmilik" value="{{ $permohonan->hak_milik }}"
                                   class="form-control">
                        </div>
                    </div>

                    @php
                        global $status;

                    @endphp
                    @switch($permohonan->status)
                        @case(0)
                        @php $status = 'Menunggu' @endphp
                        @break
                        @case(1)
                        @php $status = 'Proses Penandatanganan Akta di Notaris PPAT' @endphp
                        @break
                        @case(2)
                        @php $status = 'Berkas berada di Kantor Badan Keuangan Daerah (BKD)' @endphp
                        @break
                        @case(3)
                        @php $status = 'Pajak Pembeli Sudah Jadi' @endphp
                        @break
                        @case(4)
                        @php $status = 'Berkas berada di Kantor Pelayanan Pajak Pratama (KPP)' @endphp
                        @break
                        @case(5)
                        @php $status = 'Pajak Penjual Sudah Jadi' @endphp
                        @break
                        @case(6)
                        @php $status = 'Proses Penataan Berkas yang akan di ajukan ke BPN' @endphp
                        @break
                        @case(7)
                        @php $status = 'Berkas Masuk Ke BPN' @endphp
                        @break
                        @case(8)
                        @php $status = 'Selesai' @endphp
                        @break
                    @endswitch

                    <div class="col-lg-12">

                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Status</label>
                            <textarea class="form-control" readonly id="status" name="status" rows="3">
                                {{ $status }}
                            </textarea>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="form-group">
                            <a href="{{ asset('/uploads/permohonan') }}/{{$permohonan->url}}" class="btn btn-success text-white">Download File</a>
                        </div>
                    </div>
                </div>
            </div>


            <h6 class="heading-small text-muted mb-4 mt-4">Hasil Ukur</h6>
            <div class="pl-lg-4">

                <div class="row">
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="hasilukurtanah">Luas Tanah</label>
                            <input readonly type="text" id="hasilukurtanah" name="hasilukurtanah" value="{{ $permohonan->luas_ukur}}"
                                   class="form-control">
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="tanggalukur">Tanggal Ukur</label>
                            <input readonly type="text" id="tanggalukur" name="tanggalukur" value="{{ $permohonan->tgl_ukur }}"
                                   class="form-control">
                        </div>
                    </div>

                </div>

            </div>
        </form>
    </section>
{{--        <section class="container">--}}
{{--            <div class="row">--}}
{{--                @foreach($products as $v)--}}
{{--                    <div class="col-3">--}}
{{--                        <div class="card">--}}
{{--                            <img class="card-img-top" src="{{asset('/uploads/image')}}/{{$v->url}}"--}}
{{--                                 alt="Card image cap">--}}
{{--                            <div class="card-body">--}}
{{--                                <h5 class="card-title mb-0">{{ $v->nama }}</h5>--}}
{{--                                <h4 class="card-title text-warning mt-1 mb-2">--}}
{{--                                    Rp {{ number_format($v->harga, 0, ',', '.') }} /pcs</h4>--}}
{{--                                <p class="card-text">{{ $v->deskripsi }}</p>--}}
{{--                                <a href="/product/{{ $v->id }}" class="btn btn-warning">Detail</a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                @endforeach--}}

{{--            </div>--}}
{{--        </section>--}}

        @endsection

        @section('script')


            <script>
                {{--async function addToCart(redirect) {--}}
                {{--    let data = {--}}
                {{--        '_token': "{{ csrf_token() }}",--}}
                {{--        id: '{{ $product->id }}',--}}
                {{--        harga: '{{ $product->harga - $product->diskon}}',--}}
                {{--        qty: $('#qty').val(),--}}
                {{--        detail: '',--}}
                {{--        tipe: 'order',--}}
                {{--    };--}}
                {{--    try {--}}
                {{--        let res = await $.post('/ajax/addToCart', data);--}}
                {{--        if (redirect) {--}}
                {{--            window.location.href = '/cart'--}}
                {{--        }--}}
                {{--        alert('Pesanan Berhasil Masuk Ke Keranjang')--}}
                {{--    } catch (e) {--}}
                {{--        alert('Terjadi Kesalahan\nPesanan Gagal Masuk Ke Keranjang\n' + e.message);--}}
                {{--    }--}}
                {{--}--}}

                // $(document).ready(function () {
                //     const minus = $('.quantity__minus');
                //     const plus = $('.quantity__plus');
                //     const input = $('.quantity__input');
                //     minus.click(function (e) {
                //         e.preventDefault();
                //         var value = input.val();
                //         if (value > 1000) {
                //             value = value - 50;
                //         }
                //         input.val(value);
                //     });
                //
                //     plus.click(function (e) {
                //         e.preventDefault();
                //         var value = input.val();
                //         value = parseInt(value) + 50;
                //         input.val(value);
                //     })
                // });
            </script>
    @endsection

