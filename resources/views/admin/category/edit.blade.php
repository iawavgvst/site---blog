@extends('admin.layouts.main')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Category Edition | Clean Blog</h1>
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
                <form action="{{ route('admin.category.update', $category->id) }}" method="post">
                    @csrf
                    @method('patch')

                    <div class="form-group w-50">
                        <label for="title">{{ $category->title }}</label>
                        <input class="form-control" name="title" id="title" type="text" value="{{ $category->title }}"
                               style="margin-bottom: 15px" placeholder="New title"/>
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
