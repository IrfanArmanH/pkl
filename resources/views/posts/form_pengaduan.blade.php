<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pengaduan</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <link rel="icon" type="image/png" href="https://cdn.enterwind.com/assets/pupr/img/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.8.0/dist/leaflet.css" integrity="sha512-hoalWLoI8r4UszCkZ5kL8vayOGVae1oxXe/2A4AO6J9+580uKHDO3JdHb7NzwwzK5xr/Fs0W40kiNHxM9vyTtQ==" crossorigin=""/>
    <script src="https://unpkg.com/leaflet@1.8.0/dist/leaflet.js" integrity="sha512-BB3hKbKWOc9Ez/TAwyWxNXeoV9c1v6FIeYiBieIWkpLjauysF18NzgR1MBNBXf8/KABdlkX68nAhlwcDFLGPCQ==" crossorigin=""></script>

	<style>
		.leaflet-container {
			height: 400px;
			width: 600px;
			max-width: 100%;
			max-height: 100%;
		}
	</style>
</head>

<body>
<nav class="navbar navbar-light" style="background-color: #16156C;">
        <div class="container-fluid">
            <a class="navbar-brand text-white" href="https://pupr.samarindakota.go.id/website">
                <img src="https://upload.wikimedia.org/wikipedia/commons/3/38/Logo_Kota_Samarinda.png" alt="" width="30"
                    height="24" class="d-inline-block align-text-top ">
                Kantor PUPR
            </a>
            <button class="btn btn-outline-success" alt="" width="30" height="24" type="submit"><i class="fa fa-home"
                    aria-hidden="true"></i> halaman utama</button>
        </div>
    </nav>
    <!-- nav end -->


    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel"
        style="max-width: 90%; margin: 0 auto;">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://pupr.samarindakota.go.id/storage/Media/Galeri/2019-10/31/lanjutan-peningkatan-dan-normaliasasi-anak-sungai-handil-kopi-vTifT_m.jpeg"
                    class="d-block w-100 mx-auto" alt="" style="max-height: 300px;">
                <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://pupr.samarindakota.go.id/storage/Media/Galeri/2023-11/30/bimbingan-teknis-dan-studi-kasus-penanganan-longsor-kota-samarinda-GWs9L_m.jpg"
                    class="d-block w-100 mx-auto" alt="" style="max-height: 300px;">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Second slide label</h5>
                    <p>Some representative placeholder content for the second slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://i0.wp.com/kalpostonline.com/wp-content/uploads/2019/11/PUPR-Samarinda.jpg?fit=720%2C359&ssl=1"
                    class="d-block w-100 mx-auto" alt="" style="max-height: 300px;">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Third slide label</h5>
                    <p>Some representative placeholder content for the third slide.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div class="card m-3">
        <div class="card-header">
            <i class="fa fa-database" aria-hidden="true"></i> Daftar PJU
        </div>
        <div class="card-body"><a class="btn btn-info mb-4" href="{{ route('beranda') }}"><i class="fa fa-arrow-left"
                    aria-hidden="true"></i> Kembali</a>
            <div class="row">
                <div class="col-md-12 text-center p-2">
                    <h4 class="font-weight-bold text-primary">MOHON LENGKAPI FORM BERIKUT</h4>
                </div>
            </div>
            <!-- @if($errors->any())
            @foreach($errors->all() as $err)
            <p class="alert alert-danger">{{ $err }}</p>
            @endforeach
            @endif -->
            <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="col-md-auto col-12">
                    <label for="NamaPemohon" class="form-label">Nama Pemohon</label>
                    <input type="text" class="form-control" name="nama" id="NamaPemohon"
                        aria-describedby="NamaPemohon" placeholder="Masukan Nama Pemohon">
                        @error('nama')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                        <br>

                </div>
                <div class="col-md-auto col-12">
                    <label for="NikPemohon" class="form-label">NIK Pemohon</label>
                    <input type="number" class="form-control" name="nik" id="nik" placeholder="Masukan NIK Pemohon">
                        @error('nik')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                        <br>

                </div>
                <div class="col-md-auto col-12">
                    <label for="alamat" class="form-label">Email Pemohon</label>
                    <input type="email" name="email" class="form-control" id="email"
                        placeholder="Masukan email Pemohon"></input>
                        @error('email')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                        <br>

                </div>
                <div class="col-md-auto col-12">
                    <label for="Pekerjaan" class="form-label">Pekerjaan</label>
                    <input type="text" class="form-control" name="pekerjaan" id="Pekerjaan"
                        aria-describedby="Pekerjaan" placeholder="Masukkan Pekerjaan">
                        <!-- error message untuk title -->
                        @error('pekerjaan')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                        @enderror
                                <br>

                </div>
                <div class="col-md-auto col-12">
                    <label for="alamat">Deskripsi Permasalahan</label>
                    <textarea type="text" class="form-control" name="masalah" id="masalah"
                        placeholder="Masukan Deskripsi Permasalahan"></textarea>
                        <!-- error message untuk title -->
                        @error('masalah')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                                <br>

                </div>
                <h4 class="date">Spesifikasi Saluran</h4>
                <div class="col-md-auto col-12">
                    <label for="panjang">Panjang</label>
                    <input type="number" name="panjang" min="0" class="form-control" id="panjang"
                        placeholder="Masukkan Panjang"></input>

                </div>
                <div class="col-md-auto col-12">
                    <label for="Lebar">Lebar</label>
                    <input type="number" name="lebar" min="0" class="form-control" id="lebar"
                        placeholder="Masukan Lebar"></input>

                </div>
                <div class="col-md-auto col-12">
                    <label for="Tinggi">Tinggi</label>
                    <input type="number" name="tinggi" min="0" class="form-control" id="tinggi"
                        placeholder="Masukan Tinggi"></input><br>

                </div>
                <div class="col-md-auto col-12">
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Jenis Saluran</option>
                        <option value="1">Terbuka</option>
                        <option value="2">Tertutup</option>
                    </select><br>
                </div>
                <h4 class="date">Sketsa Denah Lokasi</h4>
                <div class="form-group">
                    <label class="font-weight-bold">Sketsa Lokasi</label>
                <input type="file" class="form-control @error('image') is-invalid @enderror" name="sketsa_lokasi">
                            
                            <!-- error message untuk title -->
                                @error('sketsa_lokasi')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                </div>
                <div class="form-group">
                    <label class="font-weight-bold">Dokumen Kelurahan</label>
                    <input type="file" class="form-control @error('image') is-invalid @enderror" name="dokumen_kelurahan">
                            
                                <!-- error message untuk title -->
                                @error('dokumen_kelurahan')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                </div>
                <div id="map"></div>
                <style>
                    .form-group {
                        margin-bottom: 10px;
                    }
                </style>
                <script>
                    var map = L.map('map').setView([-0.502106, 117.153709], 13);

                    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                        attribution: '&copy; OpenStreetMap contributors'
                    }).addTo(map);

                    var marker;

                    map.on('click', function(e) {
                        if (marker) {
                            map.removeLayer(marker);
                        }
                        marker = L.marker(e.latlng).addTo(map);

                        document.getElementById('longitude').value = e.latlng.lng;
                        document.getElementById('latitude').value = e.latlng.lat;
                    });
                </script>
                <div class="col-md-auto col-12 m-2">
                    <label for="longitude">Longitude:</label>
                    <input type="text" name="longitude" id="longitude" required readonly>
                    <label for="latitude">Latitude:</label>
                    <input type="text" name="latitude" id="latitude" required readonly>
                    
                </div>
                <!-- jika user tidak input koordinat map -->
                <div class="form-group">
                    @error('longitude')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    @error('latitude')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                
                <button type="submit" class="btn btn-primary m-4">Submit</button>

            </form>
          
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

</html>