@extends('layouts.default')

@section('content')
<div class="panel-header bg-primary-gradient">
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
		<h1 style="text-align:left; color:white;">Halaman Profil</h1>
	</div>
</div>

<div class="page-inner mt--5">
</div>
<h2 class="md-5 ml-5 mt-3">Halo, <b>{{ Auth::user()->username }}!!</b></h2>
<div class="float-center aligncenter">
    <img src="{{ asset('uploads/'. Auth::user()->foto) }}" alt="..." class="rounded-circle" style="border-style: dashed; padding: 5px; border-color: green; border-width: 5px;" width="250px" height="250px">
</div>
        <div class="container md-5 mx-5 mb-5">
            <div class="table-responsive">
                <div class="table mt-5">
                <a href="/profil/edit" class="btn btn-warning btn-sm" style="float: right; margin-right: 100px;"><i class="fa-solid fa-pencil mr-1"></i>Edit Profil</a>
                    <table>
                        <thead>
                            <tr><th style="font-size:18px">Nama </th><td style="font-size:18px">: {{ Auth::user()->name }}</td></tr>
                            <tr><th style="font-size:18px">E-mail </th><td style="font-size:18px">: {{ Auth::user()->email }}</td></tr>
                            <tr><th style="font-size:18px">Alamat </th><td style="font-size:18px">: {{ Auth::user()->alamat }}</td></tr>
                            <tr><th style="font-size:18px">Nomor Hp </th><td style="font-size:18px">: {{ Auth::user()->nohp }}</td></tr>
                        </thead>
                    </table>
                </div>  
            </div> 
        </div>
</div>
</div>
</div>
@endsection