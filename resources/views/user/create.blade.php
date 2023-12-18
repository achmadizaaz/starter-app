@extends('layouts.app')

@section('title', 'Create user')

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
                    <form action="{{ route('users.store') }}" method="post">
                        @csrf
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <x-label for="username" :value="__('Username')"/>
                                <x-text-input id="username" type="text" name="username" :value="old('username')"/>
                                <x-input-error :messages="$errors->get('username')" class="mt-2" />
                            </div>
                            <div class="col-md-4">
                                <x-label for="name" :value="__('Name')"/>
                                <x-text-input id="name" type="text" name="name" :value="old('name')"/>
                                <x-input-error :messages="$errors->get('name')" class="mt-2" />
                            </div>
                            <div class="col-md-4">
                                <x-label for="email" :value="__('Email')"/>
                                <x-text-input id="email" type="email" name="email" :value="old('email')"/>
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <x-label for="password" :value="__('Password')"/>
                                <x-text-input id="password" type="password" name="password"/>
                            </div>
                            <div class="col-md-4">
                                <x-label for="password_default" :value="__('Password Default')"/>
                                <x-text-input id="password_default" type="text" name="password_default"/>
                            </div>
                            <div class="col-md-4">
                                <x-label for="is_active" :value="__('Is active')" />
                                <x-select name="is_active" id="is_active">
                                    <x-select-option>Cari dan Pilih</x-select-option>
                                    <x-select-option :value="__(1)"> Active </x-select-option>
                                    <x-select-option :value="__(0)"> Non active </x-select-option>
                                </x-select>
                                <x-input-error :messages="$errors->get('is_active')" class="mt-2" />
                            </div>
                        </div>
                        <x-primary-button>Create</x-primary-button>
                    </form>
                </div>
            </div>
        </div> <!-- end col -->
    </div> 
    <!-- End content row -->
@endsection