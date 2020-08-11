<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

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
        {{--                    {{$kasus->tanggal}}--}}
    </h2>
    {{--        <h6 class="heading-small text-muted mb-4">Data Pemohon</h6>--}}


    <div class="form-group">
        <label for="exampleInputEmail1">Data Pemohon</label>
        <div readonly class="form-control" id="exampleInputEmail1" style="height: 190px">
            <p style="margin-bottom: 0">Nama Pemohon :
                                {{$p->nama}}
            </p>
            <p style="margin-bottom: 0">No. Telp :
                {{$p->no_telp}}
            </p>
            <p style="margin-bottom: 0">No. KTP :
                {{$p->ktp}}
            </p>
            <p style="margin-bottom: 0">No. KK :
                {{$p->kk}}
            </p>
            <p style="margin-bottom: 0">No. NPWP :
                {{$p->npwp}}
            </p>
            <p style="margin-bottom: 0">
                SPPT :
                {{$p->sppt}}
            </p>
            <p style="margin-bottom: 0">NO. C :
                {{$p->no_c}}
            </p>
            <p style="margin-bottom: 0">Saksi - Saksi :
                {{$p->saksi}}
            </p>

        </div>
    </div>

    <hr class="my-4"/>
    <h6 class="heading-small text-muted mb-4">Foto Berkas</h6>


    <p for="exampleInputEmail1">KTP</p>

    <img
        src="uploads/ktp/{{$p->url_ktp}}"
        style="width: 200px">

    <p for="exampleInputEmail1">NPWP</p>

    <img
        src="uploads/npwp/{{$p->url_npwp}}"
        style="width: 200px">

    <p for="exampleInputEmail1">KK</p>

    <img
        src="uploads/kk/{{$p->url_kk}}"
        style="width: 200px">


</div>
<div style="right:10px;width: 300px;display: inline-block;margin-top:70px">
    <p class="text-center mb-5">Pimpinan</p>
    <p class="text-center">( ........................... )</p>
</div>

<div style="left:10px;width: 300px; margin-left : 100px;display: inline-block">
    <p class="text-center mb-5">Admin</p>
    <p class="text-center">(
                        {{auth()->user()->username}}
        )</p>
</div>


<footer class="footer">
    @php $date = new DateTime("now", new DateTimeZone('Asia/Bangkok') ); @endphp
    <p class="text-right small mb-0 mt-0 pt-0 pb-0"> di cetak oleh :
                        {{auth()->user()->username}}
    </p>
    <p class="text-right small mb-0 mt-0 pt-0 pb-0"> tgl: {{ $date->format('d F Y, H:i:s') }} </p>
</footer>

<!-- JS -->
<script src="js/app.js"></script>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>

</html>
