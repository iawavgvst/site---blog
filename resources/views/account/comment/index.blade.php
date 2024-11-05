@extends('account.layouts.main')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Comments | Clean Blog</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('account') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('account.liked.index') }}">Likes</a></li>
                            <li class="breadcrumb-item active">Comments</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Comment ID</th>
                        <th scope="col">Comment message</th>
                        <th scope="col">Post</th>
                        <th class="text-center" colspan="2" scope="col">Actions</th>
                    </tr>
                    </thead>
                    @foreach($comments as $comment)
                        <tbody>
                        <tr>
                            <th scope="row">{{ $comment->id }}</th>
                            <td>{{ $comment->message }}</td>
                            <td>{{ $comment->posts->title }}</td>
                            <td>
                                <button class="btn text-uppercase"><a
                                        href="{{ route('account.comment.edit', $comment->id) }}"><i class="fas fa-pencil-alt"
                                                                                            style="color: green"></i></a>
                                </button>
                            </td>
                            <td>
                                <form action="{{ route('account.comment.delete', $comment->id) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn text-uppercase"><a
                                            href="{{ route('account.comment.delete', $comment->id) }}"><i
                                                class="fas fa-solid fa-trash"
                                                style="color: red"></i></a>
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
