@extends('admin.base')
@section('content')
    @if(\Illuminate\Support\Facades\Session::has('success'))
        <script>
            Swal.fire({
                title: 'Success',
                text: 'Berhasil Merubah Data',
                icon: 'success',
                confirmButtonText: 'Ok'
            })
        </script>
    @endif
    <!-- Header -->
    <div class="header bg-primary pb-6">
        <div class="container-fluid">
            <div class="header-body">
                <div class="row align-items-center py-4">
                    <div class="col-lg-6 col-7">
                        <h6 class="h2 text-white d-inline-block mb-0">Tambah Data Pemohon</h6>
                        <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="/admin/pemohon">Data Pemohon</a></li>
                                <li class="breadcrumb-item"><a href="#">Tambah Data</a></li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-lg-6 col-5 text-right">
                        <a href="/admin/pemohon/cetak/{{$pemohon->id}}" class="btn btn-md btn-neutral">Cetak</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid mt--6">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card">

                    <div class="card-body">
                        <form method="POST" enctype="multipart/form-data">
                            @csrf
                            <input value="{{$pemohon->id}}" id="id" name="id" hidden>
                            <h6 class="heading-small text-muted mb-4">Data</h6>
                            <div class="pl-lg-4">
                                <div class="row">

                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="namapemohon">Nama Pemohon</label>
                                            <input type="text" id="namapemohon" name="nama"

                                                   value="{{ $pemohon->nama }}"
                                                   class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="ktp">KTP</label>
                                            <input type="text" id="ktp" name="ktp"

                                                   value="{{ $pemohon->ktp }}"
                                                   class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="kk">KK</label>
                                            <input type="text" id="kk" name="kk"

                                                   value="{{ $pemohon->kk }}"
                                                   class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="npwp">NPWP</label>
                                            <input type="text" id="npwp" name="npwp"

                                                   value="{{ $pemohon->npwp }}"
                                                   class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="sppt">SPPT</label>
                                            <input type="text" id="sppt" name="sppt"

                                                   value="{{ $pemohon->sppt }}"
                                                   class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="noc">No. C</label>
                                            <input type="text" id="noc" name="no_c"

                                                   value="{{ $pemohon->no_c }}"
                                                   class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="saksi">Saksi saksi</label>
                                            <input type="text" id="saksi" name="saksi"

                                                   value="{{ $pemohon->saksi }}"
                                                   class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label  for="notelp">No. Telp (62)</label>
                                            <input type="text" id="no_telp" value="{{ $pemohon->no_telp }}" name="no_telp"
                                                   class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr class="my-4"/>

                            <h6 class="heading-small text-muted mb-4">Foto</h6>

                            <div class="row">
                                <div class="col-lg-6">
                                    <a>Foto KTP</a>
                                    <div class="card">
                                        <a style="width: 300px" href="{{asset('/uploads/ktp')}}/{{$pemohon->url_ktp }}"><img
                                                src="{{asset('/uploads/ktp')}}/{{$pemohon->url_ktp }}"
                                                style="width: 300px"></a>
                                    </div>
                                    <a>Ganti Foto KTP</a>
                                    <div class="custom-file">
                                        <label class="custom-file-label" for="fotoKtp">Select file</label>
                                        <input type="file" class="custom-file-input" id="f_ktp"
                                               name="f_ktp" lang="en">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <a>Foto NPWP</a>
                                    <div class="card">
                                        <a style="width: 300px" href="{{asset('/uploads/npwp')}}/{{$pemohon->url_npwp }}"><img
                                                src="{{asset('/uploads/npwp')}}/{{$pemohon->url_npwp }}"
                                                style="width: 300px"></a>
                                    </div>
                                    <a>Foto NPWP</a>
                                    <div class="custom-file">
                                        <label class="custom-file-label" for="fotoKtp">Select file</label>
                                        <input type="file" class="custom-file-input" id="f_npwp"
                                               name="f_npwp" lang="en">
                                    </div>
                                </div>

                                <div class="row mt-4">
                                    <div class="col-lg-12">
                                        <a>Foto KK</a>
                                        <div class="card">
                                            <a style="width: 600px" href="{{asset('/uploads/kk')}}/{{$pemohon->url_kk }}"><img
                                                    src="{{asset('/uploads/kk')}}/{{$pemohon->url_kk }}"
                                                    style="width: 600px"></a>
                                        </div>
                                        <a>Ganti Foto KK</a>
                                        <div class="custom-file">
                                            <label class="custom-file-label" for="fotoKtp">Select file</label>
                                            <input type="file" class="custom-file-input" id="f_kk"
                                                   name="f_kk" lang="en">
                                        </div>
                                    </div>


                                </div>
                                <hr class="my-4"/>

                                <!-- Description -->
                                <div class="col-12 text-right">
                                    <button type="submit" class="btn btn-lg btn-primary">Simpan</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>




@endsection

@section('script')


@endsection
