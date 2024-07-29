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
                <div class="notification-page-sec">
                    <div class="notification-img">
                        <img src="{{ url('public/vectorLPg.png') }}"
                            style="  display: block;
                        margin-left: auto;
                        margin-right: auto;
                        width: 40%; 
                        width: 100px;"
                            alt="notification-img">
                    </div>
                    <div class="notification-content">

                        <p class="noti-subtitle mt-8">Stok LPG 3Kg Saat ini</p>
                        <p class="noti-title">
                        <h5><B>{{ $stok }} Tabung</B></h5>
                        </p>
                        <button href="{{ url('registration') }}" data-bs-toggle="modal" data-bs-target="#modalRincian"
                            class="btn btn-outline-primary mt-2 mt-lg-3">Rincian
                            Stok</button>
                    </div>
                </div>
            </div>
            <div class="checkoutpage-fifth-sec mt-24">
				<div class="container">
					<div class="checkoutpage-price-sec">
						<div class="checkoutpage-price-sec-full">
							
							<div class="check-page-bottom mt-12">
								
								
								
							</div>
						</div>
					</div>
				</div>
			</div>
            <div class="coupon-sec mt-24">
                <form action="{{url('atur_produk/update/')}}/{{Auth::user()->Pangkalan->id}}" method="post">
                    @csrf
                    <div class="container">
                        <div class="check-page-top">
                            <h4 class="check-price-txt1">Atur Harga Produk</h4>
                            <div class="checkoutpage-boder mt-8"></div>
                        </div>
                        <div class="check-page-top">
                            <h4 class="check-price-txt1">harga Beli</h4>
                            <div class="checkoutpage-boder mt-8"></div>
                        </div>
                        <div class="coupon-sec-deatils">
                            <div class="input-group ">
                                <span class="input-group-text coupon-iconn">
                                    Rp
                                </span>
                                <input type="number" name="beli"  class="form-control search-text" value="{{Auth::user()->Pangkalan->harga_beli}}">
                            </div>
                        </div>
                        <div class="check-page-top">
                            <h4 class="check-price-txt1">harga Beli</h4>
                            <div class="checkoutpage-boder mt-8"></div>
                        </div>
                        <div class="coupon-sec-deatils">
                            <div class="input-group ">
                                
                                <span class="input-group-text coupon-iconn">
                                    Rp
                                </span>
                                <input type="number" name="het"  class="form-control search-text" value="{{Auth::user()->Pangkalan->harga_het}}">
                            </div>
                        </div>
                        <div class="check-page-top">
                        
                            <div class="checkoutpage-boder mt-8"></div>
                        </div>
                        <div class="coupon-sec-deatils">
                            <div class="input-group">
                                <button type="submit" class="form-control btn btn-primary" >Atur Produk</button>
                            </div>
                        </div>
                        
                    </div>
                </form>
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
                                        <a href="{{ url('/') }}" class="home-icon navigation-icons">
                                            <img src="{{url('beranda.png')}}" alt="" width="50" height="20">
                                        </a>
                                    </li>
                                    <li class="nav-menu-icon">
                                        <a href="{{ url('laporan') }}" class="event-icon navigation-icons">
                                            <img src="{{url('laporan.png')}}" alt="" width="60" height="20">
                                        </a>
                                    </li>
                                    <li class="nav-menu-icon nav-account-icon">
                                        <a href="{{ url('atur_produk') }}"
                                            class="notification-icon navigation-icons left-icon active">
                                            <img src="{{url('aturproduk.png')}}" alt="" width="70" height="20">
                                        </a>
                                    </li>
                                    <li class="nav-menu-icon nav-notifi-icon">
                                        <a href="{{ url('profile') }}" class="account-icon navigation-icons">
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

        <div class="modal" tabindex="-1" id="modalRincian">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    1 of 2
                                </div>
                                <div class="col">
                                    2 of 2
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    1 of 2
                                </div>
                                <div class="col">
                                    2 of 2
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-primary" data-bs-dismiss="modal">Tutup</button>
                    </div>
                </div>
            </div>
        </div>

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
