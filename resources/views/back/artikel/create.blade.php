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
						<div class="card-title">Form tambah Prestasi</div>
                        <a href="{{ route('artikel.index') }}" class="btn btn-warning btn-sm ml-auto"><i class="fa-solid fa-rotate-left"></i>Back</a>
					</div>
				</div>
				<div class="card-body">
                    <form method="post" action="{{ route('artikel.store') }}" enctype="multipart/form-data"> 
                        @csrf
                        <div class="form-group">
                            <label for="Nama">Nama Prestasi</label>
                            <input type="text" name="judul" class="form-control" id="text" placeholder="Enter Nama Prestasi">
                        </div>

                        <div class="form-group">
                            <label for="Detail">Detail Prestasi</label>
                            <textarea name="body" id="editor1" class="form-control"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="kategori">Kategori</label>
                            <select name="kategori_id" class="form-control">
                            	@foreach ($kategori as $row)
                            <option value="{{ $row -> id }}">{{$row -> nama_kategori}}</option>
                            @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="Dokumentasi">Dokumentasi</label>
                            <input type="file" name="gambar_artikel" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="Status">Status</label>
                            <select name="is_active" class="form-control">
                            <option value="1">publis</option>
                            <option value="0">draft</option>
                            </select>
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
