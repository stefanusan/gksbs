@extends('masteradmin')

@section('body-css', 'hold-transition sidebar-mini layout-fixed')
@section('contents')

<!-- Main content -->
<main role="main">

    <div class="container">
    <!-- Example row of columns -->
    <br><br>
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <h2 class="card-header">Agenda Bidang 1</h2>
                <div class="card-body">
                    <h5 class="card-title">Bidang Spritualitas Sosial dan Ekologi</h5>
                    <p class="card-text">"Bertujuan "</p>
                    <a href="{{ route('admin.agenda1') }}" class="btn btn-secondary">View details</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <h2 class="card-header">Agenda Bidang 2</h2>
                <div class="card-body">
                    <h5 class="card-title">Bidang Identitas dan Peradaban</h5>
                    <p class="card-text">"Bertujuan "</p>
                    <a href="{{ route('admin.agenda2') }}" class="btn btn-secondary">View details</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <h2 class="card-header">Agenda Bidang 3</h2>
                <div class="card-body">
                    <h5 class="card-title">Bidang Komunikasi dan Kemandirian Dana</h5>
                    <p class="card-text">"Bertujuan "</p>
                    <a href="{{ route('admin.agenda3') }}" class="btn btn-secondary">View details</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <h2 class="card-header">Agenda Bidang 4</h2>
                <div class="card-body">
                    <h5 class="card-title">Bidang Penelitian dan Pengembangan</h5>
                    <p class="card-text">"Bertujuan "</p>
                    <a href="{{ route('admin.agenda4') }}" class="btn btn-secondary">View details</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <h2 class="card-header">Agenda Bidang 5</h2>
                <div class="card-body">
                    <h5 class="card-title">Bidang Informasi, Komunikasi-Administrasi dan Keuangan</h5>
                    <p class="card-text">"Bertujuan "</p>
                    <a href="{{ route('admin.agenda5') }}" class="btn btn-secondary">View details</a>
                </div>
            </div>
        </div>
    </div>

    </div> <!-- /container -->

</main>
<!-- /.content -->
@endsection
