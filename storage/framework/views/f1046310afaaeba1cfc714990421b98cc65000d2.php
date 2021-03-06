<?php $__env->startSection('content'); ?>
    <?php if(\Illuminate\Support\Facades\Session::has('success')): ?>
        <script>
            Swal.fire({
                title: 'Success',
                text: 'Berhasil Menyimpan Data',
                icon: 'success',
                confirmButtonText: 'Ok'
            })
        </script>
    <?php endif; ?>
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
                                <li class="breadcrumb-item"><a href="/mitra/iklan">Data Pemohon</a></li>
                                <li class="breadcrumb-item"><a href="#">Tambah Data</a></li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-lg-6 col-5 text-right">
                        <a href="/admin/permohonan/cetak" class="btn btn-md btn-neutral">Cetak</a>
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
                            <?php echo csrf_field(); ?>
                            <h6 class="heading-small text-muted mb-4">Data</h6>
                            <div class="pl-lg-4">
                                <div class="row">

                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="namapemohon">Nama Pemohon</label>
                                            <input readonly type="text" id="namapemohon" name="namapemohon"
                                                   class="form-control">
                                        </div>
                                    </div>


                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="namaDokumen">Nama Dokumen</label>
                                            <input readonly type="text" id="namaDokumen" name="namaDokumen"
                                                   class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="tanggal" class="form-control-label">Tanggal Permohonan</label>
                                            <input readonly class="form-control" type="date" id="form"
                                                   name="form">
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="luastanah">Luas Tanah</label>
                                            <input readonly type="number" id="luastanah" name="luastanah"
                                                   class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="hakmilik">Hak Milik</label>
                                            <input readonly type="text" id="hakmilik" name="hakmilik"
                                                   class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="status">Status</label>
                                            <input readonly type="text" id="status" name="status"
                                                   class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <a class="btn btn-success text-white">Download File</a>
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
                                                   class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="tanggalukur">Tanggal Ukur</label>
                                            <input readonly type="text" id="tanggalukur" name="tanggalukur"
                                                   class="form-control">
                                        </div>
                                    </div>

                                </div>
                                <hr class="my-4"/>
                                <!-- Description -->
                                <div class="col-12 text-right">
                                    <a class="btn btn-lg btn-success text-white" href="https://wa.me/628975050520?text=Ini%20nomor%20penjualan%20anda%20(nomor)">Kirim No permohonan</a>
                                    <a class="btn btn-lg btn-warning text-white" data-toggle="modal" data-target="#exampleModalCenter">Input Ukur</a>
                                    <button type="submit" class="btn btn-lg btn-primary">Proses</button>
                                </div>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                    <div class="form-group">
                                                        <label for="tanggalukur" class="form-control-label">Tanggal Ukur</label>
                                                        <input class="form-control" type="date" id="form"
                                                               name="form">
                                                    </div>

                                                    <div class="form-group">
                                                        <label  for="luastanah">Luas Tanah</label>
                                                        <input type="number" id="luastanah" name="luastanah"
                                                               class="form-control">
                                                    </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary" >Simpan</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>




<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\PROJECT\WEBSITE\cilikan\notaris\resources\views/admin/permohonan/detailpermohonan.blade.php ENDPATH**/ ?>