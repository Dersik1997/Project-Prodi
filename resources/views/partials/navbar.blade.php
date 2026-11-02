<div class="th-menu-wrapper">
        <div class="th-menu-area text-center">
            <button class="th-menu-toggle"><i class="fal fa-times"></i></button>
            <div class="mobile-logo">
                <a href="{{ route('home') }}"><img src="{{ asset('assets/img/logo-ti-ummi.png') }}" alt="Teknik Informatika UMMI" style="max-height: 48px; width: auto;"></a>
            </div>
            <div class="th-mobile-menu">
                <ul>
                    <li class="menu-item-has-children">
                        <a href="{{ route('home') }}">Beranda</a>
                        <ul class="sub-menu">
                            <li><a href="{{ route('home') }}">Beranda Utama</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="{{ route('about') }}">Profil</a>
                        <ul class="sub-menu">
                            <li><a href="{{ route('about') }}">Tentang Program Studi</a></li>
                            <li><a href="{{ route('about') }}">Visi dan Misi</a></li>
                            <li><a href="{{ route('faculty.index') }}">Dosen & Tenaga Pendidik</a></li>
                            <li><a href="{{ route('faculty.details') }}">Struktur Organisasi</a></li>
                            <li><a href="{{ route('campus') }}">Fasilitas Kampus</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="#">Akademik</a>
                        <ul class="sub-menu">
                            <li><a href="{{ route('program.index') }}">Program Studi</a></li>
                            <li><a href="{{ route('program.details') }}">Kurikulum & Silabus</a></li>
                            <li><a href="{{ route('faculty.index') }}">Daftar Dosen</a></li>
                            <li><a href="{{ route('alumni') }}">Alumni</a></li>
                            <li><a href="{{ route('pricing') }}">Biaya Pendidikan</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="{{ route('research.index') }}">Penelitian</a>
                        <ul class="sub-menu">
                            <li><a href="{{ route('research.index') }}">Daftar Penelitian</a></li>
                            <li><a href="{{ route('research.details') }}">Detail Penelitian</a></li>
                            <li><a href="{{ route('research.index') }}">Publikasi & Jurnal</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="{{ route('event.index') }}">Pengabdian</a>
                        <ul class="sub-menu">
                            <li><a href="{{ route('event.index') }}">Pengabdian Masyarakat (PkM)</a></li>
                            <li><a href="{{ route('event.details') }}">Detail Kegiatan PkM</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="{{ route('blog.index') }}">Informasi</a>
                        <ul class="sub-menu">
                            <li><a href="{{ route('blog.index') }}">Berita & Artikel</a></li>
                            <li><a href="{{ route('event.index') }}">Agenda Acara</a></li>
                            <li><a href="{{ route('faq') }}">FAQ</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="#">Berkas</a>
                        <ul class="sub-menu">
                            <li><a href="{{ route('pricing') }}">Pedoman Akademik</a></li>
                            <li><a href="{{ route('program.details-sidebar') }}">Formulir & Dokumen</a></li>
                            <li><a href="{{ route('blog.details') }}">Dokumen SK & Akreditasi</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{ route('contact') }}">Kontak</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!--==============================
	Header Area
==============================-->
    <header class="th-header header-layout1">
        <div class="header-top">
            <div class="container th-container4">
                <div class="row justify-content-center justify-content-lg-between align-items-center gy-2">
                    <div class="col-auto d-none d-lg-block">
                        <div class="header-links">
                            <ul class="header-left-wrap">
                                <li>
                                    <div class="dropdown-link">
                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink1" data-bs-toggle="dropdown" aria-expanded="false"> Studients</a>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink1">
                                            <li>
                                                <a href="#">Scrollship</a>
                                                <a href="#">Forening</a>
                                                <a href="#">Online</a>
                                                <a href="#">Bysexual</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li><a href="{{ route('contact') }}">Staff</a></li>
                                <li><a href="{{ route('alumni') }}">Alumni</a></li>
                                <li><a href="{{ route('faculty.index') }}">Faculty</a> </li>
                                <li><a href="{{ route('contact') }}">Community</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="header-links">
                            <ul class="header-right-wrap">
                                <li><i class="fa-solid fa-user"></i><a href="#login-form" class="popup-content">Login / Register</a></li>
                                <li><i class="fas fa-comments"></i><a href="{{ route('faq') }}">FAQ</a></li>
                                <li>
                                    <div class="dropdown-link">
                                      <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink2" data-bs-toggle="dropdown" aria-expanded="false">
    <svg class="flag-icon" width="24" height="16" viewBox="0 0 3 2" xmlns="http://www.w3.org/2000/svg" aria-label="Indonesia">
        <rect width="3" height="1" fill="#E70011"/>
        <rect y="1" width="3" height="1" fill="#FFFFFF"/>
    </svg>
</a>  
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink2">
                                            <li>
                                                <a href="#">Indonesia</a>
                                                <a href="#">English</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-info d-none d-sm-block">
            <div class="container th-container2">
                <div class="row justify-content-between align-items-center">
                    <div class="col-auto">
                        <div class="header-logo">
                            <a href="{{ route('home') }}">
                                <img src="{{ asset('assets/img/logo-ti-ummi.png') }}" alt="Teknik Informatika UMMI" style="max-height: 52px; width: auto;" />
                            </a>
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="header-info-right">
                            <div class="header-info-item">
                                <div class="header-info-icon">
                                    <i class="fa-solid fa-location-dot"></i>
                                </div>
                                <div class="header-info-content">
                                    <span class="header-info-text">Address</span>
                                    <h3 class="header-info-title">
                                        <a href="#">Jalan R. Syamsudin, SH No. 50 Kota
