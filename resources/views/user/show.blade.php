@extends('layouts.app')

@section('title', 'User: '. $user->name)

@section('content')
    
{{-- Start page title --}}
    <div class="row mb-3">
        <div class="col-12">
            <div class="container page-title-box d-flex align-items-center justify-content-between py-3 rounded-2">
                <h4 class="mb-sm-0 fw-bold">CREATE USER</h4>

                {{-- Breadcrumb --}}
                <div class="page-title-right">
                   
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
    
    <!-- Sweetalert2 -->
    @if (session('success'))
    <script>
        let sessionSuccess = "{{ session('success') }}"
        $(document).ready(function () {
            Swal.fire({
                icon: 'success',
                title: 'Success',
                text: sessionSuccess,
                showConfirmButton: true,
                confirmButtonColor: '#243992',
                timer: 2000
            })
        });
    </script>   
    @endif
    {{-- end sweetalert success --}}


@endsection

