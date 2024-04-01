<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>projek pkl</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <link rel="icon" type="image/png" href="https://cdn.enterwind.com/assets/pupr/img/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">

    <!-- Script -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="js/jquery-1.11.2.min.js"></script>
    <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js' type='text/javascript'></script>

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"> </script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"> </script>
    <style>
        #search-results {
            display: none;
        }
    </style>
    <style>
        .rounded-circle {
        border-radius: 50% !important;
        }
        .icon {
        width: 3rem;
        height: 3rem;
        }

        .icon i {
        font-size: 2.25rem;
        }

        .icon-shape {
        display: inline-flex;
        padding: 12px;
        text-align: center;
        border-radius: 50%;
        align-items: center;
        justify-content: center;
        }

        .icon-shape i {
        font-size: 1.25rem;
        }
    </style>
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

    <nav class="navbar navbar-light" style="background-color: #e3f2fd;">
        <div class="container-fluid">
            <div class="row w-100">
                <div class="col-md-6">
                    <h1 class="font-weight-bold text-primary"> <i class="fa fa-list" aria-hidden="true"></i> Daftar PJU
                    </h1>
                </div>
                <div class="col-md-6 d-flex justify-content-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a class="text-primary" href="{{ route('beranda')}}"> <i
                                    class="fa fa-home" aria-hidden="true"></i> Beranda</a></li>
                        <li class="breadcrumb-item active"> <i class="fa fa-list" aria-hidden="true"></i> Daftar PJU
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </nav>



    <div class="card m-3">
        <div class="card-header">
            <i class="fa fa-database" aria-hidden="true"></i> Daftar PJU
        </div>
        <div class="card-body">
            <a class="btn btn-primary" href="{{ route('beranda') }}" role="button"><i class="fa fa-arrow-left"
                    aria-hidden="true"></i>
                kembali</a>
            <div class="container m-2"> 
                
                <div class="row">
                    <div class="col-xl-3 col-lg-6">
                        <div class="card card-stats mb-4 mb-xl-0">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <h5 class="card-title text-uppercase text-muted mb-0">
                                            Data Total
                                        </h5>
                                        <?php
$totalCount = DB::table('posts')->count(); // Menghitung total data
$presentage = ($totalCount / $totalCount) * 100; // Menghitung presentase (total data dibagi total data)
echo '<span class="h2 font-weight-bold mb-0">' . $totalCount . '</span>';
                                        ?>
                                        <!-- <span class="h2 font-weight-bold mb-0"> <?php $totalCount   ?> </span> -->
                                    </div>
                                    <div class="col-auto">
                                        <div
                                            class="icon icon-shape bg-primary text-white rounded-circle shadow"
                                        >
                                            <i class="fas fa-regular fa-folder-open"></i>
                                        </div>
                                    </div>
                                </div>
                                <p class="mt-3 mb-0 text-muted text-sm">
                                    <?php
$totalCount = DB::table('posts')->count(); // Menghitung total data
$presentage = ($totalCount / $totalCount) * 100; // Menghitung presentase (total data dibagi total data)
echo '<span class="text-success mr-2">
                                                <i class="fa fa-arrow-up"></i>' . $presentage . '%' . '</span>';
                                    ?>
                                
                                    <!-- <span class="text-success mr-2"
                                        ><i class="fa fa-arrow-up"></i> 3.48%</span
                                    > -->
                                    <span class="text-nowrap">Since last month</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6">
                        <div class="card card-stats mb-4 mb-xl-0">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <h5 class="card-title text-uppercase text-muted mb-0">
                                            Belum Ditanggapi
                                        </h5>
                                        <?php  
                                            use App\Models\Post; // Sesuaikan dengan nama model yang Anda gunakan

// Hitung banyak data dengan status "belum ditanggapi"
$count = Post::where('status', 0)->count();

// $count sekarang berisi jumlah data dengan status "belum ditanggapi"
echo '<span class="h2 font-weight-bold mb-0">' . $count . '</span> ';
                                        ?>
                                        <!-- <span class="h2 font-weight-bold mb-0">350,897</span> -->
                                    </div>
                                    <div class="col-auto">
                                    <div class="icon icon-shape text-white rounded-circle shadow" style="background-color: #de7804;">
                                    <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                </div>
                                <p class="mt-3 mb-0 text-muted text-sm">
                                    <?php  
                                        // Hitung banyak data dengan status "belum ditanggapi"
