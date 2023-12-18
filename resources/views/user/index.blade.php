@extends('layouts.app')

@section('title', 'List users')

@section('content')
    
<!-- Start page title --->
    <div class="row mb-3">
        <div class="col-12">
            <div class="container page-title-box d-flex align-items-center justify-content-between py-3 rounded-2">
                <h4 class="mb-sm-0 fw-bold">LIST USERS</h4>
                <!-- Breadcrumb --->
                <div class="page-title-right">
                   <a href="{{ route('users.create') }}" class="btn btn-sm btn-primary">Create User</a>
                </div> 
            </div>
        </div>
    </div>
    <!-- End page title --->

    <!-- Show message from session succes or failed -->
    @if (session('failed') || session('success'))
        <div class="alert @if (session('success'))
            alert-success
        @else
            alert-warning
        @endif alert-dismissible fade show" role="alert">
            {!! session('success') ?? session('failed') !!} 
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <!-- End show message -->

    <!-- Start Content Row --->
    <div class="row mb-5">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between border-bottom pb-3 mb-2">
                        <div class="entries d-flex align-items-center gap-1">
                            <span>Entries</span>
                            <x-select name="user-entries" id="user-entries">
                                <x-option :value="10">10</x-option>
                                <x-option :value="25">25</x-option>
                                <x-option :value="50">50</x-option>
                                <x-option :value="75">75</x-option>
                                <x-option :value="100">100</x-option>
                            </x-select>
                            <span>show</span>
                        </div>
                        <div class="search d-flex gap-1">
                            <form action="{{ route('users.index') }}" method="POST" class="d-flex gap-1">
                                @csrf
                                <x-input name="search" placeholder="Keyword..."></x-input>
                                <x-button-primary title="Searching"><i class="bi bi-search"></i></x-button-primary>
                            </form>

                            <form action="#" method="POST" class="d-flex gap-1">
                                @csrf
                                <x-button-primary class="btn-info" title="Reset"><i class="bi bi-circle"></i></x-button-primary>
                            </form>
                        </div>
                    </div>
                    <table class="table table-striped">
                        <thead>
                            <th>No</th>
                            <th>Name</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Is Active</th>
                            <th>Last login</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                            @foreach ($users as $user )
                                <tr>
                                    <td>{{ ($users->currentpage()-1) * $users->perpage() + $loop->index + 1 }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->username }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>
                                        {!! $user->is_active ? '<div class="badge bg-success">active</div>' : '<div class="badge bg-danger">non active</div>' !!}
                                    </td>
                                    <td>{{ $user->last_login_at ?? '-' }}</td>
                                    <td>
                                        <div class="d-flex gap-1">
                                            <!-- Button Show User -->
                                            <a href="{{ route('users.show', $user->slug) }}" class="btn btn-sm btn-info">
                                                <i class="bi bi-eye"></i>
                                            </a>
                                            <!-- Button Edit User -->
                                            <a href="{{ route('users.edit', $user->slug) }}" class="btn btn-sm btn-warning">
                                                <i class="bi bi-pencil-square"></i>
                                            </a>
                                            <!-- Button Delete User Modal -->
                                            <x-button-danger type="button" class="btn-sm delete-user" data-bs-toggle="modal" data-bs-target="#deleteUserModal" data-name="{{ $user->username }}" data-slug="{{ $user->slug }}">
                                                <i class="bi bi-trash3"></i>
                                            </x-button-danger>
                                            
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $users->links(('layouts.vendor.paginate')) }}
                </div>
            </div>
        </div> <!-- end col -->
    </div> 
    <!-- End content row -->


    <!-- Modal Delete User-->
    <div class="modal fade" id="deleteUserModal" tabindex="-1" aria-labelledby="deleteUserModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="deleteUserModalLabel">Remove user: <span id="delete-username"></span></h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
                <form action="#" method="POST" id="delete-user-form">
                    @csrf
                    @method("DELETE")

                    <div class="modal-body">
                        <x-label for="delete-user-input">
                            Once you delete a user, there is no going back.<br/>
                            Please be certain
                        </x-label>
                        <x-input type="text" name="username" class="form-control" id="delete-user-input" required autofocus />
                    </div>
                    <div class="modal-footer">
                        <x-button-secondary type="button" data-bs-dismiss="modal">Close</x-button-secondary>
                        <x-button-danger type="submit">Yes, delete it</x-button-danger>
                    </div>

                </form>
            </div>
        </div>
    </div>
    <!-- End modal delete user -->


@endsection



@push('scripts')
    <script>
        // Function edit modal delete 
        $('.delete-user').click(function(e){
            let deleteUser = $(this).data('name');
            let slug = $(this).data('slug');
            let routeDelete = '{{ route("users.delete", ":slug") }}';
            let route = routeDelete.replace(':slug', slug);

            $('#delete-username').text(deleteUser);
            $('#delete-user-input').attr('placeholder', 'Enter "'+deleteUser+'"');
            $('#delete-user-form').attr('action', route);
        });
    </script>
@endpush