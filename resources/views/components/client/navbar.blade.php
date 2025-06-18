<nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5">
    <a href="{{url('/')}}" class="navbar-brand d-flex align-items-center">
        <h1 class="m-0">
            <img class="img-fluid me-3" src="{{asset('img/logomts.png')}}" alt="" />
        </h1>
    </a>
    <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav mx-auto bg-light rounded pe-4 py-3 py-lg-0">
            <a href="{{url('/')}}" class="nav-item nav-link">Home</a>
            <a href="{{route('aboutus')}}" class="nav-item nav-link">Tentang Kami</a>
            <a href="{{route('blog')}}" class="nav-item nav-link">Artikel</a>
            <a href="{{route('faq')}}" class="nav-item nav-link">Persyaratan</a>
            <a href="{{route('contactus')}}" class="nav-item nav-link">Kontak</a>
        </div>
    </div>
    <a href="{{route('daftar')}}" class="btn btn-success px-3 d-none d-lg-block">Daftar Sekarang</a>
</nav>