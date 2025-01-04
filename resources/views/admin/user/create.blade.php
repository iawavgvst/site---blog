@extends('admin.layouts.main')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">User Creation | Clean Blog</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('admin.user.index') }}">Users</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('admin.post.index') }}">Posts</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('admin.category.index') }}">Categories</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('admin.message.index') }}">Messages</a></li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <form action="{{ route('admin.user.store') }}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group w-75">
                        <label for="name">User name</label>
                        <input value="{{ old('name') }}" class="form-control" name="name" id="name" type="text"
                               placeholder="Name" style="margin-bottom: 15px"/>

                        @error('name')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror

                        <div class="form-group w-75">
                            <label for="email">E-mail address</label>
                            <input value="{{ old('email') }}" class="form-control" name="email" id="email" type="text"
                                   placeholder="E-mail address" style="margin-bottom: 15px"/>

                            @error('email')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                    </div>

                        <div class="form-group w-50" style="margin-bottom: 35px">
                            <label for="role">Choose role</label>
                            <select class="form-control" id="role" name="role">
                                @foreach($roles as $id => $role)
                                    <option
                                        {{ old('role') == $id ? ' selected' : '' }}
                                        value="{{ $id }}">{{ $role }}</option>
                                @endforeach

                            @error('role')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                            </select>
                        </div>

                    <!-- Submit Button-->
                    <div style="margin-bottom: 35px">
                        <button class="btn btn-primary text-uppercase" id="submitButton" type="submit">Create
                        </button>
                    </div>
                </form>
            </div>
        </section>
@endsection
