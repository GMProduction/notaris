
<?php $__env->startSection('content'); ?>
    <!-- Header -->
    <div class="header bg-primary pb-6">
        <div class="container-fluid">
            <div class="header-body">
                <div class="row align-items-center py-4">
                    <div class="col-lg-6 col-7">
                        <h6 class="h2 text-white d-inline-block mb-0">Data Permohonan Terbaru</h6>

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
                                <?php $__currentLoopData = $permohonan ?? ''; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($loop->index + 1); ?></td>
                                        <td><?php echo e($v->pemohon->nama); ?></td>
                                        <td><?php echo e($v->nama_dokumen); ?>h</td>
                                        <td><?php echo e($v->tgl_permohonan); ?></td>
                                        <td><?php echo e($v->luas_sementara); ?></td>
                                        <td><?php echo e($v->lokasi); ?></td>
                                        <td><?php echo e($v->status); ?></td>
                                        <td><?php echo e($v->hak_milik); ?></td>
                                        <td><?php echo e($v->no_permohonan); ?></td>
                                        <td><a
                                                href="<?php echo e(asset('/uploads/permohonan')); ?>/<?php echo e($v->url); ?>"><?php echo e($v->url); ?></a>
                                        </td>
                                        <td>
                                            <a href="/admin/permohonan/<?php echo e($v->id); ?>"
                                                class="btn btn-sm btn-primary">Detail</a>
                                        </td>
                                        <td>
                                            <a href="https://wa.me/<?php echo e($v->pemohon->no_telp); ?>?text=Berikut%20ini%20nomor%20dokumen%20Anda%20<?php echo e($v->no_permohonan); ?>"
                                                class="btn btn-sm btn-success">Kirim nomor permohonan</a>
                                        </td>
                                        <td>
                                            <a href="/admin/permohonan/edit/<?php echo e($v->id); ?>"
                                                class="btn btn-sm btn-warning">Edit</a>
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
        $(document).ready(function() {
            $('#tabel').DataTable();
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\PROJECT\WEBSITE\cilikan\notaris\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>