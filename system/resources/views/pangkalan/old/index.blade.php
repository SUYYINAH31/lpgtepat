@extends('pangkalan.template.base')
@section('content')
        <section class="hero-section d-flex justify-content-center align-items-center" id="section_1">
            <div class="container">
                <div class="row">

                    <div class="col-lg-8 col-12 mx-auto">
                        <h2 class="text-white text-center">NIK KTP Pelanggan</h2>

                        <h6 class="text-center">Masukkan dan cek NIK pelanggan untuk melanjutkan transaksi LPG 3 Kg</h6>

                        <form method="get" action="{{url('cek_nik')}}" class="custom-form mt-4 pt-2 mb-lg-0 mb-5" role="search">
                        	@csrf
                            <div class="input-group input-group-lg">
                                <span class="input-group-text bi-search" id="basic-addon1">

                                </span>

                                <input name="keyword" type="search" class="form-control" id="keyword"
                                    placeholder="Masukkan 16 digit Nik Pelanggan" aria-label="Search" pattern=".{0}|.{16,}" required title="Masukkan 16 Digit NIK Pelanggan">

                                <button type="submit" class="form-control">Cek Nik</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </section>


        <section class="featured-section">
            <div class="container">
                <div class="row justify-content-center">


                    <div class="col-lg-12 col-12">
                        <div class="custom-block custom-block-overlay">
                            <div class="d-flex flex-column h-100">
                                {{-- <img src="{{url('public/assetPangkalan')}}/images/businesswoman-using-tablet-analysis.jpg"
                                    class="custom-block-image img-fluid" alt=""> --}}

                                <div class="custom-block-overlay-text d-flex">
                                    <div>
                                        <h5 class="text-white mb-2">Pelanggan Belum Terdaftar?</h5>

                                        <p class="text-white">Daftarkan pelanggan rumah tangga atau usaha mikro untuk dapat transaksi LPG 3 Kg.</p>

                                        <a href="{{url('registration')}}" class="btn custom-btn mt-2 mt-lg-3">Daftarkan Pelanggan Baru</a><p></p>
                                        <a href="{{url('logout')}}" class="btn btn-danger mt-2 mt-lg-3"><i class="bi-box-arrow-right"></i> Keluar</a>
                                    </div>
                                </div>

                                

                                <div class="section-overlay"></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        @if(session()->has('ada'))
        <div class="modal" tabindex="-1" id="modalAda">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Modal title</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <p>Modal body text goes here.</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Save changes</button>
                </div>
              </div>
            </div>
          </div>
          {{-- tidak ada data --}}
           @elseif(session()->has('tidak'))
          <div class="modal" tabindex="-1" id="modalTidak">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-body">
                    <div class="row">
                            <img src="{{url('warning.png')}}" alt="" style="  display: block;
							  margin-left: auto;
							  margin-right: auto;
							  width: 40%; 
							  width: 100px;"  >
                    </div>
                  <p style="text-align: center">NIK pelanggan belum terdaftar. Silahkan lanjutkan “Daftarkan Pelanggan” untuk mendaftarkan pelanggan sebagai pengguna LPG 3 kg.</p>
                  <form action="{{url('cek_nik_lanjutan')}}" method="post">
                    @csrf
                    <input type="hidden" name="nik" value="{{\Session::get('tidak')}}">
                </div>    
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
                  <button type="submit" class="btn btn-primary">Daftarkan Pelanggan</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
          @endif   
@endsection
@section('script')
    @if(session()->has('ada'))
    <script type="text/javascript">
        $(window).on('load', function() {
            $('#modalAda').modal('show');
        });
    </script>
    @elseif(session()->has('tidak'))
    <script type="text/javascript">
        $(window).on('load', function() {
            $('#modalTidak').modal('show');
        });
    </script>
    @endif

    {{-- input Pelanggan  --}}
    @if(session()->has('input_success'))
     <script>
            swal(
                {
                    title: 'Berhasil',
                    
                    type: 'success',
                    title: "{{\Session::get('input_success')}}",
                    
                }
            )
      
    </script>      
    @endif
@endsection