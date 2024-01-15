<div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
    <div class="brand-logo">
        <a href="index.html">
            <img src="/template/assets/images/logo-icon.png" class="logo-icon" alt="logo icon">
            <h5 class="logo-text">Pengaduan Masyarakat</h5>
        </a>
    </div>
    <ul class="sidebar-menu do-nicescrol">
        <li class="sidebar-header">MAIN NAVIGATION</li>
                    <li>
                        <a href="{{url('/home')}}">
                            <i class="zmdi zmdi-view-dashboard"></i> <span>Dashboard</span>
                        </a>
                    </li>
        @if(Auth::user()->role==0)
        <li>
            <a href="{{url('/pengaduan/create')}}">
                <i class="zmdi zmdi-face"></i> <span>Ajukan Pengaduan</span>
            </a>
        </li>


        <li>
            <a href="{{url('/pengaduan')}}">
                <i class="zmdi zmdi-format-list-bulleted"></i> <span>List Pengaduan</span>
            </a>
        </li>
        @elseif(Auth::user()->role==1)
                <li>
                    <a href="{{url('/pengaduan')}}">
                        <i class="zmdi zmdi-format-list-bulleted"></i> <span>List Pengaduan</span>
                    </a>
                </li>

        <li>
            <a href="{{url('/laporan')}}">
                <i class="zmdi zmdi-grid"></i> <span>Laporan</span>
            </a>
        </li>

        @elseif(Auth::user()->role==2)
                <li>
            <a href="{{url('/pengaduan/create')}}">
                <i class="zmdi zmdi-face"></i> <span>Ajukan Pengaduan</span>
            </a>
        </li>
        <li>
            <a href="{{url('/pengaduan')}}">
                <i class="zmdi zmdi-format-list-bulleted"></i> <span>List Pengaduan</span>
            </a>
        </li>
                <li>
            <a href="{{url('/laporan')}}">
                <i class="zmdi zmdi-grid"></i> <span>Laporan</span>
            </a>
        </li>
        @endif
    </ul>

</div>