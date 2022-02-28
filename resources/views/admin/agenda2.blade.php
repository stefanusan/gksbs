@extends('masteradmin')

@section('body-css', 'hold-transition sidebar-mini layout-fixed')
@section('contents')

<!-- Main content -->
<main role="main">

    <br>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">

                @if (session('status'))
                    <h6 class="alert alert-success">{{ session('status') }}</h6>
                @endif
                
                <div class="card">
                    <div class="card-header">
                        <h4>Agenda2
                            <a href="{{ url('addagenda2') }}" class="btn btn-primary float-end">Tambah Agenda2</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                <th>No</th>
                                <th>Kegiatan</th>
                                <th>Waktu</th>
                                <th>Sasaran</th>
                                <th>Jejaring</th>
                                <th>Pelaksana</th>
                                <th>Output</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ( $agenda2 as $agd )
                                <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $agd->kegiatan }}</td>
                                <td>{{ $agd->waktu }}</td>
                                <td>{{ $agd->sasaran }}</td>
                                <td>{{ $agd->jejaring }}</td>
                                <td>{{ $agd->pelaksana }}</td>
                                <td>{{ $agd->output }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>

            </div>
        </div>
    </div>


</main>
<!-- /.content -->
@endsection