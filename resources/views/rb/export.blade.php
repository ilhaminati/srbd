@include('rb.header')
<section class="content">
        <div>
        @foreach ($rb as $rb)
            <h1 class="text-center">FORMULIR B</h1>
            <h2 class="text-center">INVENTARISASI NAMA RUPABUMI</h2>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <p>No:</p>
                    <h3>A. Data Acuan</h3>
                        <div class="col-md-6">
                            <h3>I. Wilayah</h3>
                            <p>Desa/Kelurahan {{ $rb->desa_kel }}</p>
                            <p>Kecamatan {{ $rb->kec }}</p>
                            <p>Kabupaten/Kota {{ $rb->kab_kot }}</p>
                            <p>Provinsi {{ $rb->provinsi }}</p>
                        </div>
                </div>
                <div class="col-lg-6">
                    <p>Tanggal/Tahun {{ $rb->tanggal }}</p>
                    <div class="col-md-6">
                        <h3>II. Data Dasar Penunjang</h3>
                        <p>No Lembar Peta</p>
                        <p>Nama Lembar Peta</p>
                        <p>Jenis Unsur</p>
                        <p>Kode Unsur</p>
                        <p>Nama Genetik</p>
                        <p>Sub Nama Genetik</p>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </section>
</div>
@include('rb.footer')
