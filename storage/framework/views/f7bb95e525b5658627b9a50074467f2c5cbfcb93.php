
<?php $__env->startSection('content'); ?>

    <!-- Header -->
    <div class="header bg-primary pb-6">
        <div class="container-fluid">
            <div class="header-body">
                <div class="row align-items-center py-4">
                    <div class="col-lg-6 col-7">
                        <h6 class="h2 text-white d-inline-block mb-0">Data Pemohon</h6>
                        <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="#">Data Pemohon</a></li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-lg-6 col-5 text-right">
                        <a href="/admin/tambahpemohon" class="btn btn-md btn-neutral">Tambah Data</a>
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
                        <h3 class="mb-0">Tabel Pemohon</h3>
                    </div>
                    <!-- Light table -->
                    <div class="table-responsive">
                        <table id="tabel" class="table align-items-center table-flush">
                            <thead class="thead-light">
                            <tr>
                                <th scope="col" class="sort" data-sort="name">#</th>
                                <th scope="col" class="sort" data-sort="budget">Nama Pemohon</th>
                                <th scope="col" class="sort" data-sort="status">KTP</th>
                                <th scope="col" class="sort" data-sort="status">KK</th>
                                <th scope="col" class="sort" data-sort="status">NPWP</th>
                                <th scope="col" class="sort" data-sort="status">SPPT</th>
                                <th scope="col" class="sort" data-sort="status">No. C</th>
                                <th scope="col" class="sort" data-sort="status">No. HP</th>
                                <th scope="col" class="sort" data-sort="status">Saksi</th>
                                <th scope="col" class="sort" data-sort="status">Foto. KTP</th>
                                <th scope="col" class="sort" data-sort="status">Foto. KK</th>
                                <th scope="col" class="sort" data-sort="status">Foto. NPWP</th>
                                <th scope="col" class="sort" data-sort="status">Action</th>

                            </tr>
                            </thead>
                            <tbody class="list">
                            <?php $__currentLoopData = $pemohon; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($loop->index + 1); ?></td>
                                    <td><?php echo e($v->nama); ?></td>
                                    <td><?php echo e($v->ktp); ?></td>
                                    <td><?php echo e($v->kk); ?></td>
                                    <td><?php echo e($v->npwp); ?></td>
                                    <td><?php echo e($v->sppt); ?></td>
                                    <td><?php echo e($v->no_c); ?></td>
                                    <td><?php echo e($v->no_telp); ?></td>
                                    <td><?php echo e($v->saksi); ?></td>
                                    <td><a style="height: 70px" href="<?php echo e(asset('/uploads/ktp')); ?>/<?php echo e($v->url_ktp); ?>"><img
                                                src="<?php echo e(asset('/uploads/ktp')); ?>/<?php echo e($v->url_ktp); ?>"
                                                style="height: 70px"></a></td>
                                    <td><a style="height: 70px" href="<?php echo e(asset('/uploads/kk')); ?>/<?php echo e($v->url_kk); ?>"><img
                                                src="<?php echo e(asset('/uploads/kk')); ?>/<?php echo e($v->url_kk); ?>"
                                                style="height: 70px"></a></td>
                                    <td><a style="height: 70px" href="<?php echo e(asset('/uploads/npwp')); ?>/<?php echo e($v->url_npwp); ?>"><img
                                                src="<?php echo e(asset('/uploads/npwp')); ?>/<?php echo e($v->url_npwp); ?>"
                                                style="height: 70px"></a></td>

                                    <td>
                                        <a href="/admin/pemohon/<?php echo e($v->id); ?>" class="btn btn-sm btn-primary">Edit</a>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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

<?php echo $__env->make('admin.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\PROJECT\WEBSITE\cilikan\notaris\resources\views/admin/pemohon/pemohon.blade.php ENDPATH**/ ?>