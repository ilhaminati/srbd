@include('rb.header')
<table class="table table-striped">
    <thead>
    <tr>
        <th>#</th>
        <th>tanggal</th>
        <th>Desa/Kelurahan</th>
        <th>Kecamatan</th>
        <th>Kabupaten/Kota</th>
        <th>No Lembar Peta</th>
        <th>Nama Lembar Peta</th>
        <th>Jenis Unsur</th>
        <th>Kode Unsur</th>
        <th>Nama Genetik</th>
        <th>Sub Nama Genetik</th>

        <th>Edit</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($rb as $rb)
        <tr>
            <th scope="row">{{ $rb->no_urut }}</th>
            <td>{{ $rb->tanggal }}</td>
            <td>{{ $rb->desa_kel }}</td>
            <td>{{ $rb->kec }}</td>
            <td>{{ $rb->provinsi }}</td>
            <td>{{ $rb->no_lembar_peta }}</td>
            <td>{{ $rb->nama_lembar_peta }}</td>
            <td>{{ $rb->jenis_unsur }}</td>
            <td>{{ $rb->kode_unsur }}</td>
            <td>{{ $rb->nama_gen }}</td>
            <td>{{ $rb->sub_nama_gen }}</td>
            <td><a href="#"><i class="fa fa-pencil"></i></a> <a href="#"><i class="fa fa-trash-o"></i></a></td>
        </tr>
    @endforeach
    </tbody>
</table>
</div>
@include('rb.footer')