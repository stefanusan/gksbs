@extends('layouts.master')

@section('body-css', 'hold-transition sidebar-mini layout-fixed')
@section('content')
<section class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
        <h1>Pokok-Pokok Haluan Program GKSBS Bengkulu 2021-2025</h1>
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
                <h3 class="card-title">I. Bidang Spritualitas Sosial dan Ekologi</h3>
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
                <table id="agenda" class="table table-bordered table-hover">
                  
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
                    @foreach ( $agenda as $agd )
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
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <br><br>

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">II. Identitas dan Peradaban</h3>
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
                <table id="agenda2" class="table table-bordered table-hover">
                  
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
                    @foreach ( $agenda2 as $agd2 )
                    <tr>
                      <th scope="row">{{ $loop->iteration }}</th>
                      <td>{{ $agd2->kegiatan }}</td>
                      <td>{{ $agd2->waktu }}</td>
                      <td>{{ $agd2->sasaran }}</td>
                      <td>{{ $agd2->jejaring }}</td>
                      <td>{{ $agd2->pelaksana }}</td>
                      <td>{{ $agd2->output }}</td>
                    </tr>
                    @endforeach
                  </tbody>
                  
                </table>                
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <br><br>

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">III. Bidang Komunikasi dan Kemandirian Dana</h3>
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
                <table id="agenda3" class="table table-bordered table-hover">
                  
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
                    @foreach ( $agenda3 as $agd3 )
                    <tr>
                      <th scope="row">{{ $loop->iteration }}</th>
                      <td>{{ $agd3->kegiatan }}</td>
                      <td>{{ $agd3->waktu }}</td>
                      <td>{{ $agd3->sasaran }}</td>
                      <td>{{ $agd3->jejaring }}</td>
                      <td>{{ $agd3->pelaksana }}</td>
                      <td>{{ $agd3->output }}</td>
                    </tr>
                    @endforeach
                  </tbody>
                  
                </table> 
                
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <br><br>

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">IV. Bidang Penelitian dan Pengembangan</h3>
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
                <table id="agenda4" class="table table-bordered table-hover">
                  
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
                    @foreach ( $agenda4 as $agd4 )
                    <tr>
                      <th scope="row">{{ $loop->iteration }}</th>
                      <td>{{ $agd4->kegiatan }}</td>
                      <td>{{ $agd4->waktu }}</td>
                      <td>{{ $agd4->sasaran }}</td>
                      <td>{{ $agd4->jejaring }}</td>
                      <td>{{ $agd4->pelaksana }}</td>
                      <td>{{ $agd4->output }}</td>
                    </tr>
                    @endforeach
                  </tbody>
                  
                </table>                
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <br><br>

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">V. Bidang Informasi, Komunikasi-Administrasi dan Keuangan</h3>
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
                <table id="agenda5" class="table table-bordered table-hover">
                  
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
                    @foreach ( $agenda5 as $agd5 )
                    <tr>
                      <th scope="row">{{ $loop->iteration }}</th>
                      <td>{{ $agd5->kegiatan }}</td>
                      <td>{{ $agd5->waktu }}</td>
                      <td>{{ $agd5->sasaran }}</td>
                      <td>{{ $agd5->jejaring }}</td>
                      <td>{{ $agd5->pelaksana }}</td>
                      <td>{{ $agd5->output }}</td>
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
<script>
$(function () {
    var agenda = {!! $agenda !!}
    // agenda = agenda.map((item) => {
    //     return item;
    // })
    // console.log(agenda);

    // var row=table.row(agenda);
    var editEvent = "",
        deleteEvent = "";

    $('#agenda').DataTable({
        data: event,
        paging: true,
        pageLength : 5,
        columns: [
            { data: 'row' },
            { data: 'kegiatan' },
            { data: 'waktu' },
            { data: 'sasaran' },
            { data: 'jejaring' },
            { data: 'pelaksana' },
            { data: 'output' },
            // { data: 'action',  render: function ( data, type, row ) {
            //     return '<a href="" class="btn btn-warning btn-lg active" role="button" aria-pressed="true">Edit</a> <a href="" class="btn btn-danger btn-lg active" role="button" aria-pressed="true">Delete</a>'}}
        ]
    });
})

