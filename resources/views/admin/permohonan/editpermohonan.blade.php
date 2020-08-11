@extends('admin.base')
@section('content')
    @if(\Illuminate\Support\Facades\Session::has('success'))
        <script>
            Swal.fire({
                title: 'Success',
                text: 'Berhasil merubah Data',
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
                        <h6 class="h2 text-white d-inline-block mb-0">Edit Data Pemohon</h6>
                        <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="/admin/permohonan">Data Permohonan</a></li>
                                <li class="breadcrumb-item"><a href="#">Edit Data</a></li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-lg-6 col-5 text-right">
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
                            <input id="id" name="id" value="{{$permohonan->id}}" hidden>
                            <h6 class="heading-small text-muted mb-4">Data</h6>
                            <div class="pl-lg-4">
                                <div class="row">

                                    <div class="col-lg-4">
                                        <label  for="namaDokumen">Nama Pemohon</label>
                                        <select class="form-control" id="pemohon_id" name="pemohon_id">
                                            @foreach($pemohon as $v)
                                                <option value="{{ $v->id }}" {{$permohonan->pemohon->id == $v->id ? 'selected' : ''}}>{{ $v->nama }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label  for="namaDokumen">Nama Dokumen</label>
                                            <input type="text" id="namaDokumen" name="namaDokumen" value="{{$permohonan->nama_dokumen}}"
                                                   class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="tanggal" class="form-control-label">Tanggal Permohonan</label>
                                            <input class="form-control" type="date" id="form" value="{{$permohonan->tgl_permohonan}}"
                                                   name="tgl_permohonan">
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label  for="luastanah">Luas Tanah</label>
                                            <input type="number" id="luas_sementara" name="luas_sementara" value="{{$permohonan->luas_sementara}}"
                                                   class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label  for="hakmilik">Hak Milik</label>
                                            <input type="text" id="hak_milik" name="hak_milik" value="{{$permohonan->hak_milik}}"
                                                   class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label  for="hakmilik">Lokasi</label>
                                            <input type="text" id="lokasi" name="lokasi" value="{{$permohonan->lokasi}}"
                                                   class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <a class="btn btn-success text-white"
                                               href="{{ asset('/uploads/permohonan') }}/{{$permohonan->url}}"
                                               target="_blank">Download File</a>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <a>FIle (pdf)</a>
                                            <div class="custom-file">
                                                <label class="custom-file-label" for="filePermohonan">Select file</label>
                                                <input type="file" class="custom-file-input" id="filePermohonan" accept="application/pdf"
                                                       name="filePermohonan" lang="en">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <hr class="my-4"/>
                            <!-- Description -->
                            <div class="col-12 text-right">
                                <button type="submit" class="btn btn-lg btn-primary">Simpan</button>
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
