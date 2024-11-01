@extends('admin.layouts.main')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">User Edition | Clean Blog</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('admin.user.index') }}">Users</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('admin.post.index') }}">Posts</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('admin.category.index') }}">Categories</a>
                            </li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <form action="{{ route('admin.user.update', $user->id) }}" method="post">
                    @csrf
                    @method('patch')

                    <div class="form-group w-50">
                        <label for="name">User name</label>
                        <input class="form-control" name="name" id="name" type="text" value="{{ $user->name }}"
                               style="margin-bottom: 15px" placeholder="New name"/>
                    </div>

                    <div class="form-group w-50">
                        <label for="email">E-mail address</label>
                        <input class="form-control" name="email" id="email" type="text" value="{{ $user->email }}"
                               style="margin-bottom: 15px" placeholder="New email"/>
                    </div>

                    <div class="form-group w-50">
                        <label for="password">Password</label>
                        <input class="form-control" name="password" id="password" type="text" value="{{ $user->password }}"
                               style="margin-bottom: 15px" placeholder="New password"/>
                    </div>

                    <div class="form-group w-50" style="margin-bottom: 35px">
                        <label for="role">Role</label>
                        <input type="hidden" name="user_id" value="{{ $user->id }}">
                        <select class="form-control" id="role" name="role">
                            @foreach($roles as $id => $role)
                                <option
                                    {{ $user->role == $id ? ' selected' : '' }}
                                    value="{{ $id }}">{{ $role }}</option>
                            @endforeach

                            @error('role')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </select>
                    </div>

                    <!-- Submit Button-->
                    <div style="margin-bottom: 35px">
                        <button class="btn btn-primary text-uppercase" id="submitButton" type="submit">Update
                        </button>
                    </div>
                </form>
            </div>
        </section>
@endsection
