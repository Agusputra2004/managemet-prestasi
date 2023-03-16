@extends('layouts.default')

@section('content')

<div class="panel-header bg-primary-gradient">
<style type="text/css">
    .bg-color {
        background-image: linear-gradient(	#0060a1, #0060a1);
    }
    .bg-btn {
        background-color: #0060a1;
    }
    .bg2 {
        background-color: #0060a1;
    }
    .bg3 {
        background-color: #FFFFFF;
    }
</style> 
	<div class="page-inner py-5 bg-color">
		<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">

		</div>
	</div>
</div>

<div class="page-inner mt--5">	
</div>
<div class="row">
  <div class="col-md-12">
     <div class="card full-height">
        <div class="card-header">
           <div class="card-head-row">
            <div class="card-title">Profil "{{ Auth::user()->name}}" </div>
            <a href="{{ route('profil.index') }}" class="btn btn-primary btn-sm ml-auto" style="text-decoration: none; color:white;"><i class="fa-solid fa-rotate-left mr-1"></i>Back</a>
        </div>
    </div>
    <div class="card-body">
        <form method="post" action="{{ route('profil.update', Auth::user()->id ) }}" enctype="multipart/form-data"> 
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Nama </label>
                <input type="text" name="name" class="form-control" value="{{ Auth::user()->name }}" placeholder="Enter Nama">
            </div>

            <div class="form-group">
                <label for="email">Email </label>
                <input name="email" class="form-control" value="{{ Auth::user()->email }}">
            </div>

            <div class="form-group">
                <label for="username">Username</label>
                <input name="username" class="form-control" value="{{ Auth::user()->username }}">
            </div>

            <div class="form-group">
                <label for="alamat">Alamat</label>
                <textarea name="alamat" class="form-control">{{ Auth::user()->alamat }}</textarea>
            </div>

            <div class="form-group">
                <label for="nohp">Nomor HP</label>
                <input name="nohp" class="form-control" value="{{ Auth::user()->nohp }}">
            </div>

            <div class="form-group">
                <label for="foto">Foto Profil</label>
                <input type="file" name="foto" class="form-control">
                <br>
                <label for="foto">gambar saat ini</label><br>
                <img src="{{ asset('uploads/'. Auth::user()->foto) }}" width="100">
            </div>


            <div class="form-group">
                <button class="btn btn-primary btn-sm" type="submit">Save</button>
                <button class="btn btn-danger btn-sm" type="reset">Reset</button>
            </div>
        </form>

    </div>
</div>
</div>
</div>
</div>
@endsection