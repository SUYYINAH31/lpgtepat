@extends('agen.template.base')
@section('content')
    <div class="page-header">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div class="title">
                    <h4>User</h4>
                </div>
                <nav aria-label="breadcrumb" role="navigation">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('agen') }}">Agen</a></li>
                        <li class="breadcrumb-item active" aria-current="page">User</li>
                    </ol>
                </nav>
            </div>
            <div class="col-md-6 col-sm-12 text-right">
                <div class="dropdown">
                    <a class="btn btn-primary" href="#" data-backdrop="static" data-toggle="modal"
                        data-target="#Medium-modal" type="button">
                        Tambah User
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
                                    <form action="{{ url('agen/user/add') }}" method="post" style="text-align: left">
                                        @csrf
                                        <div class="form-group">
                                            <label>E-mail</label>
                                            <input name="email" class="form-control" type="text" required
                                               >
                                        </div>
                                        <div class="form-group">
                                            <label>Nama User</label>
                                            <input name="nama" class="form-control" type="text" required
                                                >
                                        </div>
                                        <div class="form-group">
                                            <label>Username</label>
                                            <input name="username" class="form-control" type="text" required
                                               >
                                        </div>

                                        <div class="form-group">
                                            <label>Password</label>
                                            <input name="password" class="form-control" type="password" required
                                                placeholder="Kecamatan">
                                        </div>
                                        <div class="form-group">
                                            <label>Level</label>
                                            <select name="level" id="" class="form-control">
                                                <option value="1">Admin</option>
                                                <option value="2">Pangkalan</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Pangkalan</label>
                                            <select name="id_pangkalan" id="" class="form-control">
                                                <option value="">--Select Pangkalan--</option>
                                                <option value="0">Super Admin</option>
                                                @foreach ($list_pangkalan as $pangkalan)
                                                    <option value="{{ $pangkalan->id }}">{{ $pangkalan->nama_pangkalan }}
                                                    </option>
                                                @endforeach

                                            </select>
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
            <table class="data-table table hover nowrap">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Email</th>
                        <th>Username</th>
                        <th>Nama / Alias</th>
                        <th>Level</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($list_user as $key => $user)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->username }}</td>
                            <td>{{$user->nama}}</td>
                            <td>
                                @if ($user->level == 1)
                                    Super Admin
                                @else
                                    Pangkalan
                                @endif
                            </td>
                            <td>
                                <a href='{{url("agen/user/hapus/$user->id")}}' class="btn btn-sm btn-danger"><i class="icon-copy dw dw-delete-2"></i></a>

                                <a class="btn  btn-sm btn-warning" href="#" data-backdrop="static" data-toggle="modal"
                                    data-target="#modalEdit_{{ $user->id }}" type="button">
                                    <i class="icon-copy fa fa-pencil" aria-hidden="true"></i>
                                </a>
                                <button  class="btn btn-sm btn-info" data-toggle="modal" data-target='#view_{{$user->id}}'><i class="icon-copy fa fa-eye" aria-hidden="true"></i></a>
                            </td>
                        </tr>
                        @include('agen.view_user')
                        <div class="modal fade" id="modalEdit_{{ $user->id }}" tabindex="-1" role="dialog"
                            aria-labelledby="myLargeModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="myLargeModalLabel">Large modal</h4>
                                        <button type="button" class="close" data-dismiss="modal"
                                            aria-hidden="true">×</button>
                                    </div>
                                    <div class="modal-body">
                                        <form action='{{ url("agen/user/edit/$user->id") }}' method="post"
                                            style="text-align: left">
                                            @csrf
                                            <div class="form-group">
                                                <label>E-mail</label>
                                                <input name="email" class="form-control" type="text" required
                                                    value="{{ $user->email }}">
                                            </div>
                                            <div class="form-group">
                                                <label>Nama User</label>
                                                <input name="nama" class="form-control" type="text" required
                                                    value="{{ $user->nama }}">
                                            </div>
                                            <div class="form-group">
                                                <label>Username</label>
                                                <input name="username" class="form-control" type="text" required
                                                    value="{{ $user->username }}">
                                            </div>

                                            <div class="form-group">
                                                <label>Ganti Password</label>
                                                <input name="password" class="form-control" type="password" required
                                                    placeholder="*******">
                                            </div>
                                            <div class="form-group">
                                                <label>Level</label>
                                                <select name="level" id="" class="form-control">
                                                    <option value="1"
                                                        @if ($user->level == 1) selected @endif>Admin</option>
                                                    <option value="2"
                                                        @if ($user->level == 2) selected @endif>Pangkalan</option>
                                                </select>
                                            </div>
                                            
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
@section('script')
@endsection
