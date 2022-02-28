@extends('masteradmin')

@section('body-css', 'hold-transition sidebar-mini layout-fixed')
@section('contents')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <br>
            <div class="card">
                <div class="card-header">
                    <h4>Edit Agenda
                        <a href="{{ url('agenda') }}" class="btn btn-danger float-end">Back</a>
                    </h4>
                </div>
                <div class="card-body">
                    <form action="{{ url('updateagenda1/'.$agenda->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="form-group mb-3">
                            <label for="">Kegiatan</label>
                            <input type="text" name="kegiatan" value="{{ $agenda->kegiatan }}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Waktu</label>
                            <input type="text" name="waktu" value="{{ $agenda->waktu }}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Sasaran</label>
                            <input type="text" name="sasaran" value="{{ $agenda->sasaran }}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Jejaring</label>
                            <input type="text" name="jejaring" value="{{ $agenda->jejaring }}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Pelaksana</label>
                            <input type="text" name="pelaksana" value="{{ $agenda->pelaksana }}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Tahun</label>
                            <input type="text" name="tahun" value="{{ $agenda->tahun }}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Output</label>
                            <input type="text" name="output" value="{{ $agenda->output }}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <button type="submit" class="btn btn-primary" onclick="window.location.href='/agendaadmin1'">Update Agenda</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection