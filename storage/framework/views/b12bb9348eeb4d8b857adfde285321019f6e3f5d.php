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
    <h4 class="text-center">Laporan Data Pemohon</h4>
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
    <h6 class="heading-small text-muted mb-4">Foto Berkas</h6>


    <p for="exampleInputEmail1">KTP</p>

    <img
        src="assets/img/theme/ktp.jpeg"
        style="width: 200px">

    <p for="exampleInputEmail1">NPWP</p>

    <img
        src="assets/img/theme/npwp.jpg"
        style="width: 200px">

    <p for="exampleInputEmail1">KK</p>

    <img
        src="assets/img/theme/kk.jpg"
        style="width: 200px">


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
<?php /**PATH C:\PROJECT\WEBSITE\cilikan\notaris\resources\views/admin/pemohon/cetak.blade.php ENDPATH**/ ?>