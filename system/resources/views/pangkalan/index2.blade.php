<!DOCTYPE html>
<html lang="en">

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
                <form method="get" action="{{url('cek_nik')}}" class="custom-form mt-4 pt-2 mb-lg-0 mb-5" role="search">
                    @csrf
                    <div class="notification-content">
                        <p class="noti-title">
                        <h5><B>NIK KTP PELANGGAN</B></h5>
                        </p>
                        <p class="noti-subtitle mt-8">Masukkan dan cek NIK pelanggan untuk melanjutkan transaksi LPG 3
                            Kg</p>
                    </div>
                    <div class="serachbar-homepage2 mt-24">
                        <div class="input-group ">
                            <span class="input-group-text search-iconn">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M10.9395 1.9313C5.98074 1.9313 1.94141 5.97063 1.94141 10.9294C1.94141 15.8881 5.98074 19.9353 10.9395 19.9353C13.0575 19.9353 15.0054 19.193 16.5449 17.9606L20.293 21.7067C20.4821 21.888 20.7347 21.988 20.9967 21.9854C21.2587 21.9827 21.5093 21.8775 21.6947 21.6924C21.8801 21.5073 21.9856 21.2569 21.9886 20.9949C21.9917 20.7329 21.892 20.4802 21.7109 20.2908L17.9629 16.5427C19.1963 15.0008 19.9395 13.0498 19.9395 10.9294C19.9395 5.97063 15.8982 1.9313 10.9395 1.9313ZM10.9395 3.93134C14.8173 3.93134 17.9375 7.05153 17.9375 10.9294C17.9375 14.8072 14.8173 17.9352 10.9395 17.9352C7.06162 17.9352 3.94141 14.8072 3.94141 10.9294C3.94141 7.05153 7.06162 3.93134 10.9395 3.93134Z"
                                        fill="#7D8FAB"></path>
                                </svg>
                            </span>

                            <input type="search" name="keyword" placeholder="Masukkan 16 digit Nik Pelanggan" aria-label="Search" pattern=".{0}|.{16,}" required placeholder="Masukkan Nik" class="form-control search-text">

                            <button type="submit" class="btn btn-primary">Cek</button>

                        </div>
                </form>
            </div>
           
    </div>
   

    <div class="container">
       
        <div class="notification-page-full mt-24">
            <div class="tranding-item-sec">
                <div class="home-tranding-first">
                </div>
                <div class="navbar-boder"></div>
            </div>
           
            <div class="notification-page-sec">
                <div class="notification-img">
                    <img src="{{ url('public') }}/illu-register-customer.webp" alt="notification-img" height="120">
                </div>
                <div class="notification-content">
                    <p class="noti-title">Pelanggan Belum Terdaftar?</p>
                    <p class="noti-subtitle mt-8">Daftarkan pelanggan rumah tangga atau usaha mikro untuk dapat
                        transaksi LPG 3 Kg</p>
                    <a href="{{ url('registration') }}" class="btn btn-outline-primary mt-2 mt-lg-3">Daftarkan Pelanggan
                        Baru</a>
                    <p></p>
                </div>
            </div>

        </div>
    </div>
    <div class="homepage-fifth-sec mt-24">
        <div class="container">

            <a href="{{ url('logout') }}" class="btn btn-danger mt-2 mt-lg-3"><i class="bi-box-arrow-right"></i> Keluar
                Akun</a>
        </div>
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
                                    <a href="{{url('/')}}" class="home-icon navigation-icons active">
                                        <img src="{{url('beranda.png')}}" alt="" width="50" height="20">
                                    </a>
                                </li>
                                <li class="nav-menu-icon">
                                    <a href="{{url('laporan')}}" class="event-icon navigation-icons">
                                        <img src="{{url('laporan.png')}}" alt="" width="60" height="20">
                                    </a>
                                </li>
                                <li class="nav-menu-icon nav-account-icon">
                                    <a href="{{url('atur_produk')}}" class="notification-icon navigation-icons left-icon">
                                        <img src="{{url('aturproduk.png')}}" alt="" width="70" height="20">
                                    </a>
                                </li>
                                <li class="nav-menu-icon nav-notifi-icon">
                                    <a href="{{url('profile')}}" class="account-icon navigation-icons">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <mask id="mask0_1_772" style="mask-type:alpha" maskUnits="userSpaceOnUse"
                                                x="0" y="0" width="24" height="24">
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
    <!-- Bottom Navigation Section End -->
    </div>
    <script src="{{ url('public') }}/assets/js/jquery-min-3.6.0.js"></script>
    <script src="{{ url('public') }}/assets/js/slick.min.js"></script>
    <script src="{{ url('public') }}/assets/js/bootstrap.bundle.min.js"></script>
    <script src="{{ url('public') }}/assets/js/custom.js"></script>
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
    @if(session()->has('input_success'))
    <script type="text/javascript">
        $(window).on('load', function() {
            $('#modalTidak').modal('show');
        });
    </script>
    @endif
    <script type="text/javascript">
        Swal.fire({
                title: "Good job!",
                text: "You clicked the button!",
                icon: "success"
                });
    </script>
    </script>
 
</body>

</html>
