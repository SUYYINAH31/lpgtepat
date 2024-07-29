<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>Subsidi Tepat</title>

    <!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&family=Open+Sans&display=swap"
        rel="stylesheet">

    <link href="{{ url('public/assetPangkalan') }}/css/bootstrap.min.css" rel="stylesheet">

    <link href="{{ url('public/assetPangkalan') }}/css/bootstrap-icons.css" rel="stylesheet">

    <link href="{{ url('public/assetPangkalan') }}/css/templatemo-topic-listing.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="{{url('public/assetAgen')}}/src/plugins/sweetalert2/sweetalert2.css">
    <!--

TemplateMo 590 topic listing

https://templatemo.com/tm-590-topic-listing

-->
</head>

<body id="top">

    <main> 

        <section class="hero-section d-flex justify-content-center align-items-center" id="section_1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-12 mt-3 mx-auto">
                            <div class="custom-block custom-block-topics-listing bg-white shadow-lg mb-5">
                                <div class="d-flex">

                                    <div class="custom-block-topics-listing-info d-flex">
                                        <form action="{{url('transaksi_1')}}" method="post">
                                            @csrf
                                        <div>
                                            <p class="mb-0">Nama.</p>
                                            <h5 class="mb-2">{{$pelanggan->nama}}</h5>
                                             <p class="mb-0">No Nik.</p>
                                            <h5 class="mb-2">{{$pelanggan->no_ktp}}</h5>
                                             <p class="mb-0">Jenis Pengguna.</p>
                                            <h5 class="mb-2">@if($pelanggan->jenis_pengguna == 1)
                                                                Rumah Tangga
                                                            @elseif($pelanggan->jenis_pengguna == 2)
                                                                Usaha Mikro
                                                            @else
                                                                Pengecer
                                                            @endif
                                            </h5>
                                            <p class="mb-0">Jumlah Tabung.</p>
                                            <p> 
                                                <input type="hidden" name="id_pelanggan" value="{{$pelanggan->id}}">
                                                <input type="number" maxlength="1" value="1" class="form-control" required>
                                            </p>

                                            <button class="btn custom-btn mt-3 mt-lg-4">Lajutkan transaksi</button>
                                        </div>
                                        </form>
                                        
                                    </div>
                                </div>
                            </div>
                            <a href="{{url('/')}}" class="btn btn-warning mt-2 mt-lg-3"><i class="bi-box-arrow-left"></i> back</a>
                        </div>


                    <!-- <div class="col-lg-8 col-12 mx-auto">
                        <h2 class="text-white text-center">Daftarkan Pelanggan</h2>

                        <h6 class="text-center">Masukkan NIK KTP Pelanggan untuk pengecekan status pendaftaran.</h6>

                        <form method="post" action="{{url('cek_register')}}" class="custom-form mt-4 pt-2 mb-lg-0 mb-5" role="search">
                            @csrf
                            <div class="input-group input-group-lg">
                                <span class="input-group-text bi-search" id="basic-addon1">
                                </span>
                                <input name="keyword" type="search" class="form-control" id="keyword"
                                    placeholder="Masukkan 16 digit Nik Pelanggan" aria-label="Search">
                                <button type="submit" class="form-control">Cek Nik</button>
                            </div>
                        </form> 
                         <a href="{{url('/')}}" class="btn btn-warning mt-2 mt-lg-3"><i class="bi-box-arrow-left"></i> back</a>
                    </div> -->

                </div>
            </div>
           
        </section>


        <section class="featured-section">
            <div class="container">
                
            </div>
        </section>
        {{-- ada data --}}
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
          <div class="modal" tabindex="-1" id="modalTidak">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-4">
                            
                        </div>
                        <div class="col-md-4">
                            <img src="{{url('warning.png')}}" alt="" height="100" style="text-align: center">
                        </div>
                    </div>
                   
                  <p style="text-align: center">NIK pelanggan belum terdaftar. Silahkan lanjutkan “Daftarkan Pelanggan” untuk mendaftarkan pelanggan sebagai pengguna LPG 3 kg.</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Save changes</button>
                </div>
              </div>
            </div>
          </div>

       
    </main>



    <!-- JAVASCRIPT FILES -->
    <script src="{{ url('public/assetPangkalan') }}/js/jquery.min.js"></script>
    <script src="{{ url('public/assetPangkalan') }}/js/bootstrap.bundle.min.js"></script>
    <script src="{{ url('public/assetPangkalan') }}/js/jquery.sticky.js"></script>
    <script src="{{ url('public/assetPangkalan') }}/js/click-scroll.js"></script>
    <script src="{{ url('public/assetPangkalan') }}/js/custom.js"></script>

    <script src="{{url('public/assetAgen')}}/src/plugins/sweetalert2/sweetalert2.all.js"></script>
	{{-- <script src="{{url('public/assetAgen')}}/src/plugins/sweetalert2/sweet-alert.init.js"></script> --}}
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
    
    
</body>

</html>
