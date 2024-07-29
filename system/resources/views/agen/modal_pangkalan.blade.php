@foreach ($list_pangkalan as $key => $pangkalan)
    <div class="modal fade" id="edit-{{ $pangkalan->id }}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myLargeModalLabel">Edit Pangkalan</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <form action='{{ url("agen/pangkalan/edit/$pangkalan->id") }}' method="post" style="text-align: left">
                        @csrf
                        <div class="form-group">
                            <label>No Registrasi</label>
                            <input name="no_registrasi" class="form-control" type="text" required
                                value="{{$pangkalan->no_registrasi}}">
                        </div>
                        <div class="form-group">
                            <label>Nama Pangkalan</label>
                            <input name="nama_pangkalan" class="form-control" type="text" required
                            value="{{$pangkalan->nama_pangkalan}}">
                        </div>
                        <div class="form-group">
                            <label>Nama Pemilik</label>
                            <input name="nama_pemilik" class="form-control" type="text" required
                            value="{{$pangkalan->nama_pemilik}}">
                        </div>
                        <div class="form-group">
                            <label>NIK KTP</label>
                            <input name="no_ktp" class="form-control" type="text" required value="{{$pangkalan->no_ktp}}">
                        </div>
                        <div class="form-group">
                            <label>No Handphone</label>
                            <input name="no_handphone" class="form-control" type="text" required
                            value="{{$pangkalan->no_handphone}}">
                        </div>
                        <div class="form-group">
                            <label>Propinsi</label>
                            <input name="propinsi" class="form-control" type="text" required value="{{$pangkalan->propinsi}}">
                        </div>
                        <div class="form-group">
                            <label>Kabupaten Kota</label>
                            <input name="kabupaten_kota" class="form-control" type="text" required
                            value="{{$pangkalan->kabupaten_kota}}">
                        </div>
                        <div class="form-group">
                            <label>Kecamatan</label>
                            <input name="kecamatan" class="form-control" type="text" required
                            value="{{$pangkalan->kecamatan}}">
                        </div>
                        <div class="form-group">
                            <label>Kelurahan</label>
                            <input name="kelurahan" class="form-control" type="text" required
                            value="{{$pangkalan->kelurahan}}">
                        </div>
                        <div class="form-group">
                            <label>Kode Pos</label>
                            <input name="kode_pos" class="form-control" type="text" required value="{{$pangkalan->kode_pos}}">
                        </div>
                        <div class="form-group">
                            <label>Alamat Pangkalan</label>
                            <input name="alamat" class="form-control" type="text" required
                            value="{{$pangkalan->alamat}}">
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

    <div class="modal fade" id="laporan-{{ $pangkalan->id }}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myLargeModalLabel">Laporan Pangkalan</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <form action='{{ url("agen/pangkalan/laporan/$pangkalan->id") }}' method="post" style="text-align: left">
                        @csrf
                        <div class="form-group">
                            <label>Bulan</label>
                             <select name="bulan" id="" class="form-control">
                                                <option value="">--Select Bulan--</option>
                                                <option value="1">Januari</option>
                                                <option value="2">Februari</option>
                                                <option value="3">Maret</option>
                                                <option value="4">April</option>
                                                <option value="5">Mei</option>
                                                <option value="6">Juni</option>
                                                <option value="7">Juli</option>
                                                <option value="8">Agustus</option>
                                                <option value="9">September</option>
                                                <option value="10">Oktober</option>
                                                <option value="11">November</option>
                                                <option value="12">Desember</option>
                                               

                                            </select>
                        </div>
                       



                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Lanjutkan</button>
                </div>
                </form>
            </div>
        </div>
    </div>
@endforeach
