
<!DOCTYPE html>
<html>
<head>
	<title>Membuat Laporan PDF Dengan DOMPDF Laravel</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body onload="window.print()">
 
	<div class="container">
        <div class="row justify-content-between py-3 border-bottom mb-4">
            <div class="col-3">
                <img src="{{ asset('uploads/lg1.png') }}" alt="" height="170px" width="130px">
            </div>
            <div class="col-9">
                <p><center>PEMERINTAH PROVINSI JAWA TIMUR</center></p>
                <p><center>DINAS PENDIDIKAN</center></p>
                <p><center>SEKOLAH MENENGAH KEJURUAN NEGERI 1 JENANGAN</center></p>
                <p><center>Jl. Niken Gandini No. 98 Jenangan, Telp/Fax (0352) 481236, E-mail : smkn1jenpo@yahoo.com, Kode Pos 63492</center></p>
                <p><center>PONOROGO</center></p>
            </div>
        </div>
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

Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro qui et quod suscipit, veritatis, modi velit corporis saepe quam temporibus illum perferendis natus nihil ex ipsa possimus sunt quas amet aspernatur deleniti iste atque quaerat! Ex quidem est, voluptas voluptate iusto debitis molestiae ipsum temporibus sit, eligendi numquam, sint maiores! Quis numquam eum quod ipsum, dolorem possimus reprehenderit repellendus corporis aut consequatur beatae dolorum, veritatis quo quia. Laboriosam incidunt animi provident. Adipisci placeat, rem assumenda dicta maiores veritatis! Neque eum est id esse ea obcaecati necessitatibus aperiam repellat harum hic? Debitis, veniam eos. Commodi laboriosam earum maxime quidem expedita soluta sequi. Rem eum officiis perspiciatis commodi blanditiis dolorum provident accusamus error? Officiis accusamus at labore fugit, molestiae distinctio repellendus quam praesentium nobis atque magnam neque veniam ab? Iusto quo similique eum, distinctio consequuntur officiis totam ab doloribus. Mollitia facere doloribus at voluptatem id officia sapiente a reiciendis officiis consequuntur necessitatibus nesciunt odit omnis excepturi ab soluta, eos earum repudiandae. Voluptatibus fugit animi quia obcaecati eius. Harum ea unde exercitationem magni! Molestias fuga ea ex atque, est veritatis suscipit eveniet ullam mollitia similique optio illum impedit eaque reiciendis voluptates aut autem totam ab nostrum? Corrupti sequi non expedita ipsum. Voluptatum, quo?