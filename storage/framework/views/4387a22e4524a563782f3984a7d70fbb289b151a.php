<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
    <meta name="author" content="Creative Tim">
    <title>Notaris PPAT Candra Wahyu</title>
    <!-- Favicon -->

<!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
    <!-- Icons -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/vendor/nucleo/css/nucleo.css')); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo e(asset('assets/vendor/@fortawesome/fontawesome-free/css/all.min.css')); ?>" type="text/css">
    <!-- Page plugins -->
    <!-- Argon CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/DataTables/datatables.min.css')); ?>"/>
    <link rel="stylesheet" href="<?php echo e(asset('/assets/css/argon.css?v=1.2.0')); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo e(asset('/assets/css/footer.css')); ?>" type="text/css">
    <script src="https://unpkg.com/feather-icons"></script>
</head>

<body style="background-color: #eeeeee">
<!-- Main content -->
<div class="main-content" id="panel">
    <!-- As a link -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white" style="border-bottom: 3px solid #dddddd">
        <a class="navbar-brand text-xl text-primary" href="#" style=" font-weight: bold">Sistem Informasi Permohonan Jual Beli</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ml-auto">
                <a class="nav-item nav-link text-sm ml-3 active" href="/">Beranda <span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link text-sm ml-3" href="/kontak">Kontak Kami</a>

                <?php if(auth()->guard()->check()): ?>
                    <a class="nav-item nav-link text-sm text-warning ml-0" style="font-weight: bold" href="/cart">Keranjang</a>
                    <a class="nav-item nav-link text-sm ml-7 btn btn-outline-warning" style="font-weight: bold" href="/user">Dashboard</a>
                    <a class="nav-item nav-link text-sm text-warning ml-0" href="/logout">Logout</a>
                <?php endif; ?>
                <?php if(auth()->guard()->guest()): ?>
                    <a class="nav-item nav-link text-sm ml-5" style="font-weight: bold" href="/login">Login</a>
                <?php endif; ?>
            </div>
        </div>
    </nav>


    <div class="content-wrapper">
        <?php echo $__env->yieldContent('content'); ?>
    </div>

    <!-- Footer -->
    <footer class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <h6>About</h6>
                    <p class="text-justify">Notaris PPAT Candra Wahyu Nugroho, S.H.,M.Kn</p>
                    <p class="text-justify">Alamat: Jl. Adi Sucipto No.53, Gatak, Gajahan, Kec. Colomadu, Kabupaten Karanganyar, Jawa Tengah 57174
                        </p>
                    <p>Telepon: (0271) 7088153</p>
                    <a href="https://wa.me/6281393966667?text=Halo%20notaris%20PPAT%20Candra%20Wahyu%20Nugroho" style="font-size: 14px; " class="text-white mb-0" >081393966667 (Whatsapp)</a>
                </div>

                <div class="col-xs-6 col-md-3">
                    <h6>Quick Links</h6>
                    <ul class="footer-links">
                        <li><a href="/">Home</a></li>
                        <li><a href="/kontak">Contact Us</a></li>

                    </ul>
                </div>
            </div>
            <hr>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-6 col-xs-12">
                    <p class="copyright-text">Copyright &copy; 2017 All Rights Reserved by
                        <a href="#"></a>.
                    </p>
                </div>

                <div class="col-md-4 col-sm-6 col-xs-12">
                    <ul class="social-icons">
                        <li><a class="facebook" href=""><i class="fab fa-facebook"></i></a></li>
                        <li><a class="dribbble" href=""><i class="fab fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</div>
<!-- Argon Scripts -->
<!-- Core -->
<script src="<?php echo e(asset('assets/vendor/jquery/dist/jquery.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/vendor/js-cookie/js.cookie.js')); ?>"></script>
<script src="<?php echo e(asset('assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js')); ?>"></script>
<!-- Optional JS -->
<script src="<?php echo e(asset('assets/vendor/chart.js/dist/Chart.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/vendor/chart.js/dist/Chart.extension.js')); ?>"></script>
<!-- Argon JS -->
<script src="<?php echo e(asset('assets/js/argon.js?v=1.2.0')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('DataTables/datatables.min.js')); ?>"></script>
<script>
    feather.replace()
</script>
<?php echo $__env->yieldContent('script'); ?>


</body>

</html>
<?php /**PATH C:\PROJECT\WEBSITE\cilikan\notaris\resources\views/navbar.blade.php ENDPATH**/ ?>