@extends('front.layouts.front-detail')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-lg-8 mt-4">
            <div class="div">
                <style type="text/css">
                    .center-cropped {
                        object-fit: cover;
                        object-position: center;
                        width: 700px;
                        height: 400px;
                        background-position: center center;
                        background-repeat: no-repeat;
                    }
                </style>
                <img class="center-cropped" src="{{ asset('uploads/'. $artikel->gambar_artikel) }}" class="img-fluid" > </img>
            </div>
            <div class="detail-content mt-2 p-4">
                <div class="detail-badge">
                    <a href="" class="badge badge-danger">{{ $artikel->kategori->nama_kategori }}</a>
                    <a href="" class="badge badge-primary">{{ $artikel->users->name }}</a>
                </div>
                <h2>{{ $artikel->judul }}</h2>
                <p style="font-size: 14px;">Di Posting Pada, {{ $artikel->created_at }}</p>
                <div class="detail-body">
                    <style type="text/css">
                        p{
                            text-align: justify;
                            text-justify: inter-word;
                        }
                    </style>
                    
                    <p>
                        {!! $artikel->body !!}
                    </p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 mt-4">
            <!-- <div class="detail-sidebar-iklan">
                <h4>{{ $iklanA->judul }}</h4>
                <hr>
                <a href="">
                    <img src="{{ asset('uploads/'. $iklanA->gambar_iklan)  }}"  width="350px">
                </a>
            </div> -->

            <div class="detail-sidebar-kategori">
                    <h4 class="mt-4">Kategori</h4>
                    <hr>
                    @foreach ( $category as $row)
                        <div class="sidebar-kategori d-flex flex-wrap">
                        <a href="" style="textdecoration:none;">
                            <p>{{ $row->nama_kategori }}</p>
                        </a>
                            <p class="ml-auto text-right"><span class="badge badge-dark">{{ $row->artikel->count() }}</span></p>
                        </div>
                    @endforeach
                    <!-- <div class="sidebar-kategori d-flex flex-wrap">
                    <a href="" style="textdecoration:none;">
                        <p>Nama Kategori</p>
                    </a>
                        <p class="ml-auto text-right"><span class="badge badge-dark">7</span></p>
                    
                    </div>
                    <div class="sidebar-kategori d-flex flex-wrap">
                    <a href="" style="textdecoration:none;">
                        <p>Nama Kategori</p>
                    </a>
                        <p class="ml-auto text-right"><span class="badge badge-dark">7</span></p>
                    
                    </div>
                    <div class="sidebar-kategori d-flex flex-wrap">
                    <a href="" style="textdecoration:none;">
                        <p>Nama Kategori</p>
                    </a>
                        <p class="ml-auto text-right"><span class="badge badge-dark">7</span></p>
                    
                    </div>
                    <div class="sidebar-kategori d-flex flex-wrap">
                    <a href="" style="textdecoration:none;">
                        <p>Nama Kategori</p>
                    </a>
                        <p class="ml-auto text-right"><span class="badge badge-dark">7</span></p>
                    
                    </div> -->
            </div>

            <div class="detail-sidebar-artrikel">
                <h4 class="mt-4">Artikel Terbaru</h4>
                <hr>
                @foreach( $postinganTerbaru as $row )
                    <div class="media mt-3">
                        <a href="{{ route('detail-artikel', $row->slug) }}" style="text-decoration: none;">
                        <style type="text/css">
                        .center-croppedd {
                            object-fit: cover;
                            object-position: center;
                            margin-right: 10px;
                            width: 50px;
                            height: 50px;
                            background-position: center center;
                            background-repeat: no-repeat;
                        }
                        </style>
                        <img class="center-croppedd" src="{{ asset('uploads/'. $row->gambar_artikel) }}" class="mr-3" width="70px">
                        <div class="media-body">
                        <h6 class="mt-0" style="color:black">{{ $row->judul }}</h6>
                        </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

@endsection

