@extends('layouts.app')
@section('title-page', 'Bangunan Aplikasi Sarpras')

@section('content')
    {{-- Start page title --}}
    <div class="row mb-3">
        <div class="col-12">
            <div class="container page-title-box d-flex align-items-center justify-content-between py-3 rounded-2">
                <h4 class="mb-sm-0 fw-bold">DASHBOARD</h4>

                {{-- Breadcrumb --}}
                <div class="page-title-right">
                   Home / Dashboard
                </div> 
            </div>
        </div>
    </div>
    {{-- End page title --}}

    {{-- Start Content Row --}}
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    Body content
                </div>
            </div>
        </div> <!-- end col -->
    </div> 
    <!-- End content row -->
@endsection