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
                        <h4>Fasilitas
                            <a href="{{ url('addfasilitas') }}" class="btn btn-primary float-end">Tambah Fasilitas</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Gambar</th>
                                    <th>Aksi</th>
                                    <!-- <th>Edit</th>
                                    <th>Delete</th> -->
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($fasilitas as $item)
                                <tr>
                                    <td>{{ $item->row }}</td>
                                    <td>{{ $item->nama }}</td>
                                    <td>
                                        <img src="{{ asset('uploads/fasilitas/'.$item->gambar) }}" width="200px" height="200px" alt="Image">
                                    </td>
                                    <td>
                                        <a href="{{ url('editfasilitas/'.$item->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                    <!-- </td> -->
                                    <!-- <td> -->

                                        <a href="{{ url('deletefasilitas/'.$item->id) }}" class="btn btn-danger btn-sm">Hapus</a>
                                        <!-- <form action="{{ url('delete-student/'.$item->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                        </form> -->
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