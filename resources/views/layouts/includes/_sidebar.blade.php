<div id="sidebar-nav" class="sidebar">
    <div class="sidebar-scroll">
        <nav>
            <ul class="nav">
                <li><a href="/dashboard" class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}"><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
                @if(auth()->user()->role=='admin')
                    <li><a href="/pendaftaran-mahasiswa" class="nav-link {{ Request::is('pendaftaran-mahasiswa') ? 'active' : '' }}"><i class="fa fa-database"></i> <span>Data Mahasiswa</span></a></li>
                    <li><a href="/data-kegiatan" class="nav-link {{ Request::is('data-kegiatan') ? 'active' : '' }}"><i class="fa fa-database"></i> <span>Data Kegiatan</span></a></li>
                @endif
                @if(auth()->user()->role=='user')
                    <li><a href="/pendaftaranpkkmb" class="nav-link {{ Request::is('pendaftaranpkkmb') ? 'active' : '' }}"><i class="lnr lnr-enter"></i> <span>Pendaftaran</span></a></li>
                    <li><a href="/detail-kegiatan" class="nav-link {{ Request::is('detail-kegiatan') ? 'active' : '' }}"><i class="lnr lnr-list"></i> <span>Detail Kegiatan</span></a></li>
                @endif
            </ul>
        </nav>
    </div>
</div>

<!-- Script jQuery -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    $(document).ready(function() {
        // Menggunakan event click pada setiap elemen <a> dengan class "nav-link"
        $(".nav-link").click(function() {
            // Menghapus kelas "active" dari semua elemen <a> dengan class "nav-link"
            $(".nav-link").removeClass("active");
            
            // Menambahkan kelas "active" ke elemen <a> yang diklik
            $(this).addClass("active");
        });
    });
</script>
