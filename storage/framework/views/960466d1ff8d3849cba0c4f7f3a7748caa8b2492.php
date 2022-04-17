
<?php $__env->startSection('content'); ?>
    <?php if(\Illuminate\Support\Facades\Session::has('success')): ?>
        <script>
            alert('Pesanan Berhasil Di Simpan!');
        </script>
    <?php endif; ?>
    <?php if(\Illuminate\Support\Facades\Session::has('fail')): ?>
        <script>
            alert('Pesanan Gagal Di Simpan!');
        </script>
    <?php endif; ?>
    <section class="container mt-5 mb-5">
        <div class="row">

        </div>

        <div class="d-block bg-gradient-warning" style="height: 3px; width: 300px; margin-top: 50px"></div>
        <p class="text-gray" style="font-size: 25px">Progress</p>

        <form method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <h6 class="heading-small text-muted mb-4">Data</h6>
            <div class="pl-lg-4">
                <div class="row">

                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="namapemohon">Nama Pemohon</label>
                            <input readonly type="text" id="namapemohon" name="namapemohon" value="<?php echo e($permohonan->pemohon->nama); ?>"
                                   class="form-control">
                        </div>
                    </div>


                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="namaDokumen">Nama Dokumen</label>
                            <input readonly type="text" id="namaDokumen" name="namaDokumen" value="<?php echo e($permohonan->nama_dokumen); ?>"
                                   class="form-control">
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="tanggal" class="form-control-label">Tanggal Permohonan</label>
                            <input readonly class="form-control" type="text" id="form" value="<?php echo e($permohonan->created_at); ?>"
                                   name="form">
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="luastanah">Luas Tanah</label>
                            <input readonly type="number" id="luastanah" name="luastanah" value="<?php echo e($permohonan->luas_sementara); ?>"
                                   class="form-control">
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="hakmilik">Hak Milik</label>
                            <input readonly type="text" id="hakmilik" name="hakmilik" value="<?php echo e($permohonan->hak_milik); ?>"
                                   class="form-control">
                        </div>
                    </div>

                    <?php
                        global $status;

                    ?>
                    <?php switch($permohonan->status):
                        case (0): ?>
                        <?php $status = 'Menunggu' ?>
                        <?php break; ?>
                        <?php case (1): ?>
                        <?php $status = 'Proses Penandatanganan Akta ke badan keuangan daerah' ?>
                        <?php break; ?>
                        <?php case (2): ?>
                        <?php $status = 'Berkas berada di Kantor Badan Keuangan Daerah (BKD)' ?>
                        <?php break; ?>
                        <?php case (3): ?>
                        <?php $status = 'Pajak Pembeli Sudah Jadi' ?>
                        <?php break; ?>
                        <?php case (4): ?>
                        <?php $status = 'Berkas berada di Kantor Pelayanan Pajak Pratama (KPP)' ?>
                        <?php break; ?>
                        <?php case (5): ?>
                        <?php $status = 'Pajak Penjual Sudah Jadi' ?>
                        <?php break; ?>
                        <?php case (6): ?>
                        <?php $status = 'Proses Penataan Berkas yang akan di ajukan ke BPN' ?>
                        <?php break; ?>
                        <?php case (7): ?>
                        <?php $status = 'Selesai' ?>
                        <?php break; ?>
                    <?php endswitch; ?>

                    <div class="col-lg-12">

                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Status</label>
                            <textarea class="form-control" readonly id="status" name="status" rows="3">
                                <?php echo e($status); ?>

                            </textarea>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="form-group">
                            <a href="<?php echo e(asset('/uploads/permohonan')); ?>/<?php echo e($permohonan->url); ?>" class="btn btn-success text-white">Download File</a>
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
                            <input readonly type="text" id="hasilukurtanah" name="hasilukurtanah" value="<?php echo e($permohonan->luas_ukur); ?>"
                                   class="form-control">
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="tanggalukur">Tanggal Ukur</label>
                            <input readonly type="text" id="tanggalukur" name="tanggalukur" value="<?php echo e($permohonan->tgl_ukur); ?>"
                                   class="form-control">
                        </div>
                    </div>

                </div>

            </div>
        </form>
    </section>





















        <?php $__env->stopSection(); ?>

        <?php $__env->startSection('script'); ?>


            <script>
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                

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
    <?php $__env->stopSection(); ?>


<?php echo $__env->make('navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\PROJECT\WEBSITE\cilikan\notaris\resources\views/detail.blade.php ENDPATH**/ ?>