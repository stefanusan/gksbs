@extends('layouts.master')

@section('body-css', 'hold-transition sidebar-mini layout-fixed')
@section('content')
<section class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
        <h1>Datatable Jemaat</h1>
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
              <h3 class="card-title">Detail Jumlah Jiwa</h3>
                  <div class="card-tools">
                      <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                          <i class="fas fa-minus"></i>
                      </button>
                      <!-- <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                          <i class="fas fa-times"></i>
                      </button> -->
                  </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="jumlahjiwa" class="table table-bordered table-hover">
                
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Kelompok</th>
                    <th>KK</th>
                    <th>Jumlah Per Orang</th>
                  </tr>
                </thead>

                <tbody>
                  @foreach ( $jiwa as $jws )
                  <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $jws->kelompok }}</td>
                    <td>{{ $jws->kk }}</td>
                    <td>{{ $jws->jumlah }}</td>
                  </tr>
                  @endforeach
                </tbody>
                
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->

          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Detail Jumlah Anak Remaja Pemuda</h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    <!-- <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                        <i class="fas fa-times"></i>
                    </button> -->
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="jumlahanakremajapemuda" class="table table-bordered table-hover">
                
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Kelompok</th>
                    <th>Jumlah Anak</th>
                    <th>Jumlah Remaja</th>
                    <th>Jumlah Pemuda</th>
                  </tr>
                </thead>

                <tbody>
                  @foreach ( $anakremajapemuda as $arp )
                  <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $arp->kelompok }}</td>
                    <td>{{ $arp->jumlah_anak }}</td>
                    <td>{{ $arp->jumlah_remaja }}</td>
                    <td>{{ $arp->jumlah_pemuda }}</td>
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