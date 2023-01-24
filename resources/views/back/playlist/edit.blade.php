@extends('layouts.default')
@section('content')

<div class="panel-header bg-primary-gradient">
	<div class="page-inner py-5">
		<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
			<div class="ml-md-auto py-2 py-md-0">
				{{-- <a href="#" class="btn btn-white btn-border btn-round mr-2">Manage</a>
				<a href="#" class="btn btn-secondary btn-round">Add Cu`stomer</a> --}}
			</div>
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
            <div class="card-title">playlist {{ $playlist ->judul_playlist}} </div>
            <a href="{{ route('playlist.index') }}" class="btn btn-warning btn-sm ml-auto"><i class="fa-solid fa-rotate-left"></i>Back</a>
        </div>
    </div>
    <div class="card-body">
        <form method="post" action="{{ route('playlist.update', $playlist->id ) }}" enctype="multipart/form-data"> 
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="Nama">Playlist video</label>
                <input type="text" name="judul_playlist" class="form-control" value="{{ $playlist ->judul_playlist }}" placeholder="Enter Nama Prestasi">
            </div>

            <div class="form-group">
                <label for="Detail">Deskripsi</label>
                <textarea name="deskripsi" id="editor1" class="form-control">{{ $playlist ->deskripsi }}</textarea>
            </div>

            <div class="form-group">
                <label for="Status">Status</label>
                <select name="is_active" class="form-control">
                    <option value="1" {{ $playlist->is_active == '1' ? 'selected' : ''}}>
                        publis
                    </option>
                    <option value="0" {{ $playlist->is_active == '0' ? 'selected' : ''}}>
                        draft
                    </option>
                </select>
            </div>

            <div class="form-group">
                <label for="Dokumentasi">Gambar playlist</label>
                <input type="file" name="gambar_playlist" class="form-control">
                <br>
                <label for="Dokumentasi">gambar saat ini</label><br>
                <img src="{{asset('uploads/' . $playlist->gambar_playlist)}}" width="100">
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
