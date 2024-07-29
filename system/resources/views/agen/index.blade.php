@extends('agen.template.base')
@section('content')
<div class="card-box pd-20 height-50-p mb-30">
    <div class="row align-items-center">
        <div class="col-md-4">
            <img src="{{url('public/assetAgen')}}/vendors/images/banner-img.png" alt="">
        </div>
        <div class="col-md-8">
            <h4 class="font-20 weight-500 mb-10 text-capitalize">
                Selamat Datang Kembali <div class="weight-600 font-30 text-blue" style="text-transform: capitalize;">{{Auth::user()->nama}}</div>
            </h4>
            <p class="font-18 max-width-600">Anda adalah admin Agen GAS LPG 3 kg untuk di salurkan oleh Pangkalan Resmi sesuai ketentuan subsidi yang berlaku.</p>
        </div>
    </div>
</div>
			<div class="row">
                
				<div class="col-xl-3 mb-30">
					<div class="card-box height-100-p widget-style1">
						<div class="d-flex flex-wrap align-items-center">
							<div class="progress-data">
                              
								<i class="icon-copy fa fa-address-card" style="font-size: 3em; color:brown" staria-hidden="true"></i>
							</div>
							<div class="widget-data">
								<div class="h4 mb-0">{{$pangkalan}}</div>
								<div class="weight-600 font-14">Pangkalan</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 mb-30">
					<div class="card-box height-100-p widget-style1">
						<div class="d-flex flex-wrap align-items-center">
							<div class="progress-data">
								<i class="icon-copy fa fa-users" style="font-size: 3em; color:rgb(230, 129, 21)" staria-hidden="true"></i>
							</div>
							<div class="widget-data">
								<div class="h4 mb-0">{{$pelanggan}}</div>
								<div class="weight-600 font-14">Pelanggan</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 mb-30">
					<div class="card-box height-100-p widget-style1">
						<div class="d-flex flex-wrap align-items-center">
							<div class="progress-data">
                                
								<i class="icon-copy fa fa-pie-chart" style="font-size: 3em; color:rgb(42, 165, 153)" staria-hidden="true"></i>
							</div>
							<div class="widget-data">
								<div class="h4 mb-0">{{$stok_agen}}</div>
								<div class="weight-600 font-14">Stok Agen</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 mb-30">
					<div class="card-box height-100-p widget-style1">
						<div class="d-flex flex-wrap align-items-center">
							<div class="progress-data">
								<div id="chart4"></div>
							</div>
							<div class="widget-data">
								<div class="h4 mb-0">{{$transaksi}}</div>
								<div class="weight-600 font-14">Tersalurkan</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xl-8 mb-30">
					<div class="card-box height-100-p pd-20">
						<h2 class="h4 mb-20">Aktifitas Penyaluran</h2>
						<div id="chart5"></div>
					</div>
				</div>
				
			</div>
			
			<div class="footer-wrap pd-20 mb-20 card-box">
				LPG Tepat By <a href="https://github.com/dropways" target="_blank">Suyyinah</a>
			</div>
    
@endsection
@section('script')
<script>
    var options4 = {
	series: [85],
	grid: {
		padding: {
			top: 0,
			right: 0,
			bottom: 0,
			left: 0
		},
	},
	chart: {
		height: 100,
		width: 70,
		type: 'radialBar',
	},	
	plotOptions: {
		radialBar: {
			hollow: {
				size: '50%',
			},
			dataLabels: {
				name: {
					show: false,
					color: '#fff'
				},
				value: {
					show: true,
					color: '#333',
					offsetY: 5,
					fontSize: '15px'
				}
			}
		}
	},
	colors: ['#ecf0f4'],
	fill: {
		type: 'gradient',
		gradient: {
			shade: 'dark',
			type: 'diagonal1',
			shadeIntensity: 0.8,
			gradientToColors: ['#2979ff'],
			inverseColors: false,
			opacityFrom: [1, 0.5],
			opacityTo: 1,
			stops: [0, 100],
		}
	},
	states: {
		normal: {
			filter: {
				type: 'none',
				value: 0,
			}
		},
		hover: {
			filter: {
				type: 'none',
				value: 0,
			}
		},
		active: {
			filter: {
				type: 'none',
				value: 0,
			}
		},
	}
};
var options5 = {
	chart: {
		height: 350,
		type: 'bar',
		parentHeightOffset: 0,
		fontFamily: 'Poppins, sans-serif',
		toolbar: {
			show: false,
		},
	},
	colors: ['#1b00ff', '#f56767'],
	grid: {
		borderColor: '#c7d2dd',
		strokeDashArray: 5,
	},
	plotOptions: {
		bar: {
			horizontal: false,
			columnWidth: '25%',
			endingShape: 'rounded'
		},
	},
	dataLabels: {
		enabled: false
	},
	stroke: {
		show: true,
		width: 2,
		colors: ['transparent']
	},
	series: [{
		name: 'Jumlah Stok Disalurkan Agen',
		data: [@foreach($list_stok as $stok)
            {{$stok->sum}},
        @endforeach]
	}, {
		name: 'jumlah yang disalurkan pangkalan',
		data: [@foreach($list_stok as $stok)
            {{$stok->tersalur}},
        @endforeach]
	}],
	xaxis: {
		categories: [@foreach($list_stok as $stok)
            '{{date('M',strtotime($stok->tanggal))}}',
        @endforeach],
		labels: {
			style: {
				colors: ['#353535'],
				fontSize: '16px',
			},
		},
		axisBorder: {
			color: '#8fa6bc',
		}
	},
	yaxis: {
		title: {
			text: ''
		},
		labels: {
			style: {
				colors: '#353535',
				fontSize: '16px',
			},
		},
		axisBorder: {
			color: '#f00',
		}
	},
	legend: {
		horizontalAlign: 'right',
		position: 'top',
		fontSize: '16px',
		offsetY: 0,
		labels: {
			colors: '#353535',
		},
		markers: {
			width: 10,
			height: 10,
			radius: 15,
		},
		itemMargin: {
			vertical: 0
		},
	},
	fill: {
		opacity: 1

	},
	tooltip: {
		style: {
			fontSize: '15px',
			fontFamily: 'Poppins, sans-serif',
		},
		y: {
			formatter: function (val) {
				return val
			}
		}
	}
}

var chart4 = new ApexCharts(document.querySelector("#chart4"), options4);
chart4.render();
var chart5 = new ApexCharts(document.querySelector("#chart5"), options5);
chart5.render();
</script>
@endsection