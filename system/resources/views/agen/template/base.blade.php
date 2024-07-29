<html>
<head>
	@include('agen.template.section.head')
</head>
<body>
	<div class="pre-loader">
		<div class="pre-loader-box">
			<div class="loader-logo"><img src="{{url('public')}}/lpg.png" alt=""></div>
			<div class='loader-progress' id="progress_div">
				<div class='bar' id='bar1'></div>
			</div>
			<div class='percent' id='percent1'>0%</div>
			<div class="loading-text">
				Loading...
			</div>
		</div>
	</div>

	<div class="header">
		@include('agen.template.section.navbar')
	</div>


	<div class="left-side-bar">
		@include('agen.template.section.sidebar')
	</div>
	<div class="mobile-menu-overlay"></div>

	<div class="main-container">
		<div class="pd-ltr-20">
			@yield('content')
		</div>
	</div>
	<!-- js -->
	<script src="{{url('public/assetAgen')}}/vendors/scripts/core.js"></script>
	<script src="{{url('public/assetAgen')}}/vendors/scripts/script.min.js"></script>
	<script src="{{url('public/assetAgen')}}/vendors/scripts/process.js"></script>
	<script src="{{url('public/assetAgen')}}/vendors/scripts/layout-settings.js"></script>
	<script src="{{url('public/assetAgen')}}/src/plugins/datatables/js/jquery.dataTables.min.js"></script>
	<script src="{{url('public/assetAgen')}}/src/plugins/datatables/js/dataTables.bootstrap4.min.js"></script>
	<script src="{{url('public/assetAgen')}}/src/plugins/datatables/js/dataTables.responsive.min.js"></script>
	<script src="{{url('public/assetAgen')}}/src/plugins/datatables/js/responsive.bootstrap4.min.js"></script>
	<!-- buttons for Export datatable -->
	<script src="{{url('public/assetAgen')}}/src/plugins/datatables/js/dataTables.buttons.min.js"></script>
	<script src="{{url('public/assetAgen')}}/src/plugins/datatables/js/buttons.bootstrap4.min.js"></script>
	<script src="{{url('public/assetAgen')}}/src/plugins/datatables/js/buttons.print.min.js"></script>
	<script src="{{url('public/assetAgen')}}/src/plugins/datatables/js/buttons.html5.min.js"></script>
	<script src="{{url('public/assetAgen')}}/src/plugins/datatables/js/buttons.flash.min.js"></script>
	<script src="{{url('public/assetAgen')}}/src/plugins/datatables/js/pdfmake.min.js"></script>
	<script src="{{url('public/assetAgen')}}/src/plugins/datatables/js/vfs_fonts.js"></script>
	<!-- Datatable Setting js -->
	<script src="{{url('public/assetAgen')}}/vendors/scripts/datatable-setting.js"></script></body>

	<script src="{{url('public/assetAgen')}}/src/plugins/apexcharts/apexcharts.min.js"></script>

	@yield('script')

</body>
</html>

	

