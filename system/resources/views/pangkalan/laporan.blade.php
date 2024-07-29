<!DOCTYPE html>
<html lang="en">
    @php
    function formatRupiah($angka)
    {
        return 'Rp ' . number_format($angka, 0, ',', '.');
    }
@endphp
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LPG Tepat</title>
    <link rel="icon" href="{{ url('public') }}/lpg.png">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&amp;display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&amp;display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ url('public') }}/assets/css/all.min.css">
    <link rel="stylesheet" href="{{ url('public') }}/assets/css/slick.css">
    <link rel="stylesheet" href="{{ url('public') }}/assets/css/bootstrap.min.css">
    <link href="{{ url('public/assetPangkalan') }}/css/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('public') }}/assets/css/style.css">
    <link rel="stylesheet" href="{{ url('public') }}/assets/css/media-query.css">
</head>

<body>
    <div class="site_content">
        <!-- Preloader Start -->
        <div class="loader-mask">
            <div class="loader">
                <div></div>
                <div></div>
            </div>
        </div>
        <!-- Preloader End -->
        <!-- Header Section Start -->
        <header id="top-navbar" class="top-navbar">
            <div class="container">
                <div class="top-navbar_full">
                    <div class="menu-btn d-flex align-items-center">
                        <img src="{{ url('gaskitecolor.png') }}" alt="search-icon" height="50"></a>
                    </div>
                    <div class="brookwood-txt d-flex align-items-center">

                    </div>
                    <div>

                    </div>
                </div>
            </div>
            <div class="navbar-boder"></div>
        </header>
        <p style="padding: 10px;"></p>
        <!-- Header Section End -->
        <!-- Homepage2 Details Section Start -->
        <section id="favourite-page">
            <div class="container">
                <form method="post" action="{{ url('laporan/cek') }}" class="custom-form mt-4 pt-2 mb-lg-0 mb-5"
                    role="search">
                    @csrf
                    <div class="notification-content">
                        <p class="noti-title">
                        <h5><B>Laporan Penjualan</B></h5>
                        </p>
                        <p class="noti-subtitle mt-8">Pilih Rentang Waktu</p>
                    </div>
                    <div class="serachbar-homepage2 mt-24">
                        <div class="input-group ">
                            <input type="date" name="from" required class="form-control search-text">
                            <input type="date" name="to" required class="form-control search-text">
                            <button type="submit" class="btn btn-primary">Cari</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="notification-page-full mt-24">
                <div class="tranding-item-sec">
                    <div class="home-tranding-first">
                    </div>
                    <div class="navbar-boder"></div>
                </div>

                <div class="card text-dark bg-light mb-3">
                    <div class="card-body">

                        <p class="card-text">Total Penjualan.</p>
                        <h5 class="card-title">{{formatRupiah($penjualan)}}</h5>
                        <p><span class="badge rounded-pill bg-success">Total Produk Terjual {{$terjual}} Tabung LPG 3 Kg</span>
                        </p>
                    </div>
                </div>

                <div class="card text-dark bg-light mb-3">
                    <div class="card bg-dark text-white">
                        <img src="" alt="">
                        <img src="{{url('public')}}/biruTua.jpg" class="card-img" alt="" height="150">
                        <div class="card-img-overlay">
                            <p class="card-text">Total Keuntungan</p>
                            <h5 class="card-title">{{formatRupiah($keuntungan)}}</h5>
                            <p class="card-text">Modal</p>
                            <h5 class="card-title">{{formatRupiah($modal)}}</h5>
                        </div>
                      </div>
                </div>

                @foreach($list_transaksi as $transaksi)
                <div class="notification-page-full mt-24">
                    <div class="card ">
                        
                        <div class="card-body">
                            <div class="check-page-bottom mt-12">
                                <div class="check-page-bottom-deatails">
                                    <div class="check-price-name">
                                        <p><strong>{{$transaksi->Pelanggan->nama}}</strong></p>
                                    </div>
                                    {{-- <div class="check-price-list">
                                        <p>as</p>
                                    </div> --}}
                                </div>
                                <div class="check-page-bottom-deatails">
                                    <div class="check-price-name">
                                        <p><strong>{{$transaksi->Pelanggan->no_ktp}}</strong</p>
                                    </div>
                                    {{-- <div class="check-price-list">
                                        <p>as</p>
                                    </div> --}}
                                </div>
                                <div class="check-page-bottom-deatails">
                                    <div class="check-price-name">
                                        <p>Total Pembelian</p>
                                    </div>
                                    <div class="check-price-list">
                                        <p>{{$transaksi->jumlah}} LPG 3 Kg </p>
                                    </div>
                                </div>  
                               
                            </div>
                        </div>
                       
                      </div> 
                </div>
                @endforeach

            </div>

        </section>

        <div id="bottom-navigation">
            <div class="container">
                <div class="home-navigation-menu">
                    <div class="row">
                        <div class="col-12">
                            <div class="bottom-panel nagivation-menu-wrap">
                                <ul class="sc-bottom-bar furniture-bottom-nav" id="furniture_navbar">
                                    <li class="nav-menu-icon active">
                                        <a href="{{ url('/') }}" class="home-icon navigation-icons ">
                                            <img src="{{url('beranda.png')}}" alt="" width="50" height="20">
                                        </a>
                                    </li>
                                    <li class="nav-menu-icon">
                                        <a href="{{ url('laporan') }}" class="event-icon navigation-icons active">
                                            <img src="{{url('laporan.png')}}" alt="" width="60" height="20">
                                        </a>
                                    </li>
                                    <li class="nav-menu-icon nav-account-icon">
                                        <a href="{{url('atur_produk')}}"
                                            class="notification-icon navigation-icons left-icon">
                                            <img src="{{url('aturproduk.png')}}" alt="" width="70" height="20">
                                        </a>
                                    </li>
                                    <li class="nav-menu-icon nav-notifi-icon">
                                        <a href="{{url('profile')}}" class="account-icon navigation-icons">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <mask id="mask0_1_772" style="mask-type:alpha"
                                                    maskUnits="userSpaceOnUse" x="0" y="0" width="24"
                                                    height="24">
                                                    <rect width="24" height="24" fill="white" />
                                                </mask>
                                                <g mask="url(#mask0_1_772)">
                                                    <path
                                                        d="M20 21C20 19.6044 20 18.9067 19.8278 18.3389C19.44 17.0605 18.4395 16.06 17.1611 15.6722C16.5933 15.5 15.8956 15.5 14.5 15.5H9.5C8.10444 15.5 7.40665 15.5 6.83886 15.6722C5.56045 16.06 4.56004 17.0605 4.17224 18.3389C4 18.9067 4 19.6044 4 21M16.5 7.5C16.5 9.98528 14.4853 12 12 12C9.51472 12 7.5 9.98528 7.5 7.5C7.5 5.01472 9.51472 3 12 3C14.4853 3 16.5 5.01472 16.5 7.5Z"
                                                        stroke="#666666" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </g>
                                            </svg>
                                        </a>
                                    </li>
                                </ul>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @if (session()->has('ada'))
            <div class="modal" tabindex="-1" id="modalAda">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Modal title</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
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
                                <img src="{{ url('warning.png') }}" alt=""
                                    style="  display: block;
                          margin-left: auto;
                          margin-right: auto;
                          width: 40%; 
                          width: 100px;">
                            </div>
                            <p style="text-align: center">NIK pelanggan belum terdaftar. Silahkan lanjutkan “Daftarkan
                                Pelanggan” untuk mendaftarkan pelanggan sebagai pengguna LPG 3 kg.</p>
                            <form action="{{ url('cek_nik_lanjutan') }}" method="post">
                                @csrf
                                <input type="hidden" name="nik" value="{{ \Session::get('tidak') }}">
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
        <!-- Bottom Navigation Section End -->
    </div>
    <script src="{{ url('public') }}/assets/js/jquery-min-3.6.0.js"></script>
    <script src="{{ url('public') }}/assets/js/slick.min.js"></script>
    <script src="{{ url('public') }}/assets/js/bootstrap.bundle.min.js"></script>
    <script src="{{ url('public') }}/assets/js/custom.js"></script>
    @if (session()->has('ada'))
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
