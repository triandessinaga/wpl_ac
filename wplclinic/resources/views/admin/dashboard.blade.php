<!-- @extends('layouts.layout')

@section('title', 'Dashboard')

@section('content') -->
    <!-- <div class="app-body">
        <div class="sidebar"> -->
            <!-- sidebar content -->
        <!-- </div>
        <main class="main">
            <div class="container-fluid">
                <div class="animated fadeIn">
                    <div class="row"> -->
                        <!-- main content goes here -->
                    <!-- </div>
                </div>
            </div>
        </main>
    </div> -->
<!-- @endsection -->


@extends('layouts.layout')

@section('title', 'Dashboard')

@section('content')
    <div class="app-body">
        <div class="sidebar">
            <!-- sidebar content -->
        </div>
        <main class="main">
            <div class="container-fluid">
                <div class="animated fadeIn">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <i class="fa fa-align-justify"></i> Pasien
                                </div>
                                <div class="card-body">
                                    <table class="table table-responsive-sm">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama</th>
                                                <th>Tanggal Lahir</th>
                                                <th>Jenis Kelamin</th>
                                                <th>Alamat</th>
                                                <th>No Telepon</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($patients as $patient)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $patient->name }}</td>
                                                <td>{{ $patient->dob }}</td>
                                                <td>{{ $patient->gender }}</td>
                                                <td>{{ $patient->address }}</td>
                                                <td>{{ $patient->phone }}</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
@endsection
