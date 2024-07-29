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
                        <a href="javascript: history.go(-1)"><img
                                src="{{ url('public') }}/assets/images/forget-password-screen/back-btn.svg"
                                alt="back-btn-img"></a>
                    </div>
                    <div class="top-navbar-title d-flex align-items-center">
                        <p>Pembelian</p>
                    </div>
                </div>
            </div>
            <div class="navbar-boder"></div>
        </header>
        <!-- Header Section End -->
        <!-- Shopping Details Section Start -->
        <div class="checkoutpage-fifth-sec mt-24">
            <div class="container">
                <div class="checkoutpage-price-sec">
                    <div class="checkoutpage-price-sec-full">
                        <div class="check-page-top">
                            <h4 class="check-price-txt1">Pelanggan</h4>
                            <div class="checkoutpage-boder mt-8"></div>
                        </div>
                        <div class="check-page-bottom mt-12">
                            <div class="check-page-bottom-deatails">
                                <div class="check-price-name">
                                    <p>Nama Pelanggan</p>
                                </div>
                                <div class="check-price-list">
                                    <p>{{ $pelanggan->nama }}</p>
                                </div>
                            </div>
                            <div class="check-page-bottom-deatails mt-12">
                                <div class="check-price-name">
                                    <p>NO KK</p>
                                </div>
                                <div class="check-price-list">
                                    <p>{{ $pelanggan->no_kk }}</p>
                                </div>
                            </div>
                            <div class="check-page-bottom-deatails mt-12">
                                <div class="check-price-name">
                                    <p>NO KTP</p>
                                </div>
                                <div class="check-price-list">
                                    <p>{{ $pelanggan->no_ktp }}</p>
                                </div>
                            </div>

                            <div class="check-page-bottom-deatails mt-12">
                                <div>
                                    <p class="col-black">Jenis Pengguna</p>
                                </div>
                                <div>
                                    <p class="col-black">
                                        @if ($pelanggan->jenis_pengguna == 1)
                                            Rumah Tangga
                                        @elseif($pelanggan->jenis_pengguna == 2)
                                            Usaha Mikro
                                        @else
                                            Pengecer
                                        @endif
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section id="shopping-page">
            <div class="checkout-page-increment-sec-full mt-24">
                <form id="formSubmit" action="{{url('proses_tansaksi')}}" method="POST">
                    @csrf
                    <input type="hidden" name="id_pangkalan" value="{{Auth::user()->Pangkalan->id}}">
                    <input type="hidden" name="id_pelanggan" value="{{$pelanggan->id}}">
                    <input type="hidden" name="harga" value="{{Auth::user()->Pangkalan->harga_het}}">
                    <input type="hidden" name="tahap" value="{{$data_stok->tahap_penebusan}}">
                    <input type="hidden" name="id_stok" value="{{$data_stok->id}}">

                    <div class="container">
                        <h1 class="d-none">Shopping Cart</h1>
                        <h2 class="d-none">Coupon Details</h2>
                        <h3 class="d-none">Coupon</h3>

                        <div class="check-page-top-content mt-16">
                            <div class="checkout-page-top-sec">
                                <div class="checkout-page-top-sec-img">
                                    <img src="{{ url('public') }}/lpg-3.png"
                                        style="  display: block;
                                margin-left: auto;
                                margin-right: auto;
                                width: 40%; 
                                width: 100px;"
                                        style="">
                                </div>
                                <div class="checkout-quantity-sec">
                                    <p class="chek-txt1">LPG 3 Kg</p>
                                    <h4 class="chek-txt2 mt-16"> {{ formatRupiah(Auth::user()->Pangkalan->harga_het) }}
                                        / Tabung</h4>
                                    <h5 class="chek-txt3 mt-8">Stok : {{ $stok }}</h5>
                                </div>
                                <div class="checkoutpage-increment-full">
                                    <div class="checkoutpage-increment-full-details">

                                        <div class="quantity">
                                            <a href="javascript:void(0)" class="quantity__minus sub">
                                                <span>
                                                    <svg width="8" height="8" viewBox="0 0 8 2" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M1 1H7" stroke="#666666" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                </span>
                                            </a>
                                            <input name="jumlah" type="text" class="quantity__input"
                                                value="1">
                                            <a href="javascript:void(0)" class="quantity__plus add">
                                                <span>
                                                    <svg width="8" height="8" viewBox="0 0 8 8" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M1 4H7" stroke="#0EA5E9" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                        <path d="M4 7V1" stroke="#0EA5E9" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="checkoutpage-boder mt-16"></div>
                        </div>
                    </div>
                
            </div>


            <div class="checkout-buy-now-btn mt-24">
                <a href="javascript:void(0);" onclick="submitForm();">lanjutkan Transaksi</a>
            </div>
            </form>
        </section>
        <!-- Shopping Details Section End -->
    </div>
    <script src="{{ url('public') }}/assets/js/jquery-min-3.6.0.js"></script>
    <script src="{{ url('public') }}/assets/js/slick.min.js"></script>
    <script src="{{ url('public') }}/assets/js/bootstrap.bundle.min.js"></script>
    <script src="{{ url('public') }}/assets/js/custom.js"></script>
    <script>
        function submitForm() {
            document.getElementById('formSubmit').submit();
        }
    </script>
</body>

</html>
