<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda Kantor PUPR</title>
    @vite(['resources/sass/app.scss','resources/js/app.js'])

    <link rel="icon" type="image/png" href="https://cdn.enterwind.com/assets/pupr/img/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <nav class="navbar navbar-light " style="background-color: #16156C;">
        <div class="container-fluid">
            <a class="navbar-brand text-white" href="https://pupr.samarindakota.go.id/website" style="color: white;">
                <img src="https://upload.wikimedia.org/wikipedia/commons/3/38/Logo_Kota_Samarinda.png" alt="" width="30" height="24" class="d-inline-block align-text-top">
                Kantor PUPR
            </a>

            <button class="btn btn-outline-success" alt="" width="30" height="24" type="submit"><i class="fa fa-home"
                    aria-hidden="true"></i> halaman utama</button>
        </div>
    </nav>
    <!-- navbar end -->

    <div class="container-fluid">
        <div class="row align-items-center justify-content-center text-center">
            <div class="col-sm-12 col-lg-12 mb-2 mt-2">
                <div class="welcome-text justify-content-center"><img width="50px"
                        src="https://perkim.samarindakota.go.id/silaju_api/public/files/231115120814-logo.png"
                        alt="Logo">
                    <h3 class="text-primary">Selamat datang di website Kantor PUPR(Pekerjaan Umum dan Pernataan Ruang)</h3>
                </div>
            </div>
            <div class="col-sm-12 col-lg-12 d-flex align-items-center justify-content-center mb-2"><a
                    href="https://pupr.samarindakota.go.id/website" class="btn btn-primary" target="_blank"
                    rel="noopener noreferrer"> <i class="fa fa-home" aria-hidden="true"></i> Webiste Utama Kantor
                    PUPR</a></div>
            <div class="row justify-content-center ">
                <div class="col-sm-6 col-md-4 mt-2 col-lg-4 text-center mb-4 ">
                    <div class="card card-beranda mx-auto">
                        <a class="text-dark" href="{{route('form_pengaduan')}}">
                            <img src="https://perkim.samarindakota.go.id/silaju_api/public/files/pelayanan/background/blue-card-bg.png"
                                class="card-img-top" alt="Background">
                            <div class="card-img-overlay d-flex align-items-center justify-content-center">
                                <div class="icon-gambar">
                                    <img src="https://perkim.samarindakota.go.id/silaju_api/public/files/pelayanan/icon/form-logo.png"
                                        alt="Icon" class="icon-img">
                                </div>
                                <div class="text-center mt-3">
                                    <h5 class="card-title card-beranda-title">Form Pendaftaran</h5>
                                    <p class="card-text card-beranda-text">Klik disini untuk mengisi form</p>
                                </div>
                            </div>
                            </a>
                        </div>
                    </div>

            <div class="col-sm-6 col-md-4 mt-2 col-lg-4 text-center mb-4 ">
                <div class="card card-beranda mx-auto">
                    <a class="text-dark" href="{{route('posts.index')}}">
                        <img src="https://perkim.samarindakota.go.id/silaju_api/public/files/pelayanan/background/white-card-bg.png"
                            class="card-img-top" alt="Background">
                        <div class="card-img-overlay d-flex align-items-center justify-content-center">
                            <div class="icon-gambar">
                                <img src="https://perkim.samarindakota.go.id/silaju_api/public/files/pelayanan/icon/list-logo.png"
                                    alt="Icon" class="icon-img">
                            </div>
                            <div class="text-center mt-3">
                                <h5 class="card-title card-beranda-title">Daftar Pengaduan</h5>
                                <p class="card-text card-beranda-text">Klik disini untuk lihat pengaduan</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row mt-4 mb-4 mr-2 ml-2">
            <div class="col-sm-12 col-md-3 col-lg-3 mt-4">
                <h4 class="font-weight-bold text-primary">Dinas Perumahan dan Kawasan Permukiman</h4>
                <h5> <i class="fa fa-map-marker" aria-hidden="true"></i> Jl. H. Achmad Amins, Gn. Lingai, Kec. Sungai
                    Pinang, Kota Samarinda, Kalimantan Timur 75117
                </h5>
            </div>
            <div class="col-sm-12 col-md-3 col-lg-3 mt-4">
                <h5 class="font-weight-bold text-primary">Link Terkait</h5>
                <hr><a href="https://pupr.samarindakota.go.id/website" target="_blank" rel="noreferrer"
                    title="Website PUPR"><img src="https://cdn.enterwind.com/assets/pupr/img/favicon.png" alt="Icon"
                        class="img-thumbnail link-hover" width="50px"></a>

            </div>
            <div class="col-sm-12 col-md-3 col-lg-3 mt-4">
                <h5 class="font-weight-bold text-primary">Sosial Media</h5>
                <hr><a href="https://www.facebook.com/profile.php?id=100016214552651" target="_blank" rel="noreferrer"
                    title="Facebook"><img
                        src="https://perkim.samarindakota.go.id/silaju_api/public/files/icon_kontak/070922112216-facebook.png"
                        alt="Icon" class="img-thumbnail link-hover mr-1" width="50px"></a><a
                    href="mailto:dinaspkp2019@gmail.com" target="_blank" rel="noreferrer" title="Gmail"><img
                        src="https://perkim.samarindakota.go.id/silaju_api/public/files/icon_kontak/070922112337-gmail.png"
                        alt="Icon" class="img-thumbnail link-hover mr-1" width="50px"></a><a
                    href="https://www.instagram.com/disperkim_smr/" target="_blank" rel="noreferrer"
                    title="Instagram"><img
                        src="https://perkim.samarindakota.go.id/silaju_api/public/files/icon_kontak/070922111706-instagram.png"
                        alt="Icon" class="img-thumbnail link-hover mr-1" width="50px"></a><a
                    href="https://twitter.com/DisperkimSmr" target="_blank" rel="noreferrer" title="Twitter"><img
                        src="https://perkim.samarindakota.go.id/silaju_api/public/files/icon_kontak/070922112306-twitter.png"
                        alt="Icon" class="img-thumbnail link-hover mr-1" width="50px"></a><a
                    href="mailto:DPP_SMD@yahoo.com" target="_blank" rel="noreferrer" title="Yahoo"><img
                        src="https://perkim.samarindakota.go.id/silaju_api/public/files/icon_kontak/070922113300-yahoo.png"
                        alt="Icon" class="img-thumbnail link-hover mr-1" width="50px"></a>
            </div>
            <div class="col-sm-12 col-md-3 col-lg-3 mt-4">
                <h5 class="font-weight-bold text-primary">Map</h5>
                <hr>
                <div class="map-responsive"><iframe title="maps" width="100%" frameborder="0" allowfullscreen=""
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.6903011049053!2d117.17512067404098!3d-0.4589864352795513!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2df5d6033b793f91%3A0xe380dade32764edd!2sKantor%20PUPR%20Samarinda!5e0!3m2!1sid!2sid!4v1708498773068!5m2!1sid!2sid"></iframe>
                </div>
            </div>
        </div>
    </div>
    <footer class="main-footer bg-primary">Copyright © 2024 <strong><a class="text-light" href="/silaju/daftar_pju">Tim
                IT Programmer</a></strong>
        <div class="float-right d-none d-md-inline-block"><b>Versi</b> 2.2.0</div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
<style>
    .card-beranda:hover {
        transform: translateY(-5px);
        transition: transform 0.3s ease;
    }
</style>