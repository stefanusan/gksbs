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
                        <h4>Berita
                            <a href="{{ url('addberita') }}" class="btn btn-primary float-end">Tambah Berita</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Judul</th>
                                    <th>Deskripsi</th>
                                    <th>Gambar</th>
                                    <th>Aksi</th>
                                    <!-- <th>Edit</th>
                                    <th>Delete</th> -->
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($berita as $item)
                                <tr>
                                    <td>{{ $item->row }}</td>
                                    <td>{{ $item->judul }}</td>
                                    <td>{{ $item->deskripsi }}</td>
                                    <?php if($item->gambar <> null) : ?>
                                        <td>
                                            <img src="{{ asset('uploads/berita/'.$item->gambar) }}" width="200px" height="200px" alt="Image">
                                        </td>
                                    <?php else : ?>
                                        <td></td>
                                    <?php endif ?>
                                    <td>
                                        <a href="{{ url('editberita/'.$item->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                        <a href="{{ url('deleteberita/'.$item->id) }}" class="btn btn-danger btn-sm">Hapus</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>

            </div>
        </div>
    </div>


</main>
<!-- /.content -->
@endsection