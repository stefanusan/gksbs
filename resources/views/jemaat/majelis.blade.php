@extends('layouts.master')

@section('body-css', 'hold-transition sidebar-mini layout-fixed')
@section('content')
<section class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
        <h1>Majelis</h1>
        </div>
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item active">GKSBS</li>
        </ol>
        </div>
    </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">

  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Daftar Tabel Majelis</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="majelistable" class="table table-bordered table-hover">
              
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>Jabatan Gerejawi</th>
                  <th>Tanggal Peneguhan</th>
                  <th>Tanggal Berhenti</th>
                  <th>Jabatan Kepengurusan</th>
                  <th>Kelompok</th>
                </tr>
              </thead>

              <tbody>
                @foreach ( $majelis as $mjs )
                <tr>
                  <th scope="row">{{ $loop->iteration }}</th>
                  <td>{{ $mjs->nama }}</td>
                  <td>{{ $mjs->jabatan_gerejawi }}</td>
                  <td>{{ $mjs->tgl_peneguhan }}</td>
                  <td>{{ $mjs->tgl_berhenti }}</td>
                  <td>{{ $mjs->jabatan_pengurus }}</td>
                  <td>{{ $mjs->kelompok }}</td>
                </tr>
                @endforeach
              </tbody>
              
            </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->

      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container-fluid -->

</section>
<!-- /.content -->
@endsection

@section('custom-js')

@endsection