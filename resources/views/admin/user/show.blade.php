@extends('admin.layouts.main')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">User Browse | Clean Blog</h1>
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
                <div class="d-flex align-items-center mb-3">
                    <h2 class="m-0 mr-2">{{ $user->name }}</h2>
                    <a href="{{ route('admin.user.edit', $user->id) }}"><i
                            class="fas fa-pencil-alt"
                            style="color: green"></i></a>
                    <form action="{{ route('admin.user.delete', $user->id) }}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn text-uppercase"><a
                                href="{{ route('admin.user.delete', $user->id) }}"><i
                                    class="fas fa-solid fa-trash"
                                    style="color: red"></i></a>
                        </button>
                    </form>
                </div>
                <table class="table w-50">
                    <tbody>
                    <tr>
                        <td><b>ID</b></td>
                        <td>{{ $user->id }}</td>
                    </tr>
                    <tr>
                        <td><b>User name</b></td>
                        <td>{{ $user->name }}</td>
                    </tr>
                    <tr>
                        <td><b>User e-mail</b></td>
                        <td>{{ $user->email }}</td>
                    </tr>
                    <tr>
                        <td><b>Creation date</b></td>
                        <td>{{ $user->created_at }}</td>
                    </tr>
                    <tr>
                        <td><b>Update date</b></td>
                        <td>{{ $user->updated_at }}</td>
                    </tr>
                    </tbody>
                </table>
                <!-- Pager-->
                <div class="d-inline-block justify-content mb-4"><a class="btn btn-primary text-uppercase"
                                                                    href="{{ route('admin.user.index') }}">←
                        Back</a></div>
            </div>
        </section>
@endsection
