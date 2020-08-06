<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laporan Kasus Detail</title>
    <!-- Fonts -->

    <!-- Styles -->
    <!-- Font Awesome -->
    <link rel="stylesheet" href="assets/css/bootstrap/bootstrap.css" type="text/css">


</head>

<body>

<style>
    footer {
        position: fixed;
        bottom: 0;
        left: 0;
        right: 0;
        height: 0;
    }
</style>

<br>
<div style="width:100%">
    <h4 class="text-center">Laporan Data Kasus</h4>
</div>
<br>
<br>

<div class="card-body">
    <h2>

    </h2>
    


    <div class="form-group">
        <label for="exampleInputEmail1">Data Pemohon</label>
        <div readonly class="form-control" id="exampleInputEmail1" style="height: 190px">
            <p style="margin-bottom: 0">Nama Pemohon :
                
            </p>
            <p style="margin-bottom: 0">No. KTP :
                
            </p>
            <p style="margin-bottom: 0">No. KK :
                
            </p>
            <p style="margin-bottom: 0">No. NPWP :
                
            </p>
            <p style="margin-bottom: 0">
                SPPT :
                
            </p>
            <p style="margin-bottom: 0">NO. C :
                
            </p>
            <p style="margin-bottom: 0">Saksi - Saksi :
                
            </p>

        </div>
    </div>

    <hr class="my-4"/>
    <h6 class="heading-small text-muted mb-4">Data Kasus</h6>


    <div class="form-group">
        <label for="exampleInputEmail1">No. Registras</label>
        <a readonly class="form-control" id="exampleInputEmail1" style="height: 30px">
           Nama Dokumen :

        </a>
    </div>



    <div class="form-group">
        <label for="exampleInputEmail1">Jenis Kasus</label>
        <a readonly class="form-control" id="exampleInputEmail1" style="height: 30px">
            Tanggal Permohonan

        </a>
    </div>


    <div class="form-group">
        <label for="exampleInputEmail1">Layanan</label>
        <a readonly class="form-control" id="exampleInputEmail1" style="height: 30px">
            Luas Tanah

        </a>
    </div>

    <div class="form-group">
        <label for="exampleInputEmail1">Kronologi Kasus</label>
        <a readonly class="form-control" id="exampleInputEmail1" style="height: 50px">
            Hak Milik


        </a>
    </div>

</div>
<div style="right:10px;width: 300px;display: inline-block;margin-top:70px">
    <p class="text-center mb-5">Pimpinan</p>
    <p class="text-center">( ........................... )</p>
</div>

<div style="left:10px;width: 300px; margin-left : 100px;display: inline-block">
    <p class="text-center mb-5">Admin</p>
    <p class="text-center">(

        )</p>
</div>


<footer class="footer">
    <?php $date = new DateTime("now", new DateTimeZone('Asia/Bangkok') ); ?>
    <p class="text-right small mb-0 mt-0 pt-0 pb-0"> di cetak oleh :

    </p>
    <p class="text-right small mb-0 mt-0 pt-0 pb-0"> tgl: <?php echo e($date->format('d F Y, H:i:s')); ?> </p>
</footer>

<!-- JS -->
<script src="js/app.js"></script>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>

</html>
<?php /**PATH C:\PROJECT\WEBSITE\cilikan\notaris\resources\views/admin/permohonan/cetak.blade.php ENDPATH**/ ?>