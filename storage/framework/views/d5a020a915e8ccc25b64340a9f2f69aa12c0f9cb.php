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
                        <h6 class="h2 text-white d-inline-block mb-0">Tambah Data Pemohon</h6>
                        <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="/mitra/iklan">Data Pemohon</a></li>
                                <li class="breadcrumb-item"><a href="#">Tambah Data</a></li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-lg-6 col-5 text-right">
                        <a href="/admin/pemohon/cetak" class="btn btn-md btn-neutral">Cetak</a>
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
                                            <input type="text" id="namapemohon" name="namapemohon"
                                                   readonly
                                                   class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="ktp">KTP</label>
                                            <input type="text" id="ktp" name="ktp"
                                                   readonly
                                                   class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="kk">KK</label>
                                            <input type="text" id="kk" name="kk"
                                                   readonly
                                                   class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="npwp">NPWP</label>
                                            <input type="text" id="npwp" name="npwp"
                                                   readonly
                                                   class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="sppt">SPPT</label>
                                            <input type="text" id="sppt" name="sppt"
                                                   readonly
                                                   class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="noc">No. C</label>
                                            <input type="text" id="noc" name="noc"
                                                   readonly
                                                   class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="saksi">Saksi saksi</label>
                                            <input type="text" id="saksi" name="saksi"
                                                   readonly
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
                                        <a style="width: 300px" href="<?php echo e(asset('assets/img/theme/ktp.jpeg')); ?>"><img
                                                src="<?php echo e(asset('assets/img/theme/ktp.jpeg')); ?>"
                                                style="width: 300px"></a>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <a>Foto NPWP</a>
                                    <div class="card">
                                        <a style="width: 300px" href="<?php echo e(asset('assets/img/theme/npwp.jpg')); ?>"><img
                                                src="<?php echo e(asset('assets/img/theme/npwp.jpg')); ?>"
                                                style="width: 300px"></a>
                                    </div>
                                </div>

                                <div class="row mt-4">
                                    <div class="col-lg-12">
                                        <a>Foto KK</a>
                                        <div class="card">
                                            <a style="width: 600px" href="<?php echo e(asset('assets/img/theme/kk.jpg')); ?>"><img
                                                    src="<?php echo e(asset('assets/img/theme/kk.jpg')); ?>"
                                                    style="width: 600px"></a>
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




<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\PROJECT\WEBSITE\cilikan\notaris\resources\views/admin/pemohon/detailpemohon.blade.php ENDPATH**/ ?>