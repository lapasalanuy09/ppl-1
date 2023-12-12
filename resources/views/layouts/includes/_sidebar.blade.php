<div id="sidebar-nav" class="sidebar">
    <div class="sidebar-scroll">
        <nav>
            <ul class="nav">
                <li><a href="/dashboard" class="active"><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
                @if(auth()->user()->role=='admin')
                    <li><a href="/pendaftaran-mahasiswa" class=""><i class="fa fa-database"></i> <span>Data Mahasiswa</span></a></li>
                    <li><a href="/data-kegiatan" class=""><i class="fa fa-database"></i> <span>Data Kegiatan</span></a></li>
                @endif
                @if(auth()->user()->role=='user')
                    <li><a href="/pendaftaranpkkmb" class=""><i class="lnr lnr-enter"></i> <span>Pendaftaran</span></a></li>
                    <li><a href="/detail-kegiatan" class=""><i class="lnr lnr-list"></i> <span>Detail Kegiatan</span></a></li>
                @endif
            </ul>

        </nav>
    </div>
</div>
