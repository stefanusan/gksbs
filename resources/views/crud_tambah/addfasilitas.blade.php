@extends('masteradmin')

@section('body-css', 'hold-transition sidebar-mini layout-fixed')
@section('contents')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <br>
            <div class="card">
                <div class="card-header">
                    <h4>Tambah Fasilitas
                        <a href="{{ route('admin.fasilitas') }}" class="btn btn-danger float-end">Back</a>
                    </h4>
                </div>
                <div class="card-body">
                    <form action="{{ url('addfasilitas') }}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group mb-3">
                            <label for="">Nama Fasilitas</label>
                            <input type="text" name="nama" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Gambar Fasilitas</label>
                            <input type="file" name="gambar" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <button type="submit" class="btn btn-primary" onclick="window.location.href='/fasilitasadmin'">Simpan Fasilitas</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection