<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Sistem Rupabumi</title>

    <!-- Bootstrap core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <style>
        body {
            padding-top: 50px;
        }

        .starter-template {
            padding: 40px 15px;
            text-align: center;
        }
    </style>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Sistem Rupabumi</a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="{{ URL::to('/') }}">Home</a></li>
                <li><a href="{{ URL::to('/view') }}">Lihat</a></li>
                <li><a href="#contact">Bantuan</a></li>
            </ul>
        </div>
        <!--/.nav-collapse -->
    </div>
</div>

<div class="container">
    {{ Session::get('message') }}
    {!! Form::open(array('url' => 'save-data')) !!}
    	<legend>Input Data</legend>

    	<div class="form-group">
    		<label>No</label>
    		<input type="number" class="form-control" name="no_urut" id="no_urut">
    	</div>
        <div class="form-group">
            <label>Tanggal</label>
            <input type="date" class="form-control" name="tanggal" id="tanggal">
        </div>
        <div class="form-group">
            <label>Desa/Kelurahan</label>
            <input type="text" class="form-control" name="desa_kel" id="desa_kel">
        </div>
        <div class="form-group">
            <label>Kecamatan</label>
            <input type="text" class="form-control" name="kec" id="kec">
        </div>
        <div class="form-group">
            <label>Kabupaten/Kota</label>
            <input type="text" class="form-control" name="kab_kot" id="kab_kot">
        </div>
        <div class="form-group">
            <label>Provinsi</label>
            <input type="text" class="form-control" name="provinsi" id="provinsi">
        </div>
        <div class="form-group">
            <label>No Lembar Peta</label>
            <input type="number" class="form-control" name="no_lembar_peta" id="no_lembar_peta">
        </div>
        <div class="form-group">
            <label>Nama Lembar Peta</label>
            <input type="text" class="form-control" name="nama_lembar_peta" id="nama_lembar_peta">
        </div>
        <div class="form-group">
            <label>Jenis Unsur</label>
            <input type="text" class="form-control" name="jenis_unsur" id="jenis_unsur">
        </div>
        <div class="form-group">
            <label>Kode Unsur</label>
            <input type="number" class="form-control" name="kode_unsur" id="kode_unsur">
        </div>
        <div class="form-group">
            <label>Nama genetik</label>
            <input type="text" class="form-control" name="nama_gen" id="nama_gen">
        </div>
        <div class="form-group">
            <label>Sub Nama Genetik</label>
            <input type="text" class="form-control" name="sub_nama_gen" id="sub_nama_gen">
        </div>
        <div class="form-group">
            <label>Asal Bahasa</label>
            <input type="text" class="form-control" name="asal_bahasa" id="asal_bahasa">
        </div>
        <div class="form-group">
            <label>Arti Nama</label>
            <input type="text" class="form-control" name="arti_nama" id="arti_nama">
        </div>
        <div class="form-group">
            <label>Sejarah Nama</label>
            <input type="text" class="form-control" name="sejarah_nama" id="sejarah_nama">
        </div>
        <div class="form-group">
            <label>Narasumber 1</label>
            <input type="text" class="form-control" name="narasumber1" id="narasumber1">
        </div>
        <div class="form-group">
            <label>Narasumber 2</label>
            <input type="text" class="form-control" name="narasumber2" id="narasumber2">
        </div>
        <div class="form-group">
            <label>Koordinat BT 1</label>
            <input type="number" class="form-control" name="bt1" id="bt1">
        </div>
        <div class="form-group">
            <label>Koordinat LS 1</label>
            <input type="number" class="form-control" name="ls1" id="ls1">
        </div>
        <div class="form-group">
            <label>Koordinat BT 2</label>
            <input type="number" class="form-control" name="bt2" id="bt2">
        </div>
        <div class="form-group">
            <label>Koordinat LS 2</label>
            <input type="number" class="form-control" name="ls2" id="ls2">
        </div>
        <div class="form-group">
            <label>Panjang</label>
            <input type="number" class="form-control" name="panjang" id="panjang">
        </div>
        <div class="form-group">
            <label>Luas</label>
            <input type="number" class="form-control" name="luas" id="luas">
        </div>
        <div class="form-group">
            <label>Tinggi</label>
            <input type="number" class="form-control" name="tinggi" id="tinggi">
        </div>
        <div class="form-group">
            <label>Petugas Inventarisir 1</label>
            <input type="text" class="form-control" name="petugas1" id="petugas1">
        </div>
        <div class="form-group">
            <label>Petugas Inventarisir 2</label>
            <input type="text" class="form-control" name="petugas2" id="petugas2">
        </div>
        <div class="form-group">
            <label>Tanggal</label>
            <input type="date" class="form-control" name="tanggal2" id="tanggal2">
        </div>
        <div class="form-group">
            <label>Jabatan</label>
            <input type="text" class="form-control" name="jabatan" id="jabatan">
        </div>
        <div class="form-group">
            <label>Kecamatan</label>
            <input type="text" class="form-control" name="kecamatan" id="kecamatan">
        </div>
        <div class="form-group">
            <label>Nama Pejabat</label>
            <input type="text" class="form-control" name="nama_pejabat" id="nama_pejabat">
        </div>
        <div class="form-group">
            <label>NIP</label>
            <input type="number" class="form-control" name="nip" id="nip">
        </div>



    	<button type="submit" class="btn btn-primary">Submit</button>
    {!! Form::close() !!}


</div>
<!-- /.container -->

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>