$(function () {
    var agenda2 = {!! $agenda2 !!}
    // agenda = agenda.map((item) => {
    //     return item;
    // })
    // console.log(agenda);

    // var row=table.row(agenda);
    var editEvent = "",
        deleteEvent = "";

    $('#agenda2').DataTable({
        data: event,
        paging: true,
        pageLength : 5,        
        columns: [
            { data: 'row' },
            { data: 'kegiatan' },
            { data: 'waktu' },
            { data: 'sasaran' },
            { data: 'jejaring' },
            { data: 'pelaksana' },
            { data: 'output' },
            // { data: 'action',  render: function ( data, type, row ) {
            //     return '<a href="" class="btn btn-warning btn-lg active" role="button" aria-pressed="true">Edit</a> <a href="" class="btn btn-danger btn-lg active" role="button" aria-pressed="true">Delete</a>'}}
        ]
    });
})

$(function () {
    var agenda3 = {!! $agenda3 !!}
    // agenda = agenda.map((item) => {
    //     return item;
    // })
    // console.log(agenda);

    // var row=table.row(agenda);
    var editEvent = "",
        deleteEvent = "";

    $('#agenda3').DataTable({
        data: event,
        paging: true,
        pageLength : 5,        
        columns: [
            { data: 'row' },
            { data: 'kegiatan' },
            { data: 'waktu' },
            { data: 'sasaran' },
            { data: 'jejaring' },
            { data: 'pelaksana' },
            { data: 'output' },
            // { data: 'action',  render: function ( data, type, row ) {
            //     return '<a href="" class="btn btn-warning btn-lg active" role="button" aria-pressed="true">Edit</a> <a href="" class="btn btn-danger btn-lg active" role="button" aria-pressed="true">Delete</a>'}}
        ]
    });
})

$(function () {
    var agenda4 = {!! $agenda4 !!}
    // agenda = agenda.map((item) => {
    //     return item;
    // })
    // console.log(agenda);

    // var row=table.row(agenda);
    var editEvent = "",
        deleteEvent = "";

    $('#agenda4').DataTable({
        data: event,
        paging: true,
        pageLength : 5,        
        columns: [
            { data: 'row' },
            { data: 'kegiatan' },
            { data: 'waktu' },
            { data: 'sasaran' },
            { data: 'jejaring' },
            { data: 'pelaksana' },
            { data: 'output' },
            // { data: 'action',  render: function ( data, type, row ) {
            //     return '<a href="" class="btn btn-warning btn-lg active" role="button" aria-pressed="true">Edit</a> <a href="" class="btn btn-danger btn-lg active" role="button" aria-pressed="true">Delete</a>'}}
        ]
    });
})

$(function () {
    var agenda5 = {!! $agenda5 !!}
    // agenda = agenda.map((item) => {
    //     return item;
    // })
    // console.log(agenda);

    // var row=table.row(agenda);
    var editEvent = "",
        deleteEvent = "";

    $('#agenda5').DataTable({
        data: event,
        paging: true,
        pageLength : 5,        
        columns: [
            { data: 'row' },
            { data: 'kegiatan' },
            { data: 'waktu' },
            { data: 'sasaran' },
            { data: 'jejaring' },
            { data: 'pelaksana' },
            { data: 'output' },
            // { data: 'action',  render: function ( data, type, row ) {
            //     return '<a href="" class="btn btn-warning btn-lg active" role="button" aria-pressed="true">Edit</a> <a href="" class="btn btn-danger btn-lg active" role="button" aria-pressed="true">Delete</a>'}}
        ]
    });
})

</script>
@endsection