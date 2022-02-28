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
                        <h4>Jumlah Jiwa</h4>
                    </div>
                    <div class="card-body">
                        
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th rowspan="2">No</th>
                                    <th rowspan="2">Kelompok</th>
                                    <th rowspan="2">KK</th>
                                    <th colspan="2">Dewasa</th>
                                    <th colspan="2">Pemuda</th>
                                    <th colspan="2">Remaja</th>
                                    <th colspan="2">Anak</th>
                                    <th rowspan="2">Aksi</th>
                                </tr>
                                <tr>
                                    <th>Laki-laki</th>
                                    <th>Perempuan</th>
                                    <th>Laki-laki</th>
                                    <th>Perempuan</th>
                                    <th>Laki-laki</th>
                                    <th>Perempuan</th>
                                    <th>Laki-laki</th>
                                    <th>Perempuan</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($jiwa as $item)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{ $item->kelompok }}</td>
                                    <td>{{ $item->kk }}</td>
                                    <td>{{ $item->l_dewasa }}</td>
                                    <td>{{ $item->p_dewasa }}</td>
                                    <td>{{ $item->l_pemuda }}</td>
                                    <td>{{ $item->p_pemuda }}</td>
                                    <td>{{ $item->l_remaja }}</td>
                                    <td>{{ $item->p_remaja }}</td>
                                    <td>{{ $item->l_anak }}</td>
                                    <td>{{ $item->p_anak }}</td>
                                    <td>
                                        <a href="{{ url('editdatatablejemaat/'.$item->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                    </td>
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
