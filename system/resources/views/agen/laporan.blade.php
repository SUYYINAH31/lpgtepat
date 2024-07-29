@extends('agen.template.base')
@section('content')
    <div class="page-header">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div class="title">
                    <h4>Laporan Penjualan</h4>
                </div>
                <nav aria-label="breadcrumb" role="navigation">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('agen') }}">Agen</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Pangkalan</li>
                    </ol>
                </nav>
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
                        <th>Nama Pelanggan</th>
                        <th>Jumlah Beli</th>
                    </tr>
                </thead>
                <tbody>
                   @foreach($list_laporan as $key=>$laporan)
                    <tr>
                        <td>{{$key+1}}</td>
                        <td>{{$laporan->Pelanggan->nama}}</td>
                        <td>{{$laporan->total}}</td>
                    </tr>
                   @endforeach
                </tbody>
            </table>
        </div>
    </div>
   
@endsection
@section('script')
@endsection
