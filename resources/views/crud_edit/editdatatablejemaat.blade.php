@extends('masteradmin')

@section('body-css', 'hold-transition sidebar-mini layout-fixed')
@section('contents')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <br>
            <div class="card">
                <div class="card-header">
                    <h4>Edit Berita
                        <a href="{{ url('datatablejemaatadmin') }}" class="btn btn-danger float-end">Back</a>
                    </h4>
                </div>
                <div class="card-body">
                    <form action="{{ url('updatedatatablejemaat/'.$jiwa->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="form-group mb-3">
                            <label for="">Kelompok</label>
                            <input type="text" name="kelompok" value="{{ $jiwa->kelompok }}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">KK</label>
                            <input type="text" name="kk" value="{{ $jiwa->kk }}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Dewasa (Laki-laki)</label>
                            <input type="text" name="l_dewasa" value="{{ $jiwa->l_dewasa }}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Dewasa (Perempuan)</label>
                            <input type="text" name="p_dewasa" value="{{ $jiwa->p_dewasa }}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Pemuda (Laki-laki)</label>
                            <input type="text" name="l_pemuda" value="{{ $jiwa->l_pemuda }}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Pemuda (Perempuan)</label>
                            <input type="text" name="p_pemuda" value="{{ $jiwa->p_pemuda }}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Remaja (Laki-laki)</label>
                            <input type="text" name="l_remaja" value="{{ $jiwa->l_remaja }}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Remaja (Perempuan)</label>
                            <input type="text" name="p_remaja" value="{{ $jiwa->p_remaja }}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Anak (Laki-laki)</label>
                            <input type="text" name="l_anak" value="{{ $jiwa->l_anak }}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Anak (Perempuan)</label>
                            <input type="text" name="p_anak" value="{{ $jiwa->p_anak }}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <button type="submit" class="btn btn-primary" onclick="window.location.href='/datatablejemaatadmin'">Update</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection