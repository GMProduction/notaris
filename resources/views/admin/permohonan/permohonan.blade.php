@extends('admin.base')
@section('content')

    <!-- Header -->
    <div class="header bg-primary pb-6">
        <div class="container-fluid">
            <div class="header-body">
                <div class="row align-items-center py-4">
                    <div class="col-lg-6 col-7">
                        <h6 class="h2 text-white d-inline-block mb-0">Data Permohonan</h6>
                        <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="#">Data Permohonan</a></li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-lg-6 col-5 text-right">
                        <a href="/admin/tambahpermohonan" class="btn btn-md btn-neutral">Tambah Data</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6">
        <div class="row">
            <div class="col">
                <div class="card">
                    <!-- Card header -->
                    <div class="card-header border-0">
                        <h3 class="mb-0">Tabel Permohonan</h3>
                    </div>
                    <!-- Light table -->
                    <div class="table-responsive">
                        <table id="tabel" class="table align-items-center table-flush">
                            <thead class="thead-light">
                            <tr>
                                <th scope="col" class="sort" data-sort="name">#</th>
                                <th scope="col" class="sort" data-sort="budget">Nama Pemohon</th>
                                <th scope="col" class="sort" data-sort="status">Nama Dokumen</th>
                                <th scope="col" class="sort" data-sort="status">Tanggal Permohonan</th>
                                <th scope="col" class="sort" data-sort="status">Luas Tanah</th>
                                <th scope="col" class="sort" data-sort="status">Lokasi Tanah</th>
                                <th scope="col" class="sort" data-sort="status">Status</th>
                                <th scope="col" class="sort" data-sort="status">Hak Milik</th>
                                <th scope="col" class="sort" data-sort="status">No. Permohonan</th>
                                <th scope="col" class="sort" data-sort="status">FIle (Pdf)</th>

                                <th scope="col" class="sort text-center" data-sort="status" colspan="3">Action</th>

                            </tr>
                            </thead>
                            <tbody class="list">
                            @foreach($permohonan as $v)
                                <tr>
                                    <td>{{ $loop->index + 1}}</td>
                                    <td>{{ $v->pemohon->nama}}</td>
                                    <td>{{ $v->nama_dokumen}}h</td>
                                    <td>{{ $v->tgl_permohonan}}</td>
                                    <td>{{ $v->luas_sementara}}</td>
                                    <td>{{ $v->lokasi}}</td>
                                    <td>{{ $v->status}}</td>
                                    <td>{{ $v->hak_milik}}</td>
                                    <td>{{ $v->no_permohonan}}</td>
                                    <td><a href="{{ asset('/uploads/permohonan') }}/{{ $v->url }}">{{ $v->url}}</a></td>
                                    <td>
                                        <a href="/admin/permohonan/{{ $v->id }}" class="btn btn-sm btn-primary">Detail</a>
                                    </td>
                                    <td>
                                        <a href="https://wa.me/{{ $v->pemohon->no_telp}}?text=Berikut%20ini%20nomor%20dokumen%20Anda%20{{ $v->no_permohonan}}" class="btn btn-sm btn-success">Kirim nomor permohonan</a>
                                    </td>
                                    <td>
                                        <a href="/admin/permohonan/edit/{{ $v->id }}" class="btn btn-sm btn-warning">Edit</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- Card footer -->

                </div>
            </div>
        </div>
    </div>

@endsection

@section('script')
    <script>
        $(document).ready(function () {
            $('#tabel').DataTable();
        });
    </script>

@endsection
