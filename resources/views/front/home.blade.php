@extends('front.layouts.frontend')

@section('content')
<div class="row">
    @forelse ($artikel as $row)
    <div class="col-md-4 mt-3 mb-3">
       <div class="card">
           <img class="center-cropped" src="{{ asset('uploads/' . $row->gambar_artikel) }}" class="card-img-top" alt="...">
           <div class="card-body ">
             <h5 class="card-title">
               <a href="{{ route('detail-artikel', $row->slug) }}" style="text-decoration: none;">
               {{ $row->judul }}
               </a>
              </h5>
              <style type="text/css">
              .center-cropped {
                object-fit: cover;
                object-position: center;
                width: 348px;
                height: 250px;
                background-position: center center;
                background-repeat: no-repeat;
              }
              p {
              white-space: nowrap;
              overflow: hidden;
              text-overflow: ellipsis;
              max-width: 300px;
              }
              </style>
             <p class="card-text">
              {!! $row->body !!}
              </p>
           </div>
           <!-- <ul class="list-group list-group-flush">
             <li class="list-group-item">Cras justo odio</li>
             <li class="list-group-item">Dapibus ac facilisis in</li>
             <li class="list-group-item">Vestibulum at eros</li>
           </ul> -->
           <div class="card-body">
             <a href="#" class="card-link">{{ $row->users->name }}</a>
             <a href="#" class="card-link">{{ $row->kategori->nama_kategori }}</a>
           </div>
         </div>
   </div>
    @empty
    <p>Data Masih Kosong</p>
    @endforelse
</div>

@endsection

