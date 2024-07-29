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
        <section id="sign-up-screen">
			<div class="container">
				<div class="sign-in-screen_full">
					<div class="sign-in-screen-top">
						<h1>Identitas Pelanggan</h1>
						
						<form id="formSubmit" action="{{url('input_pelanggan')}}" method="POST" class="sign-in-form mt-32" enctype="multipart/form-data">
                            @csrf
							<div class="form-sec">
								<label class="txt-lbl">Nama Lengkap</label><br>
								<input type="text" name="nama"  placeholder="Nama Pelanggan" class="txt-input" required>
								<div class="form_bottom_boder"></div>
							</div>
							<div class="form-sec mt-16">
								<label class="txt-lbl">NIK KTP Pelanggan</label><br>
                                <input type="text" name="nik" class="txt-input" placeholder="Name" value="{{$nik}}" readonly required>
								<div class="form_bottom_boder"></div>
							</div>
							<div class="form-sec mt-16">
								<label class="txt-lbl">Nomor KK Pelanggan</label><br>
								<input type="text"  name="no_kk" placeholder="16 digit no kk pelanggan" class="txt-input" required>
								<div class="form_bottom_boder"></div>
							</div>
							<div class="form-sec mt-16">
								<label  class="txt-lbl">Jenis Penguna</label><br>
								<select type="text" name="jenis_pengguna" id="name" class="form-control" placeholder="Name"   required="">
                                    <option value="">-- Pilih Jenis Pengguna --</option>
                                    <option value="1">Rumah Tangga</option>
                                    <option value="2">Usaha Mikro</option>
                                    <option value="3">Pengecer</option>
                                    <select>
							</div>
                            <h1>Kontak Pelanggan</h1>
                            <div class="form-sec mt-16">
								<label class="txt-lbl">E-Mail</label><br>
								<input type="email"  name="email" placeholder="email pelanggan" class="txt-input"required>
								<div class="form_bottom_boder"></div>
							</div>
                            <div class="form-sec mt-16">
								<label class="txt-lbl">No. Telepon</label><br>
								<input type="text"  name="no_telp" placeholder="telepon pelanggan" class="txt-input"required>
								<div class="form_bottom_boder"></div>
							</div>
                       
                            <h1>Alamat Pelanggan</h1>
                            <div class="form-sec mt-16">
								<label class="txt-lbl">Provinsi</label><br>
								<input type="text"  name="propinsi" placeholder="Input Propinsi" required class="txt-input"required>
								<div class="form_bottom_boder"></div>
							</div>
                            <div class="form-sec mt-16">
								<label class="txt-lbl">Kabupaten/Kota</label><br>
								<input type="text"  name="kabupaten" placeholder="input kabupaten" required class="txt-input"required>
								<div class="form_bottom_boder"></div>
							</div>
                            <div class="form-sec mt-16">
								<label class="txt-lbl">Kecamatan</label><br>
								<input type="text"  name="kecamatan" placeholder="Input Kecamatan" class="txt-input"required>
								<div class="form_bottom_boder"></div>
							</div>
                            <div class="form-sec mt-16">
								<label class="txt-lbl">Kelurahan</label><br>
								<input type="text"  name="kelurahan" placeholder="Input Kelurahan" class="txt-input"required>
								<div class="form_bottom_boder"></div>
							</div>
                            <div class="form-sec mt-16">
								<label class="txt-lbl">Alamat Lengkap</label><br>
								<input type="text"  name="alamat" placeholder="Alamat Lengkap seusai KTP" class="txt-input"required>
								<div class="form_bottom_boder"></div>
							</div>
                            <div class="form-sec mt-16">
								<label class="txt-lbl">Foto KTP</label><br>
								<input type="file"  name="foto"  class="txt-input"required>
								<div class="form_bottom_boder"></div>
							</div>
						
						
						<div class="sign-up mt-32">
							<a href="javascript:void(0);" onclick="submitForm();">Simpan</a>	
						</div>
                    </form>
					</div>
				</div>
			</div>
		</section>
        
            
            <script src="{{ url('public') }}/assets/js/jquery-min-3.6.0.js"></script>
            <script src="{{ url('public') }}/assets/js/slick.min.js"></script>
            <script src="{{ url('public') }}/assets/js/bootstrap.bundle.min.js"></script>
            <script src="{{ url('public') }}/assets/js/custom.js"></script>
            <script>
                function submitForm() {
                    document.getElementById('formSubmit').submit();
                }
            </script>
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