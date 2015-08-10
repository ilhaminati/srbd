<!-- Ini Header -->
@include('rb.header')

        <!-- Main content -->
        <div class="alert alert-info" role="alert">
            <a href="#" class="alert-link">{{ Session::get('message') }}</a>
        </div>
        {!! Form::open(array('url' => 'save-data')) !!}
        <section class="content">
            <div class="row">
                <div class="col-md-6">

                    <div class="box box-danger">
                        <div class="box-header">
                            <h3 class="box-title">I</h3>
                        </div>
                        <div class="box-body">
                            <!-- Date dd/mm/yyyy -->
                            <div class="form-group">
                                <label>Nomor Dan Tanggal</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-list-ol"></i>
                                    </div>
                                    <input type="number" class="form-control" name="no_urut" placeholder="Nomor"/>
                                </div><!-- /.input group -->
                            </div><!-- /.form group -->

                            <!-- Date mm/dd/yyyy -->
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="date" class="form-control" name="tanggal" placeholder="Tanggal" />
                                </div><!-- /.input group -->
                            </div><!-- /.form group -->

                            <!-- phone mask -->
                            <div class="form-group">
                                <label>Lokasi</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-map-marker"></i>
                                    </div>
                                    <input type="text" class="form-control" name="desa_kel" placeholder="Desa/Kelurahan" />
                                </div><!-- /.input group -->
                            </div><!-- /.form group -->
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-location-arrow"></i>
                                    </div>
                                    <input type="text" class="form-control" name="kec" placeholder="Kecamatan" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-compass"></i>
                                    </div>
                                    <input type="text" class="form-control" name="kab_kot" placeholder="Kabupaten" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-globe"></i>
                                    </div>
                                    <input type="text" class="form-control" name="provinsi" placeholder="Provinsi" />
                                </div>
                            </div>
                        </div><!-- /.box-body -->
                    </div><!-- /.box -->

                    <div class="box box-info">
                        <div class="box-header">
                            <h3 class="box-title">III</h3>
                        </div>
                        <div class="box-body">
                            <label for="">Informasi Peta</label>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-map"></i>
                                    </div>
                                    <input type="number" class="form-control" name="no_lembar_peta" placeholder="Nomor Lembar Peta" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-map-o"></i>
                                    </div>
                                    <input type="text" class="form-control" name="nama_lembar_peta" placeholder="Nama Lembar Peta" />
                                </div>
                            </div>

                            <!-- Color Picker -->
                            <div class="form-group">
                                <label>Informasi Unsur</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-object-group"></i>
                                    </div>
                                    <input type="text" class="form-control" name="jenis_unsur" placeholder="Jenis" />
                                </div><!-- /.input group -->
                            </div><!-- /.form group -->
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-qrcode"></i>
                                    </div>
                                    <select class="form-control" name="kode_unsur" data-placeholder="Kode">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div><!-- /.input group -->
                            </div><!-- /.form group -->

                            <!-- time Picker -->
                            <div class="">
                                <div class="form-group">
                                    <label>Informasi Genetik</label>
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-bars"></i>
                                        </div>
                                        <input type="text" class="form-control" name="nama_gen" placeholder="Nama Genetik"/>
                                    </div><!-- /.input group -->
                                </div><!-- /.form group -->
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-subscript"></i>
                                        </div>
                                        <input type="text" class="form-control" name="sub_nama_gen" placeholder="Sub Nama Genetik"/>
                                    </div><!-- /.input group -->
                                </div><!-- /.form group -->
                            </div>
                        </div><!-- /.box-body -->
                    </div><!-- /.box -->
                    <div class="box box-danger">
                        <div class="box-header">
                            <h3 class="box-title">VI</h3>
                        </div>
                        <div class="box-body">
                            <div class="form-group">
                                <label>Informasi Petugas</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-user"></i>
                                    </div>
                                    <input type="date" class="form-control pull-right" name="tanggal2" placeholder="Tanggal" />
                                </div><!-- /.input group -->
                            </div><!-- /.form group -->
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-user"></i>
                                    </div>
                                    <input type="text" class="form-control pull-right" name="jabatan" placeholder="Jabatan" />
                                </div><!-- /.input group -->
                            </div><!-- /.form group -->
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-user"></i>
                                    </div>
                                    <input type="text" class="form-control pull-right" name="kecamatan" placeholder="Kecamatan" />
                                </div><!-- /.input group -->
                            </div><!-- /.form group -->
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-user"></i>
                                    </div>
                                    <input type="text" class="form-control pull-right" name="nama_pejabat" placeholder="Nama Pejabat" />
                                </div><!-- /.input group -->
                            </div><!-- /.form group -->
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-user"></i>
                                    </div>
                                    <input type="number" class="form-control pull-right" name="nip" placeholder="NIP" />
                                </div><!-- /.input group -->
                            </div><!-- /.form group -->
                        </div><!-- /.box -->
                    </div><!-- /.box -->

                </div><!-- /.col (left) -->
                <div class="col-md-6">
                    <div class="box box-primary">
                        <div class="box-header">
                            <h3 class="box-title">II</h3>
                        </div>
                        <div class="box-body">
                            <!-- Date range -->
                            <div class="form-group">
                                <label>Sejarah</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-history"></i>
                                    </div>
                                    <input type="text" class="form-control pull-right" name="asal_bahasa" placeholder="Asal Bahasa" />
                                </div><!-- /.input group -->
                            </div><!-- /.form group -->
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-history"></i>
                                    </div>
                                    <input type="text" class="form-control pull-right" name="arti_nama" placeholder="Arti Nama" />
                                </div><!-- /.input group -->
                            </div><!-- /.form group -->
                            <div class="form-group">
                                <label for="">Sejarah Nama</label>
                                <div class="input-group">
                                    <textarea name="sejarah_nama" id="" cols="67" rows="10"></textarea>
                                </div><!-- /.input group -->
                            </div><!-- /.form group -->

                            <!-- Date and time range -->
                            <div class="form-group">
                                <label>Narasumber</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-user"></i>
                                    </div>
                                    <input type="text" class="form-control pull-right" name="narasumber1" placeholder="Narasumber 1" />
                                </div><!-- /.input group -->
                            </div><!-- /.form group -->
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-user"></i>
                                    </div>
                                    <input type="text" class="form-control pull-right" name="narasumber2" placeholder="Narasumber 2" />
                                </div><!-- /.input group -->
                            </div><!-- /.form group -->
                        </div><!-- /.box-body -->
                    </div><!-- /.box -->

                    <!-- iCheck -->
                    <div class="box box-success">
                        <div class="box-header">
                            <h3 class="box-title">IV</h3>
                        </div>
                        <div class="box-body">
                            <div class="box-body">
                                <label for="">Koordinat Pusat/Muara</label>
                                <div class="row">
                                    <div class="col-xs-3">
                                        <input type="text" class="form-control" name="bt1" placeholder="BT">
                                    </div>
                                    <div class="col-xs-3">
                                        <input type="text" class="form-control" name="ls1" placeholder="LS">
                                    </div>
                                </div>
                                <label for="">Koordinat Pusat/Muara</label>
                                <div class="row">
                                    <div class="col-xs-2">
                                        <input type="text" class="form-control" name="bt2" placeholder="BT">
                                    </div>
                                    <div class="col-xs-2">
                                        <input type="text" class="form-control" name="ls2" placeholder="LS">
                                    </div>
                                    <div class="col-xs-2">
                                        <input type="text" class="form-control" name="panjang" placeholder="P">
                                    </div>
                                    <div class="col-xs-2">
                                        <input type="text" class="form-control" name="luas" placeholder="L">
                                    </div>
                                    <div class="col-xs-2">
                                        <input type="text" class="form-control" name="tinggi" placeholder="T">
                                    </div>
                                </div>
                            </div><!-- /.box-body -->
                        </div><!-- /.box -->
                    </div><!-- /.box -->
                    <div class="box box-info">
                        <div class="box-header">
                            <h3 class="box-title">V</h3>
                        </div>
                        <div class="box-body">
                            <div class="form-group">
                                <label>Petugas Inventarisir</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-user"></i>
                                    </div>
                                    <input type="text" class="form-control pull-right" name="petugas1" placeholder="Petugas 1" />
                                </div><!-- /.input group -->
                            </div><!-- /.form group -->
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-user"></i>
                                    </div>
                                    <input type="text" class="form-control pull-right" name="petugas2" placeholder="Petugas 2" />
                                </div><!-- /.input group -->
                            </div><!-- /.form group -->
                        </div><!-- /.box -->
                    </div><!-- /.box -->
                    <button type="submit" class="btn btn-primary btn-lg btn-block">Submit</button>
                    <button type="reset" class="btn btn-default btn-lg btn-block" value="Reset">Reset</button>
                    {!! Form::open() !!}
                </div><!-- /.col (right) -->
            </div><!-- /.row -->
        </section>
    </div>
@include('rb.footer')
