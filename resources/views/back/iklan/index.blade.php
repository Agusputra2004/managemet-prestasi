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
              <div class="card-title">Daftar Iklan </div>
              <a href="{{ route('iklan.create') }}" class="btn btn-primary btn-sm ml-auto" > <i class="fa-solid fa-plus"></i>Tambah Iklan</a>
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
                        <th>Judul Iklan</th>
                        <th>Link</th>
                        <th>Status</th>
                        <th>Gambar</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($iklan as $row)
                    <tr>
                        <td>{{ $row -> id }}</td>
                        <td>{{ $row -> judul }}</td>
                        <td>{{ $row -> link }}</td>
                        <td>
                            @if ($row ->status == '1')
                            Active
                            @else
                            Draft
                            @endif
                        </td>
                        <td>
                            <img src="{{asset('uploads/' . $row->gambar_iklan)}}" width="100">
                        </td>
                        <td>
                            <a href="{{ route('iklan.edit', $row->id) }}" class="btn btn-warning btn-sm"><i class="fa-solid fa-pencil"></i></a>
                            <form action="{{ route('iklan.destroy', $row->id) }}" method="post" class="d-inline">
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
