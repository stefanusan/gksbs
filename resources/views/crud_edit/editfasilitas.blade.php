@extends('masteradmin')

@section('body-css', 'hold-transition sidebar-mini layout-fixed')
@section('contents')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <br>
            <div class="card">
                <div class="card-header">
                    <h4>Edit Fasilitas
                        <a href="{{ url('fasilitas') }}" class="btn btn-danger float-end">Back</a>
                    </h4>
                </div>
                <div class="card-body">
                    <form action="{{ url('updatefasilitas/'.$fasilitas->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="form-group mb-3">
                            <label for="">Nama</label>
                            <input type="text" name="nama" value="{{ $fasilitas->nama }}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Gambar</label>
                            <input type="file" name="gambar" class="form-control">
                            <img src="{{ asset('uploads/fasilitas/'.$fasilitas->gambar) }}" width="70px" height="70px" alt="Image">
                        </div>
                        <div class="form-group mb-3">
                            <button type="submit" class="btn btn-primary" onclick="window.location.href='/fasilitas'">Update Fasilitas</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection