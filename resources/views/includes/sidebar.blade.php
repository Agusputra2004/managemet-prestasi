
<div class="sidebar sidebar-style-2">			
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <div class="user">
                <div class="avatar-sm float-left mr-2">
                    <img src="{{ asset('uploads/'. Auth::user()->foto) }}" alt="..." class="avatar-img rounded-circle">
                </div>
                <div class="info">
                    <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                        <span>
                        {{ Auth::user()->username }}
                            <span class="email" style="font-size:12px">{{ Auth::user()->email }}</span>
                            <!-- <span class="user-level">Administrator</span> -->
                            <span class="caret"></span>
                        </span>
                    </a>
                    <div class="clearfix"></div>

                    <div class="collapse in" id="collapseExample">
                        <ul class="nav">
                            <li>
                                <a href="/profil">
                                    <span class="link-collapse">Profil Saya</span>
                                </a>
                            </li>
                            <li>
                                <a href="/profil/edit">
                                    <span class="link-collapse">Edit Profil</span>
                                </a>
                            </li>
                            <!-- <li>
                                <a href="#settings">
                                    <span class="link-collapse">Settings</span>
                                </a>
                            </li> -->
                        </ul>
                    </div>
                </div>
            </div>
            <ul class="nav nav-success">
                <li class="nav-item active">
                    <a data-toggle="collapse" href="{{ route('dashboard') }}" class="collapsed bg-icon nav-green" aria-expanded="false">
                        <i class="fas fa-home"></i>
                        <p>Dashboard</p>
                    </a>
                    <!-- <div class="collapse" id="dashboard">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="../demo1/index.html">
                                    <span class="sub-item">Dashboard 1</span>
                                </a>
                            </li>
                            <li>
                                <a href="../demo2/index.html">
                                    <span class="sub-item">Dashboard 2</span>
                                </a>
                            </li>
                        </ul>
                    </div> -->
                </li>
                <!-- <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section">Components</h4>
                </li> -->
                <li class="nav-item">
                    <a href="{{ route('kategori.index') }}">
                        <i class="fas fa-list"></i>
                        <p>Kategori</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('artikel.index') }}">
                        <i class="fas fa-medal"></i>
                        <p>Prestasi</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('playlist.index') }}">
                        <i class="fas fa-file"></i>
                        <p>Bukti</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('materi.index') }}">
                        <i class="fas fa-film"></i>
                        <p>Dokumentasi</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('slide.index') }}">
                        <i class="fas fa-play"></i>
                        <p>Banner</p>
                    </a>
                </li>
                <!-- <li class="nav-item">
                    <a href="{{ route('iklan.index') }}">
                        <i class="fas fa-play"></i>
                        <p>Iklan</p>
                    </a>
                </li> -->

                <li class="nav-item">
                    <a href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    <i class="fas fa-undo"></i>
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </li>
        </ul>
    </div>
</div>
</div>