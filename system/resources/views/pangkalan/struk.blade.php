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
    <title>BrookWood</title>
    <link rel="icon" href="{{ url('public') }}/assets/images/favicon/icon.png">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&amp;display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&amp;display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ url('public') }}/assets/css/all.min.css">
    <link rel="stylesheet" href="{{ url('public') }}/assets/css/slick.css">
    <link rel="stylesheet" href="{{ url('public') }}/assets/css/bootstrap.min.css">
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
                    <div class="back-btn d-flex align-items-center">
                        <a href="shopping-cart.html"><img
                                src="{{ url('public') }}/assets/images/forget-password-screen/back-btn.svg"
                                alt="back-btn-img"></a>
                    </div>
                    <div class="top-navbar-title d-flex align-items-center">
                        <p>Struk</p>
                    </div>
                </div>
            </div>
            <div class="navbar-boder"></div>
        </header>
        <!-- Header Section End -->
        <!-- Checkout page Section Start -->
        <section id="checkout-page">

            <div class="checkoutpage-third-sec mt-24">
                <div class="container">
                    <div class="time-addreess-sec">
                        <div class="time-addreess-sec-deatils">
                            <div class="time-add-main-sec">
                                <h4 class="time-txt1">Pangkalan</h4>
                                <div class="checkoutpage-price-sec-full">
                                    <div class="check-page-bottom mt-12">
                                        <div class="check-page-bottom-deatails">
                                            <div class="check-price-name">
                                                <p>Kasir</p>
                                            </div>
                                            <div class="check-price-list">
                                                <p>{{ session('kasir') }}</p>
                                            </div>
                                        </div>
                                        <div class="check-page-bottom-deatails mt-12">
                                            <div class="check-price-name">
                                                <p>Waktu Transaksi</p>
                                            </div>
                                            <div class="check-price-list">
                                                <p>{{ session('waktu') }}</p>
                                            </div>
                                        </div>
                                        <div class="check-page-bottom-deatails mt-12">
                                            <div class="check-price-name">
                                                <p>Kode Transaksi</p>
                                            </div>
                                            <div class="check-price-list">
                                                <p>{{ session('kode') }}</p>
                                            </div>
                                        </div>
                                        <div class="check-page-bottom-deatails mt-12">
                                            <div class="check-price-name">
                                                <p>Alamat</p>
                                            </div>
                                            <div class="check-price-list">
                                                <p>{{ session('alamat') }}</p>
                                            </div>
                                        </div>
                                        <div class="checkoutpage-boder mt-12"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="time-add-main-sec mt-24">
                                <h4 class="time-txt1">Pelanggan</h4>
                                <div class="checkoutpage-price-sec-full">
                                    <div class="check-page-bottom mt-12">
                                        <div class="check-page-bottom-deatails">
                                            <div class="check-price-name">
                                                <p>Nama Pelanggan</p>
                                            </div>
                                            <div class="check-price-list">
                                                <p>{{ session('pelanggan') }}</p>
                                            </div>
                                        </div>
                                        <div class="check-page-bottom-deatails mt-12">
                                            <div class="check-price-name">
                                                <p>Nomor NIK</p>
                                            </div>
                                            <div class="check-price-list">
                                                <p>{{ session('pelanggan_ktp') }}</p>
                                            </div>
                                        </div>
                                        <div class="check-page-bottom-deatails mt-12">
                                            <div class="check-price-name">
                                                <p>Jenis Pengguna</p>
                                            </div>
                                            <div class="check-price-list">
                                                <p> @if (session('pelanggan_pengguna') == 1)
                                                    Rumah Tangga
                                                @elseif(session('pelanggan_pengguna') == 2)
                                                    Usaha Mikro
                                                @else
                                                    Pengecer
                                                @endif</p>
                                            </div>
                                        </div>
                                        
                                        <div class="checkoutpage-boder mt-12"></div>
                                    </div>
                                </div>
                                <div class="checkoutpage-boder mt-24"></div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="checkoutpage-fifth-sec mt-24">
                <div class="container">
                    <div class="checkoutpage-price-sec">
                        <div class="checkoutpage-price-sec-full">
                            <div class="check-page-top">
                                <h4 class="check-price-txt1">{{session('success')}}</h4>
                                <div class="checkoutpage-boder mt-8"></div>
                            </div>
                            <div class="check-page-bottom mt-12">
                                <div class="check-page-bottom-deatails">
                                    <div class="check-price-name">
                                        <p>lpg 3 Kg </p>
                                    </div>
                                    <div class="check-price-list">
                                        <p>{{formatRupiah(session('harga'))}}</p>
                                    </div>
                                </div>
                                <div class="check-page-bottom-deatails mt-12">
                                    <div class="check-price-name">
                                        <p>{{formatRupiah(session('harga'))}} x {{ session('qty') }}</p>
                                    </div>
                                   
                                </div>
                                
                               
                                <div class="checkoutpage-boder mt-12"></div>
                                <div class="check-page-bottom-deatails mt-12">
                                    <div>
                                        <p class="col-black">Total</p>
                                    </div>
                                    <div>
                                        <p class="col-black">{{formatRupiah(session('harga')*session('qty'))}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="checkout-buy-now-btn mt-24">
                <a href="{{url('/')}}" onclick="submitForm();">Kembali Ke Beranda</a>
            </div>
        </section>
        <!-- Checkout page Section End -->
    </div>
    <script src="{{ url('public') }}/assets/js/jquery-min-3.6.0.js"></script>
    <script src="{{ url('public') }}/assets/js/slick.min.js"></script>
    <script src="{{ url('public') }}/assets/js/bootstrap.bundle.min.js"></script>
    <script src="{{ url('public') }}/assets/js/custom.js"></script>
</body>

</html>

{{ session('harga') }} <br>
{{ session('qty') }} <br>
