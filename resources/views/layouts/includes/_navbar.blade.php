<nav class="navbar navbar-default navbar-fixed-top">
    <div class="brand">
        <a href="/">
            <img src="{{ asset('template/assets/img/lo.jpeg') }}" width="200" height="23" alt="Logo"
                class="img-responsive logo">
        </a>
    </div>
    <div class="container-fluid">
        <div id="navbar-menu">
            <ul class="nav navbar-nav navbar-right">
                <div class="navbar-btn">
                    <button type="button" class="btn-toggle-fullwidth"><i
                            class="lnr lnr-arrow-left-circle"></i></button>
                </div>
                <form class="navbar-form navbar-left"method="GET" action="/pendaftaran-mahasiswa">
                    <div class="input-group">
                        <input name="cari"type="search" value="" class="form-control"
                            placeholder="Search Pendaftar...">
                        <span class="input-group-btn"><button type="submit"
                                class="btn btn-primary">search</button></span>
                    </div>
                </form>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img
                            src="{{ asset('template/assets/img/user.png') }}" class="img-circle" alt="Avatar">
                        <span>{{ auth()->user()->nama }}</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
                    <ul class="dropdown-menu">

                        @if (Auth::user()->role == 'user')
                            <li><a href="{{ route('myprofil', ['id' => Auth::user()->id]) }}"><i class="lnr lnr-user"></i> <span>My
                                        Profile</span></a></li>

                        @endif


                        <li><a href="/logout"><i class="lnr lnr-exit"></i> <span>Logout</span></a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
