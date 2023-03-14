@extends('layouts.default')

@section('content')
<style type="text/css">
    .bg-color {
        background-image: linear-gradient(	#228B22, #32CD32);
    }
    .bg-btn {
        background-color: #228B22;
    }
    .bg2 {
        background-color: #32CD32;
    }
    .bg3 {
        background-color: #FFFFFF;
    }
    .aligncenter {
    text-align: center;
    }
</style>  
	<div class="page-inner py-5 bg-color">
		<h1 style="text-align:left; color:white;">Halaman Laporan</h1>
	</div>
<!DOCTYPE html>
<html>
<head>
	<title>Membuat Laporan PDF Dengan DOMPDF Laravel</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
 <!-- @can('admin')
    gfkjgfhgsjfhdgjhsdf
 @endcan -->
	<div class="container"> 
		<a href="/laporanpdf/cetak_pdf" class="btn btn-success mt-5 mb-3" target="_blank" style="text-decoration: none; color:white;">CETAK PDF</a>
		<table class='table'>
			<!-- <thead>
				<tr>
					<th>No.</th>
					<th>Nama Pelapor</th>
					<th>Akademik</th>
					<th>Non-Akademik</th>
					<th>Tanggal</th>
				</tr>
			</thead> -->
			<tbody>
				<!-- @php $i=1 @endphp
				@foreach($artikel as $item)
				<tr>
					<td>{{ $i++ }}</td>
					<td>{{Auth::user()->name}}</td>
					<td>{{$ak}}</td>
					<td>{{$nak}}</td>
					<td>{{$date}}</td>
				</tr>
				@endforeach -->

                <tr>
                    <td>Nama Pelapor</td>
                    <td>:</td>
                    <td>{{ auth()->user()->name }}</td>
                </tr>
                <tr>
                    <td>Akademik</td>
                    <td>:</td>
                    <td>{{ $ak }}</td>
                </tr>
                <tr>
                    <td>Non - Akademik</td>
                    <td>:</td>
                    <td>{{ $nak }}</td>
                </tr>
                <tr>
                    <td>Tanggal</td>
                    <td>:</td>
                    <td>{{ $date }}</td>
                </tr>
			</tbody>
		</table>
 
	</div>
 
</body>

@endsection