@extends('account.layouts.main')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Liked Posts | Clean Blog</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('account') }}">Home</a></li>
                            <li class="breadcrumb-item active">Likes</li>
                            <li class="breadcrumb-item"><a href="{{ route('account.comment.index') }}">Comments</a>
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
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Post ID</th>
                        <th scope="col">Post title</th>
                        <th scope="col">Post description</th>
                        <th class="text-center" colspan="2" scope="col">Actions</th>
                    </tr>
                    </thead>
                    @foreach($posts as $post)
                        <tbody>
                        <tr>
                            <th scope="row">{{ $post->id }}</th>
                            <td>{{ $post->title }}</td>
                            <td>{{ $post->description }}</td>
                            <td>
                                <button class="btn text-uppercase"><a
                                        href="#!"><i class="far fa-eye"></i></a>
                                </button>
                            </td>
                            <td>
                                <form action="{{ route('account.liked.delete', $post->id) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn text-uppercase"><a
                                            href="{{ route('account.liked.delete', $post->id) }}"><i
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
