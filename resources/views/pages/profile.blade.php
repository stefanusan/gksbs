@extends('layouts.master')

@section('body-css', 'hold-transition sidebar-mini layout-fixed')
@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Profile</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <!-- <li class="breadcrumb-item"><a href="#">Home</a></li> -->
                <li class="breadcrumb-item active">GKSBS</li>
                </ol>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <!-- <div class="content-wrapper"> -->
        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
            <div class="row">
            <div class="col-md-3">

                <!-- Profile Image -->
                <div class="card card-success card-outline">
                <div class="card-body box-profile">
                    <div class="text-center">
                    <img class="profile-user-img img-fluid img-circle"
                        src="https://gksbs.org/wp-content/uploads/2010/10/logo-gksbs-PNG-242x300.png"
                        alt="User profile picture">
                    </div>

                    <h3 class="profile-username text-center">GKSBS BENGKULU</h3>

                    <p class="text-muted text-center">Mandiri & Terbuka</p>

                    <ul class="list-group list-group-unbordered mb-3">
                    <li class="list-group-item">
                        <b>Talang Boseng</b> 
                        <!-- <a class="float-right">0</a> -->
                    </li>
                    <li class="list-group-item">
                        <b>Timur Indah</b> 
                        <!-- <a class="float-right">0</a> -->
                    </li>
                    <li class="list-group-item">
                        <b>Kuti Agung</b> 
                        <!-- <a class="float-right">0</a> -->
                    </li>
                    </ul>

                    <!-- <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a> -->
                </div>
                <!-- /.card-body -->
                </div>
                <!-- /.card -->

                <!-- About Me Box -->
                <div class="card card-success">
                <div class="card-header">
                    <h3 class="card-title">Tentang</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">

                    <hr>
                    
                    <strong><i class="fas fa-map-marker-alt mr-1"></i> Alamat Pusat</strong>

                    <p class="text-muted">Jalan Timur Indah Ujung Rt.31 Rw.04 No.10 Kel.Timur Indah Kec.Singaran Pati KOTA BENGKULU - 38229</p>

                    <hr>

                    <strong><i class="fas fa-music"></i> Lagu</strong>

                    <a href="https://gksbs.org/wp-content/uploads/2021/01/Mars-gksbs.mp3" class="nav-link"><p class="text-muted">Mars GKSBS</p></a>
                    <a href="https://gksbs.org/wp-content/uploads/2021/01/Hymne-gksbs.mp3" class="nav-link"><p class="text-muted">Hymne GKSBS</p></a>

                    <hr>

                    <strong><i class="fas fa-paper-plane"></i> Kontak (Pnt Ruswanto)</strong>

                    <p class="text-muted">+62 813-6778-1460</p>

                    <hr>

                </div>
                <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
            <div class="col-md-9">
                <div class="card">
                <div class="card-header p-2">
                    <h3 class="card-title">Sejarah</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                        <!-- <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                            <i class="fas fa-times"></i>
                        </button> -->
                    </div>
                </div><!-- /.card-header -->
                <div class="card-body">
                    <p>Gereja yang kini bernama Gereja Kristen Sumatera Bagian Selatan (GKSBS) memiliki latar belakang 
                        sejarah yang panjang. Bermula dengan adanya orang-orang Kristen dari pulau Jawa yang mengikuti 
                        program transmigrasi (kolonisasi) mulai pada tahun 1936. Dua tahun kemudian, yaitu tahun 1938 
                        Sinode Gereja Kristen Jawa (GKJ) terpanggil untuk melayani mereka dan mengirimkan para pelayannya ke 
                        Sumatera Bagian Selatan.</p>

                    <p>Pada tahun 1971 Sinode GKJ mulai mempersiapkan kemandirian gereja yang dilayaninya di ‘Tanah Seberang’ 
                        yang ketika itu bernama Sinode GKJ Wilayah I di Sumatera Bagian Selatan. Arah kemandirian itu diwujudkan 
                        dengan melakukan program-program pembinaan yang intensif, perkunjungan-perkunjungan ke wilayah pelayanan 
                        dijadualkan secara teratur sampai dengan tahun 1987. Usaha-usaha itu diberkati Tuhan dan menghasilkan buah. 
                        Pada sidang XVIII Sinode GKJ di Yogyakarta tanggal 6 Agustus 1987 persidangan itu memutuskan bahwa Sinode GKJ 
                        Wilayah I di Sumatera Bagian Selatan dinyatakan mandiri dan menjadi Sinode sendiri dengan nama: Gereja-gereja 
                        Kristen Sumatera Bagian Selatan (disingkat GKSBS). Pada awal kemandiriannya itu, Sinode GKSBS masih menggunakan 
                        Tata Gereja GKJ .
                        Pada sidang IV Sinode GKSBS tanggal 26-29 Agustus 1996 di Bandar Lampung, GKSBS mengesahkan Tata Gereja/Tata 
                        Laksana GKSBS; . Serentak dengan disahkannya Tata Gereja/Tata Laksana GKSBS, maka nama “Gereja-gereja Kristen 
                        Sumatera Bagian Selatan”menjadi “Gereja Kristen Sumatera Bagian Selatan”. Pemerintahan Gereja (secara teologis) 
                        adalah Kristokrasi, dan sebagai organisasi yang bersifat/berbentuk gereja pemerintahan gereja GKSBS adalah 
                        “Prebisterial Sinodal” yang didalamnya menekankan pentingnya kebersamaan dalam hal dana sesuai amanat musyawarah 
                        Majelis Sesinode 1987 dan Sidang I Sinode GKSBS.
                        Pada Sidang Sinode VIII Sinode GKSBS tanggal 23-26 September 2005 di Bengkulu pada (Artikel 12 :  Liturgi Kontektual) 
                        yang didalamnya termuat tentang pelayanan perjamuaan kudus untuk anak  yang mulai diberlakukan sejak disetujui oleh 
                        Sidang Sinode VIII.</p>

                    <p>Mengenai hubungan dan kerjasama oikoumenis di Indonesia, pada Sidang Majelis Pekerja Lengkap Persekutuan Gereja-gereja 
                        di Indonesia (MPL PGI) di Kendari tanggal 20-27 April 1988, Sinode GKSBS telah diterima menjadi anggota PGI dan tercatat 
                        dengan nomor anggota 58.</p>

                    <p>Sampai kini pertumbuhan GKSBS tercatat menjadi 97 Jemaat yang dihimpun dalam 14 Klasis yang tersebar di seluruh wilayah 
                        Sumatera Bagian Selatan dengan 79 Pendeta Jemaat.</p>

                </div>
                <!-- /.card-body -->
                </div>

                <!-- /.card -->
                <div class="card">
                <div class="card-header p-2">
                    <h3 class="card-title">Tata Gereja</h3>

                        <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                        <!-- <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                            <i class="fas fa-times"></i>
                        </button> -->
                        </div>
                </div><!-- /.card-header -->
                <div class="card-body">
                    <p>Tata Gereja GKSBS ini, dipahami bahwa Jemaat – Klasis – Sinode merupakan satu kesatuan yang utuh sebagai wujud gereja. 
                        Untuk menata kehidupan organisasi, GKSBS menggunakan sistem Presbiterial Sinodal dengan prinsip dasar adalah kesetaraan, 
                        yaitu: setara dalam jabatan pelayanan gereja (Pendeta, Penatua, dan Diaken), setara dalam kepemimpinan (MPJ, MPK, dan MPS), 
                        dan setara dalam struktur organisasi (Jemaat-Klasis-Sinode)</p>

                    <p>Tata Gereja GKSBS ini dimaksudkan untuk menjaga keteraturan proses interaksi dan memberi tempat kepada anggota jemaat dalam 
                        rangka mengembangkan potensi. Tata Gereja GKSBS ini juga dapat digunakan sebagai pemberi arah dalam penyelesaian masalah dengan 
                        tetap memberi ruang bagi kehendak Roh Kudus untuk menuntun dan menemukan solusi yang terbaik.</p>

                    <p>Dengan adanya Tata Gereja GKSBS ini, diharapkan akan sangat membantu Majelis dalam menjalankan tugas panggilannya di Jemaat, Klasis, 
                        dan Sinode. Untuk itu diharapkan seluruh anggota GKSBS dapat membaca dan memahami isi Tata Gereja GKSBS ini, sehingga dapat menerapkannya 
                        dengan baik dan konsekuen.</p>
                </div>
                <!-- /.card-body -->
                </div>
                <!-- /.card -->

                <div class="card">
                <div class="card-header p-2">
                    <h3 class="card-title">Misi Gereja</h3>

                        <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                        <!-- <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                            <i class="fas fa-times"></i>
                        </button> -->
                        </div>
                </div><!-- /.card-header -->
                <div class="card-body">
                    <p>Sepuluh poin misi GKSBS terangkum dalam tindakan-tindakan praksis gereja yaitu memberi ruang partisipasi, saling menerima dan menghargai, 
                        menjaga keutuhan dan kerukunan, membangun kebersamaan, saling menolong dan berbagi, saling membina dan memberdayakan, serta bersama-sama 
                        merayakan kehidupan melalui tindakan-tindakan liturgis.</p>
                </div>
                <!-- /.card-body -->
                </div>
                <!-- /.card -->

            </div>
            <!-- /.col -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    <!-- </div> -->
</section>
<!-- /.content -->
@endsection

@section('custom-js')

@endsection