<nav class="navbar navbar-expand-lg navbar-dark bg2 mb-3">
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
    <div class="container">  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#"><b>Home </b><span class="sr-only">(current)</span></a>
          </li>
          @foreach ($category as $cat)
          <li class="nav-item-active">
            <a class="nav-link text-white-50" href="#">{{ $cat->nama_kategori }}</a>
          </li>
          @endforeach
          <!-- <li class="nav-item dropdown active">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Category
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              @foreach ($category as $cat)
              <a class="dropdown-item" href="{{ $cat->slug }}">{{ $cat->nama_kategori }}</a>
              @endforeach
              <a class="dropdown-item" href="#">Another action</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </li> -->
          <!-- <li class="nav-item">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
          </li> -->
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div></div>
  </nav>