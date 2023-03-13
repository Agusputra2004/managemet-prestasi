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
</style> 
	<div class="page-inner py-5 bg-color">
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
              <div class="card-title">Data Dokumentasi</div>
              <a href="{{ route('materi.create') }}" class="btn btn-success btn-sm ml-auto" style="text-decoration: none; color:white;"> <i class="fa-solid fa-plus mr-1"></i>Tambah Prestasi</a>
          </div>
      </div>
      <div class="card-body">
        @if(Session::has('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
        </div>
        @endif
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Judul</th>
                        <th>Slug</th>
                        <th>Bukti</th>
                        <th>Status</th>
                        <th>Video</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($materi as $row)
                    <tr>
                        <td>{{ $row -> id }}</td>
                        <td>{{ $row -> judul_materi }}</td>
                        <td>{{ $row -> slug }}</td>
                        <td>{{ $row -> playlist->judul_playlist }}</td>
                        <td>
                            @if ($row ->is_active == '1')
                            Active
                            @else
                            Draft
                            @endif
                        </td>
                        <td>
                            <video src="{{asset('uploads/' . $row->gambar_prestasi)}}" width="100">
                        </td>
                        <td>
                            <a href="{{ route('materi.edit', $row->id) }}" class="btn btn-warning btn-sm"><i class="fa-solid fa-pencil"></i></a>
                            <form action="{{ route('materi.destroy', $row->id) }}" method="post" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button class="btn-danger btn-sm">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="6" class="text-center">data tidak ada</td>
                    </tr>

                    @endforelse

                </tbody>
            </table>

        </div>

    </div>
</div>
</div>
</div>
</div>
@endsection
