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
						<div class="card-title">Tambah Iklan </div>
                        <a href="{{ route('iklan.index') }}" class="btn btn-warning btn-sm ml-auto"><i class="fa-solid fa-rotate-left"></i>Back</a>
					</div>
				</div>
				<div class="card-body">
                    <form method="post" action="{{ route('iklan.store') }}" enctype="multipart/form-data"> 
                        @csrf
                        <div class="form-group">
                            <label for="Nama">Judul </label>
                            <input type="text" name="judul" class="form-control" placeholder="Enter judul">
                        </div>

                        <div class="form-group">
                            <label for="Nama">Link Iklan </label>
                            <input type="text" name="link" class="form-control" placeholder="Enter link">
                        </div>

                        <div class="form-group">
                            <label for="Status">Status</label>
                            <select name="status" class="form-control">
                            <option value="1">publis</option>
                            <option value="0">draft</option>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label for="gambar_iklan">Gambar Iklan</label>
                            <input type="file" name="gambar_iklan" class="form-control">
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
