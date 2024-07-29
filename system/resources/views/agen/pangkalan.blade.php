@extends('agen.template.base')
@section('content')
    <div class="page-header">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div class="title">
                    <h4>Pangkalan</h4>
                </div>
                <nav aria-label="breadcrumb" role="navigation">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('agen') }}">Agen</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Pangkalan</li>
                    </ol>
                </nav>
            </div>
            <div class="col-md-6 col-sm-12 text-right">
                <div class="dropdown">
                    <a class="btn btn-primary" href="#" data-backdrop="static" data-toggle="modal"
                        data-target="#Medium-modal" type="button">
                        Tambah Pangkalan
                    </a>
                    <div class="modal fade" id="Medium-modal" tabindex="-1" role="dialog"
                        aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="myLargeModalLabel">Large modal</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{ url('agen/pangkalan/add') }}" method="post" style="text-align: left">
                                        @csrf
                                        <div class="form-group">
                                            <label>No Registrasi</label>
                                            <input name="no_registrasi" class="form-control" type="text" required
                                                placeholder="Nama Pangkalan">
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Pangkalan</label>
                                            <input name="nama_pangkalan" class="form-control" type="text" required
                                                placeholder="Nama Pangkalan">
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Pemilik</label>
                                            <input name="nama_pemilik" class="form-control" type="text" required
                                                placeholder="Nama Pemilik Pangkalan">
                                        </div>
                                        <div class="form-group">
                                            <label>NIK KTP</label>
                                            <input name="no_ktp" class="form-control" type="text" required
                                                placeholder="No KTP">
                                        </div>
                                        <div class="form-group">
                                            <label>No Handphone</label>
                                            <input name="no_handphone" class="form-control" type="text" required
                                                placeholder="No Handphone">
                                        </div>
                                        <div class="form-group">
                                            <label>Propinsi</label>
                                            <input name="propinsi" class="form-control" type="text" required
                                                placeholder="Propinsi">
                                        </div>
                                        <div class="form-group">
                                            <label>Kabupaten Kota</label>
                                            <input name="kabupaten_kota" class="form-control" type="text" required
                                                placeholder="Kabupaten Kota">
                                        </div>
                                        <div class="form-group">
                                            <label>Kecamatan</label>
                                            <input name="kecamatan" class="form-control" type="text" required
                                                placeholder="Kecamatan">
                                        </div>
                                        <div class="form-group">
                                            <label>Kelurahan</label>
                                            <input name="kelurahan" class="form-control" type="text" required
                                                placeholder="Kelurahan">
                                        </div>
                                        <div class="form-group">
                                            <label>Kode Pos</label>
                                            <input name="kode_pos" class="form-control" type="text" required
                                                placeholder="Kode Pos">
                                        </div>
                                        <div class="form-group">
                                            <label>Alamat Pangkalan</label>
                                            <input name="alamat" class="form-control" type="text" required
                                                placeholder="Alamat Pangkalan">
                                        </div>



                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Simple Datatable start -->
    <div class="card-box mb-30">
        <div class="pb-20">
            <table class="data-table table hover  nowrap">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>No Registrasi</th>
                        <th>Nama Pangkalan</th>
                        <th>No Telepon</th>
                        <th>Alamat</th>
                        <th>Kode Pos</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($list_pangkalan as $key=>$pangkalan)
                    <tr>
                        <td>{{$key+1}}</td>
                        <td>{{$pangkalan->no_registrasi}}</td>
                        <td>{{$pangkalan->nama_pangkalan}}</td>
                        <td>{{$pangkalan->no_handphone}}</td>
                        <td>{{$pangkalan->alamat}}</td>
                        <td>{{$pangkalan->kode_pos}}</td>
                        <td>
                            <a href='{{url("agen/pangkalan/hapus/$pangkalan->id")}}' class="btn btn-sm btn-danger"><i class="icon-copy dw dw-delete-2"></i> Hapus</a>
                            <button class="btn btn-sm btn-warning" data-toggle="modal" data-target="#edit-{{$pangkalan->id}}"><i class="icon-copy dw dw-edit-2"></i> Edit</button>
                            <button class="btn btn-sm btn-info" data-toggle="modal" data-target="#laporan-{{$pangkalan->id}}"><i class="icon-copy dw dw-clipboard1"></i> Laporan</button>
                            <a href='#' class="btn btn-sm btn-success"><i class="icon-copy dw dw-clipboard1"></i> Pelanggan</a>
                        </td>
                    </tr>                   
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @include('agen.modal_pangkalan')
@endsection
@section('script')
@endsection
