@extends('masteradmin')

@section('body-css', 'hold-transition sidebar-mini layout-fixed')
@section('contents')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <br>
            <div class="card">
                <div class="card-header">
                    <h4>Tambah Agenda1
                        <a href="{{ route('admin.agenda1') }}" class="btn btn-danger float-end">Back</a>
                    </h4>
                </div>
                <div class="card-body">
                    <form action="{{ url('addagenda1') }}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group mb-3">
                            <label for="">Kegiatan</label>
                            <input type="text" name="kegiatan" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Waktu</label>
                            <input type="text" name="waktu" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Sasaran</label>
                            <input type="text" name="sasaran" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Jejaring</label>
                            <input type="text" name="jejaring" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Pelaksana</label>
                            <input type="text" name="pelaksana" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">2021</label>
                            <input type="text" name="tahun" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Output</label>
                            <input type="text" name="output" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <button type="submit" class="btn btn-primary" onclick="window.location.href='/agendaadmin1'">Simpan Agenda</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection