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
    <h4 class="text-center">Laporan Data Kasus</h4>
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
                {{$p->pemohon->nama}}
            </p>
            <p style="margin-bottom: 0">No. KTP :
                {{$p->pemohon->ktp}}
            </p>
            <p style="margin-bottom: 0">No. KK :
                {{$p->pemohon->kk}}
            </p>
            <p style="margin-bottom: 0">No. NPWP :
                {{$p->pemohon->npwp}}
            </p>
            <p style="margin-bottom: 0">
                SPPT :
                {{$p->pemohon->sppt}}
            </p>
            <p style="margin-bottom: 0">NO. C :
                {{$p->pemohon->no_c}}
            </p>
            <p style="margin-bottom: 0">Saksi - Saksi :
                {{$p->pemohon->saksi}}
            </p>

        </div>
    </div>

    <hr class="my-4"/>
    <h6 class="heading-small text-muted mb-4"></h6>


    <div class="form-group">
        <a readonly class="form-control" id="exampleInputEmail1" style="height: 30px">
           Nama Dokumen :
            {{$p->nama_dokumen}}
        </a>
    </div>



    <div class="form-group">
        <a readonly class="form-control" id="exampleInputEmail1" style="height: 30px">
            Tanggal Permohonan :
            {{$p->tgl_permohonan}}
        </a>
    </div>


    <div class="form-group">
        <a readonly class="form-control" id="exampleInputEmail1" style="height: 30px">
            Luas Tanah :
            {{$p->luas_ukur}}
        </a>
    </div>

    <div class="form-group">
        <a readonly class="form-control" id="exampleInputEmail1" style="height: 50px">
            Hak Milik :
            {{$p->hak_milik}}
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