$count = Post::where('status', 0)->count();
if ($count == 0) {
    $presentage = 0;
} else {
    $presentage = ($count / $count) * 100;
}

// $count sekarang berisi jumlah data dengan status "belum ditanggapi"
echo '<span class="text-success mr-2">
                                        <i class="fa fa-arrow-up"></i>' . $presentage . '%' . '</span> ';
                                    ?>
                                    <span class="text-nowrap">Since last month</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6">
                        <div class="card card-stats mb-4 mb-xl-0">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <h5 class="card-title text-uppercase text-muted mb-0">
                                            Dalam Proses
                                        </h5>
                                        <?php  

                                            // Hitung banyak data dengan status "belum ditanggapi"
$count = Post::where('status', 1)->count();

// $count sekarang berisi jumlah data dengan status "belum ditanggapi"
echo '<span class="h2 font-weight-bold mb-0">' . $count . '</span> ';
                                        ?>
                                        <!-- <span class="h2 font-weight-bold mb-0">350,897</span> -->
                                    </div>
                                    <div class="col-auto">
                                        <div class="icon icon-shape text-white rounded-circle shadow" style="background-color: #e6d81c;">
                                        <i class="fas fa-regular fa-hourglass-half"></i>
                                        </div>
                                    </div>
                                </div>
                                <p class="mt-3 mb-0 text-muted text-sm">
                                    <?php  
                                        // Hitung banyak data dengan status "belum ditanggapi"
$count = Post::where('status', 1)->count();
if ($count == 0) {
    $presentage = 0;
} else {
    $presentage = ($count / $count) * 100;
}

// $count sekarang berisi jumlah data dengan status "belum ditanggapi"
echo '<span class="text-success mr-2">
                                        <i class="fa fa-arrow-up"></i>' . $presentage . '%' . '</span> ';
                                    ?>
                                    <span class="text-nowrap">Since last month</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6">
                        <div class="card card-stats mb-4 mb-xl-0">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <h5 class="card-title text-uppercase text-muted mb-0">
                                            Selesai
                                        </h5>
                                        <?php  

                                            // Hitung banyak data dengan status "belum ditanggapi"
$count = Post::where('status', 2)->count();

// $count sekarang berisi jumlah data dengan status "belum ditanggapi"
echo '<span class="h2 font-weight-bold mb-0">' . $count . '</span> ';
                                        ?>
                                    </div>
                                    <div class="col-auto">
                                        <div
                                            class="icon icon-shape bg-success text-white rounded-circle shadow"
                                        >
                                            <i class="fas fa-regular fa-clipboard-check"></i>
                                        </div>
                                    </div>
                                </div>
                                <p class="mt-3 mb-0 text-muted text-sm">
                                    <?php  
                                        // Hitung banyak data dengan status "belum ditanggapi"
$count = Post::where('status', 2)->count();
if ($count == 0) {
    $presentage = 0;
} else {
    $presentage = ($count / $count) * 100;
}

