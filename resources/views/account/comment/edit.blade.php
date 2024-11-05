@extends('account.layouts.main')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Comment Edition | Clean Blog</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('account') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('account.liked.index') }}">Likes</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('account.comment.index') }}">Comments</a></li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <form action="{{ route('account.comment.update', $comment->id) }}" method="post" class="w-50">
                    @csrf
                    @method('patch')

                    <div class="form-group">
                        <textarea class="form-control" name="message" rows="5">{{ $comment->message }}</textarea>

                        @error('message')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
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
