@extends('layouts.default')
@section('content')
<div class="panel-header bg-primary-gradient">
	<div class="page-inner py-5">
		<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
			<div>
				<h2 class="text-white pb-2 fw-bold">Halaman Admin</h2>
				<h5 class="text-white op-7 mb-2">Suka suka suka</h5>
			</div>
			<div class="ml-md-auto py-2 py-md-0">
				{{-- <a href="#" class="btn btn-white btn-border btn-round mr-2">Manage</a>
				<a href="#" class="btn btn-secondary btn-round">Add Cu`stomer</a> --}}
			</div>
		</div>
	</div>
</div>
<div class="page-inner mt--5">
	<div class="row justify-content-center">
		<div class="col-sm-6 col-md-3">
			<div class="card card-stats card-round">
				<div class="card-body ">
					<div class="row align-items-center">
						<div class="col-icon">
							<div class="icon-big text-center icon-primary bubble-shadow-small">
								<i class="fa-solid fa-certificate"></i>
							</div>
						</div>
						<div class="col col-stats ml-3 ml-sm-0">
							<div class="numbers">
								<p class="card-category"><a href="{{ route('playlist.index') }}" style="color:gray">Sertifikat </a></p>
								<h4 class="card-title">
									{{ $countx }}
								</h4>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-sm-6 col-md-3">
			<div class="card card-stats card-round">
				<div class="card-body">
					<div class="row align-items-center">
						<div class="col-icon">
							<div class="icon-big text-center icon-info bubble-shadow-small">
								<i class="fa-solid fa-medal"></i>
							</div>
						</div>
						<div class="col col-stats ml-3 ml-sm-0">
							<div class="numbers">
								<p class="card-category"><a href="{{ route('artikel.index') }}" style="color:gray">Prestasi </a></p>
								<h4 class="card-title">
									{{ $count }}
								</h4>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-sm-6 col-md-3">
			<div class="card card-stats card-round">
				<div class="card-body">
					<div class="row align-items-center">
						<div class="col-icon">
							<div class="icon-big text-center icon-success bubble-shadow-small">
								<i class="fas fa-tags"></i>
							</div>
						</div>
						<div class="col col-stats ml-3 ml-sm-0">
							<div class="numbers">
								<p class="card-category"><a href="{{ route('kategori.index') }}" style="color:gray">Kategori </a></p>
								<h4 class="card-title">
									{{ $countk }}
								</h4>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-sm-6 col-md-3">
			<div class="card card-stats card-round">
				<div class="card-body">
					<div class="row align-items-center">
						<div class="col-icon">
							<div class="icon-big text-center icon-secondary bubble-shadow-small">
								<i class="fa-solid fa-book"></i>
							</div>
						</div>
						<div class="col col-stats ml-3 ml-sm-0">
							<div class="numbers">
								<p class="card-category"><a href="{{ route('materi.index') }}" style="color:gray">Dokumentasi </a></p>
								<h4 class="card-title">
								{{ $countm }}	
								</h4>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	{{-- <div class="row">
		<div class="col-md-4">
			<div class="card full-height">
				<div class="card-header">
					<div class="card-head-row">
						<div class="card-title">Prestasi Siswa</div>
					</div>
				</div>
				<div class="card-body">
				

				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="card full-height">
				<div class="card-header">
					<div class="card-head-row">
						<div class="card-title">Prestasi Siswa</div>
					</div>
				</div>
				<div class="card-body">
					

				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="card full-height">
				<div class="card-header">
					<div class="card-head-row">
						<div class="card-title">Prestasi Siswa</div>
					</div>
				</div>
				<div class="card-body">
				

				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="card full-height">
				<div class="card-header">
					<div class="card-head-row">
						<div class="card-title">Prestasi Populer</div>
					</div>
				</div>
				<div class="card-body">
					<div class="table-responsive">
					
					</div>

				</div>
			</div>
		</div>
	</div> --}}

	<div>
		<canvas id="prestasi-chart"></canvas>
	</div>
	
	<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
	<script>
		var data = @json($prestasis);
		var labels = data.map(function(item) {
			return item.jenis;
		});
		var values = data.map(function(item) {
			return item.jumlah;
		});
	
		var ctx = document.getElementById('prestasi-chart').getContext('2d');
		var myChart = new Chart(ctx, {
			type: 'line',
			data: {
				labels: labels,
				datasets: [{
					label: 'Jumlah Prestasi',
					data: values,
					backgroundColor: [
						'rgba(255, 99, 132, 0.2)',
						'rgba(54, 162, 235, 0.2)',
						'rgba(255, 206, 86, 0.2)',
						'rgba(75, 192, 192, 0.2)',
						'rgba(153, 102, 255, 0.2)',
						'rgba(255, 159, 64, 0.2)'
					],
					borderColor: [
						'rgba(255, 99, 132, 1)',
						'rgba(54, 162, 235, 1)',
						'rgba(255, 206, 86, 1)',
						'rgba(75, 192, 192, 1)',
						'rgba(153, 102, 255, 1)',
						'rgba(255, 159, 64, 1)'
					],
					borderWidth: 1
				}]
			},
			options: {
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero: true
						}
					}]
				}
			}
		});
	</script>
	
</div>
@endsection