// $count sekarang berisi jumlah data dengan status "belum ditanggapi"
echo '<span class="text-success mr-2">
                                        <i class="fa fa-arrow-up"></i>' . $presentage . '%' . '</span> ';
                                    ?>
                                    <span class="text-nowrap">Since last month</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-2">
                    <div class="col-md-12 d-flex justify-content-center">
                        <!-- <div class="form-group">
                            <input type="search" name="search" id="search" class="form-control" placeholder="Masukkan kata kunci pencarian">
                        </div> -->
                        <form action="{{ route('search') }}" method="GET">
                            <input type="text" name="search" placeholder="Search Products">
                            <button type="submit">Search</button>
                        </form>
                    </div>
            </div>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th style="text-align: center;">No.</th>
                            <th style="text-align: center;">ID</th>
                            <th style="text-align: center;">Nama</th>
                            <th style="text-align: center;">NIK</th>
                            <th style="text-align: center;">Email</th>
                            <th style="text-align: center;">Tanggal Permohonan</th>
                            <th style="text-align: center;">Tindak Lanjut</th>
                            <th style="text-align: center;">Status</th>
                            <th style="text-align: center;">Action</th>
                        </tr>
                    </thead>
                    <tbody class="alldata">
                    @forelse($posts as $data)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td style="text-align: center;">{{ $data->custom_id }}</td>
                                    <td style="text-align: center;">{{ $data->nama }}</td>
                                    <td style="text-align: center;">{{ $data->nik }}</td>
                                    <td style="text-align: center;">{{$data->email }}</td>
                                    <td style="text-align: center;">{{$data->created_at }}</td>
                                    <td style="text-align: center;">@if ($data->tindak_lanjut === 0)
                                        <p>Belum ditanggapi</p>
                                    @elseif ($data->tindak_lanjut === 1)
                                        <p>Dalam proses</p>
                                    @elseif ($data->tindak_lanjut === 2)
                                        <p>Selesai</p>
                                    @else
                                        <p>Status tidak valid</p>
                                    @endif
                                    </td>
                                    <td style="text-align: center;">@if ($data->status === 0)
                                        <p>Belum ditanggapi</p>
                                    @elseif ($data->status === 1)
                                        <p>Dalam proses</p>
                                    @elseif ($data->status === 2)
                                        <p>Selesai</p>
                                    @else
                                        <p>Status tidak valid</p>
                                    @endif
                                    </td>
                                    <div id="edit-form-container"></div>
                                    <td class="text-center">
                                        <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('posts.destroy', $data->id) }}" method="POST">
                                            <a href="{{ route('posts.show', $data->id) }}" class="btn btn-sm btn-dark"><i class="fa fa-eye
                                            " aria-hidden="true"></i></a>
                                            <a href="#" class="btn btn-sm btn-primary openEditModal" data-id="{{ $data->id }}"><i class="fa fa-edit" aria-hidden="true"></i></a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                        </form>
                                    </td>
                                </tr>
                              @empty
                                  <div class="alert alert-danger">
                                      Data Post belum Tersedia.
                                  </div>
                              @endforelse
                            </tbody>
                              <tbody id="Content" class="searchData">
                              
                              </tbody>
                </table>

                <!-- Modal -->
                <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="editModalLabel">Edit Data</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <!-- Form edit akan dimuat di sini -->
                            </div>
                        </div>
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
    <footer class="main-footer text-light" style="background-color: #16156C;">Copyright © 2024 <strong><a class="text-light" href="/silaju/daftar_pju">Tim
                IT Programmer</a></strong>
        <div class="float-right d-none d-md-inline-block text-light"><b>Versi</b> 2.2.0</div>
    </footer>
    <script>
        
    </script>

</body>


<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<script>
    //message with toastr
    @if(session()->has('success'))
    
        toastr.success('{{ session('success') }}', 'BERHASIL!'); 

    @elseif(session()->has('error'))

        toastr.error('{{ session('error') }}', 'GAGAL!'); 
        
    @endif

    document.addEventListener('DOMContentLoaded', function () {
            const openEditModalLinks = document.querySelectorAll('.openEditModal');
            const modalBody = document.querySelector('.modal-body');

            openEditModalLinks.forEach(link => {
                link.addEventListener('click', function (event) {
                    event.preventDefault(); // Mencegah tautan membuka halaman baru
                    const postId = this.getAttribute('data-id');
                    fetch(`/posts/${postId}/edit`)
                        .then(response => response.text())
                        .then(data => {
                            modalBody.innerHTML = data;
                            $('#editModal').modal('show'); // Tampilkan modal
                        })
                        .catch(error => console.error('Error:', error));
                });
            });
        });

    //     $('#search').on('keyup',function()
    // {
    //     $value = $(this).val();

    //     if($value){
    //         $('.alldata').hide();
    //         $('.searchData').show();
    //     }else{
    //         $('.alldata').show();
    //         $('.searchData').hide();
    //     }

    //     $.ajax({
    //         type : 'get',
    //         url : '{{URL::to('fetch_search')}}',
    //         data : {'search':$value},

    //         success:function(data){
    //             console.log(data)
    //             $('.alldata').html(data)
    //         }
    //     })
    // })
</script>

</html>


