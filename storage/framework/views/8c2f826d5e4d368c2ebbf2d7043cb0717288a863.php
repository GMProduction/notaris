<?php $__env->startSection('content'); ?>

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
                                <th scope="col" class="sort" data-sort="status">FIle (Pdf)</th>

                                <th scope="col" class="sort" data-sort="status">Action</th>

                            </tr>
                            </thead>
                            <tbody class="list">

                                <tr>
                                    <td>1</td>
                                    <td>Fernando Tri Nugroho</td>
                                    <td>Sertifikat tanah</td>
                                    <td>04 Agustuts 2020</td>
                                    <td>100 meter</td>
                                    <td>Surakarta</td>
                                    <td>Proses 1</td>
                                    <td>Fernando Tri Nugroho</td>
                                    <td>file001.pdf</td>
                                    <td>
                                        <a href="/admin/detailpermohonan" class="btn btn-sm btn-primary">Detail</a>
                                    </td>












                                </tr>

                            </tbody>
                        </table>
                    </div>
                    <!-- Card footer -->

                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <script>
        $(document).ready(function () {
            $('#tabel').DataTable();
        });
    </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\PROJECT\WEBSITE\cilikan\notaris\resources\views/admin/ukur/ukur.blade.php ENDPATH**/ ?>