Sukabumi 43113</a>
                                    </h3>
                                </div>
                            </div>
                            <div class="header-info-item">
                                <div class="header-info-icon">
                                    <i class="fa-solid fa-envelope"></i>
                                </div>
                                <div class="header-info-content">
                                    <span class="header-info-text">Email</span>
                                    <h3 class="header-info-title">
                                        <a href="tel:mailinfo@example.com">ti@ummi.ac.id</a>
                                    </h3>
                                </div>
                            </div>
                            <div class="header-info-item">
                                <div class="header-info-icon">
                                    <i class="fa-solid fa-phone"></i>
                                </div>
                                <div class="header-info-content">
                                    <span class="header-info-text">Phone Number</span>
                                    <h3 class="header-info-title">
                                        <a href="tel:+0112345678900">081280408246</a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="sticky-wrapper">
            <!-- Main Menu Area -->
            <div class="menu-area">
                <div class="container th-container2">
                    <div class="menu-wrapp">
                        <div class="row align-items-center justify-content-between">
                            <div class="col-auto">
                                <div class="header-left d-flex align-items-center">
                                    <div class="header-logo d-block d-sm-none">
                                        <a href="{{ route('home') }}">
                                            <img src="{{ asset('assets/img/logo-ti-ummi.png') }}" alt="Teknik Informatika UMMI" style="max-height: 40px; width: auto;" />
                                        </a>
                                    </div>
                                    <div class="header-button d-none d-sm-block">
                                        <a href="{{ route('contact') }}" class="th-btn">
                                            Get More Info
                                            <img src="{{ asset('assets/img/icon/right-icon.svg') }}" class="th-arrow" alt="icon">
                                        </a>
                                    </div>
                                    <nav class="main-menu d-none d-xl-block">
                                        <ul>
                                            <li class="menu-item-has-children">
                                                <a href="{{ route('home') }}">Beranda</a>
                                                <ul class="sub-menu">
                                                    <li><a href="{{ route('home') }}">Beranda Utama</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children">
                                                <a href="{{ route('about') }}">Profil</a>
                                                <ul class="sub-menu">
                                                    <li><a href="{{ route('about') }}">Tentang Program Studi</a></li>
                                                    <li><a href="{{ route('about') }}">Visi dan Misi</a></li>
                                                    <li><a href="{{ route('faculty.index') }}">Dosen & Tenaga Pendidik</a></li>
                                                    <li><a href="{{ route('faculty.details') }}">Struktur Organisasi</a></li>
                                                    <li><a href="{{ route('campus') }}">Fasilitas Kampus</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children">
                                                <a href="#">Akademik</a>
                                                <ul class="sub-menu">
                                                    <li><a href="{{ route('program.index') }}">Program Studi</a></li>
                                                    <li><a href="{{ route('program.details') }}">Kurikulum & Silabus</a></li>
                                                    <li><a href="{{ route('faculty.index') }}">Daftar Dosen</a></li>
                                                    <li><a href="{{ route('alumni') }}">Alumni</a></li>
                                                    <li><a href="{{ route('pricing') }}">Biaya Pendidikan</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children">
                                                <a href="{{ route('research.index') }}">Penelitian</a>
                                                <ul class="sub-menu">
                                                    <li><a href="{{ route('research.index') }}">Daftar Penelitian</a></li>
                                                    <li><a href="{{ route('research.details') }}">Detail Penelitian</a></li>
                                                    <li><a href="{{ route('research.index') }}">Publikasi & Jurnal</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children">
                                                <a href="{{ route('event.index') }}">Pengabdian</a>
                                                <ul class="sub-menu">
                                                    <li><a href="{{ route('event.index') }}">Pengabdian Masyarakat (PkM)</a></li>
                                                    <li><a href="{{ route('event.details') }}">Detail Kegiatan PkM</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children">
                                                <a href="{{ route('blog.index') }}">Informasi</a>
                                                <ul class="sub-menu">
                                                    <li><a href="{{ route('blog.index') }}">Berita & Artikel</a></li>
                                                    <li><a href="{{ route('event.index') }}">Agenda Acara</a></li>
                                                    <li><a href="{{ route('faq') }}">FAQ</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children">
                                                <a href="#">Berkas</a>
                                                <ul class="sub-menu">
                                                    <li><a href="{{ route('pricing') }}">Pedoman Akademik</a></li>
                                                    <li><a href="{{ route('program.details-sidebar') }}">Formulir & Dokumen</a></li>
                                                    <li><a href="{{ route('blog.details') }}">Dokumen SK & Akreditasi</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="{{ route('contact') }}">Kontak</a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-auto ms-lg-auto">
                                <div class="header-button">
                                    <form class="search-form">
                                        <input type="text" placeholder="Search...">
                                        <button type="submit"><i class="fa-light fa-magnifying-glass"></i></button>
                                    </form>
                                    <a href="#" class="icon-btn sideMenuToggler d-none d-xl-block"><img src="{{ asset('assets/img/icon/grid2.svg') }}" alt=""></a>

                                    <button type="button" class="th-menu-toggle d-inline-block d-xl-none"><i class="far fa-bars"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
