@extends('admin.base')
@section('content')
    @if (\Illuminate\Support\Facades\Session::has('success'))
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
                        <h6 class="h2 text-white d-inline-block mb-0">Detail Data Permohonan</h6>
                        <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="/admin/permohonan">Data Pemohon</a></li>
                                <li class="breadcrumb-item"><a href="#">Tambah Data</a></li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-lg-6 col-5 text-right">
                        <a href="/admin/permohonan/cetak/{{ $permohonan->id }}" class="btn btn-md btn-neutral">Cetak</a>
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
                        <h6 class="heading-small text-muted mb-4">Data</h6>
                        <div class="pl-lg-4">
                            <div class="row">

                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="namapemohon">Nama Pemohon</label>
                                        <input readonly type="text" id="namapemohon" name="namapemohon"
                                            class="form-control" value="{{ $permohonan->pemohon->nama }}">
                                    </div>
                                </div>


                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="namaDokumen">Nama Dokumen</label>
                                        <input readonly type="text" id="namaDokumen" name="namaDokumen"
                                            class="form-control" value="{{ $permohonan->nama_dokumen }}">
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="tanggal" class="form-control-label">Tanggal Permohonan</label>
                                        <input readonly class="form-control" type="date" id="form" name="form"
                                            value="{{ $permohonan->tgl_permohonan }}">
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="luastanah">Luas Tanah</label>
                                        <input readonly type="number" id="luastanah" name="luastanah" class="form-control"
                                            value="{{ $permohonan->luas_sementara }}">
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="hakmilik">Hak Milik</label>
                                        <input readonly type="text" id="hakmilik" name="hakmilik" class="form-control"
                                            value="{{ $permohonan->hak_milik }}">
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
                                        <label for="status">Status</label>
                                        <input readonly type="text" id="status" name="status" class="form-control"
                                            value="{{ $status }}">
                                    </div>
                                </div>

                                <div class="col-lg-6 col-lg-offset-6">
                                    <div class="form-group">
                                        <a class="btn btn-success text-white"
                                            href="{{ asset('/uploads/permohonan') }}/{{ $permohonan->url }}"
                                            target="_blank">Download File</a>
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
                                        <input readonly type="text" id="hasilukurtanah" name="hasilukurtanah"
                                            class="form-control" value="{{ $permohonan->luas_ukur }}">
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="tanggalukur">Tanggal Ukur</label>
                                        <input readonly type="text" id="tanggalukur" name="tanggalukur"
                                            class="form-control" value="{{ $permohonan->tgl_ukur }}">
                                    </div>
                                </div>

                            </div>
                            <hr class="my-4" />
                            <!-- Description -->
                            <div class="col-12 text-right">
                                <a class="btn btn-lg btn-success text-white"
                                    href="https://wa.me/628975050520?text=Ini%20nomor%20permohonan%20anda%20{{ $permohonan->no_permohonan }}">Kirim
                                    No permohonan</a>
                                <a class="btn btn-lg btn-warning text-white" data-toggle="modal"
                                    data-target="#exampleModalCenter">Input Ukur</a>
                                <a class="btn btn-lg btn-primary dropdown-toggle" href="#" role="button"
                                    id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">Proses</a>

                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <a class="dropdown-item" href="#" onclick="edit_status(1)">Proses Penandatanganan Akta
                                        di Notaris PPAT</a>
                                    <a class="dropdown-item" href="#" onclick="edit_status(2)">Berkas berada di Kantor
                                        Badan Keuangan Daerah (BKD)</a>
                                    <a class="dropdown-item" href="#" onclick="edit_status(3)">Pajak Pembeli Sudah Jadi</a>
                                    <a class="dropdown-item" href="#" onclick="edit_status(4)">Berkas berada di Kantor
                                        Pelayanan Pajak Pratama (KPP)</a>
                                    <a class="dropdown-item" href="#" onclick="edit_status(5)">Pajak Penjual Sudah Jadi</a>
                                    <a class="dropdown-item" href="#" onclick="edit_status(6)">Proses Penataan Berkas yang
                                        akan di ajukan ke BPN</a>
                                    <a class="dropdown-item" href="#" onclick="edit_status(7)">Berkas Masuk Ke BPN</a>
                                    <a class="dropdown-item" href="#" onclick="edit_status(8)">Selesai</a>
                                </div>
                            </div>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form action="/admin/permohonan/patchukur" enctype="multipart/form-data"
                                            method="post">
                                            @csrf
                                            <input type="hidden" value="{{ $permohonan->id }}" name="id">
                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <label for="tanggalukur" class="form-control-label">Tanggal
                                                        Ukur</label>
                                                    <input class="form-control" type="date" id="form" name="tgl_ukur">
                                                </div>

                                                <div class="form-group">
                                                    <label for="luastanah">Luas Tanah</label>
                                                    <input type="number" id="luasukur" name="luasukur"
                                                        class="form-control">
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close
                                                </button>
                                                <button type="submit" class="btn btn-primary">Simpan</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection

@section('script')
    <script>
        $(document).ready(function() {
            if (sessionStorage.getItem('status') === 'Success') {
                Swal.fire({
                    title: 'Success',
                    text: 'Berhasil merubah Data',
                    icon: 'success',
                    confirmButtonText: 'Ok'
                })
                sessionStorage.setItem("status", "end");
            }
        });

        function edit_status(st) {
            let data = {
                '_token': '{{ csrf_token() }}',
                'id': '{{ $permohonan->id }}',
                'status': st
            };
            $.post('/admin/permohonan/edit-status', data, function(dat) {
                if (dat['status'] === 200) {
                    console.log(dat['payload']['data']);
                    sessionStorage.setItem("status", "Success");
                    window.location.reload();
                }
            });

        }
    </script>
@endsection
