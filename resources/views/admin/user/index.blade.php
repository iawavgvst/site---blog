@extends('admin.layouts.main')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Users | Clean Blog</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin') }}">Home</a></li>
                            <li class="breadcrumb-item active">Users</li>
                            <li class="breadcrumb-item"><a href={{ route('admin.post.index') }}>Posts</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('admin.category.index') }}">Categories</a></li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="d-inline-block justify-content mb-4" style="margin-bottom: 35px"><a
                        class="btn btn-primary text-uppercase"
                        href="{{ route('admin.user.create') }}">CREATE</a>
                </div>
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">E-mail address</th>
                        <th class="text-center" colspan="3" scope="col">Actions</th>
                    </tr>
                    </thead>
                    @foreach($users as $user)
                    <tbody>
                    <tr>
                        <th scope="row">{{ $user->id }}</th>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            <button class="btn text-uppercase">
                                <a href="{{ route('admin.user.show', $user->id) }}">
                                    <i class="far fa-eye"></i></a>
                            </button>
                        </td>
                        <td>
                            <button class="btn text-uppercase">
                                <a href="{{ route('admin.user.edit', $user->id) }}">
                                    <i class="fas fa-pencil-alt" style="color: green"></i></a>
                            </button>
                        </td>
                        <td>
                            <form action="{{ route('admin.user.delete', $user->id) }}" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn text-uppercase">
                                    <a href="{{ route('admin.user.delete', $user->id) }}">
                                        <i class="fas fa-solid fa-trash" style="color: red"></i></a>
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </section>
@endsection
