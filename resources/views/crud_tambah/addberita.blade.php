@extends('masteradmin')

@section('body-css', 'hold-transition sidebar-mini layout-fixed')
@section('contents')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <br>
            <div class="card">
                <div class="card-header">
                    <h4>Tambah Berita
                        <a href="{{ route('home') }}" class="btn btn-danger float-end">Back</a>
                    </h4>
                </div>
                <div class="card-body">
                    <form action="{{ url('addberita') }}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group mb-3">
                            <label for="">Judul Berita</label>
                            <input type="text" name="judul" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Deskripsi Berita</label>
                            <!-- <input type="text" name="nama" class="form-control"> -->
                            <textarea type="text" class="form-control" name="deskripsi" rows="25" ></textarea>
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Gambar Berita</label>
                            <input type="file" name="gambar" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <button type="submit" class="btn btn-primary" onclick="window.location.href='/beritaadmin'">Simpan Berita</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection