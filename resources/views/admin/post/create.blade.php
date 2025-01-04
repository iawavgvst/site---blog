@extends('admin.layouts.main')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Post Creation | Clean Blog</h1>
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
                <form action="{{ route('admin.post.store') }}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group w-50">
                        <label for="title">Post title</label>
                        <input value="{{ old('title') }}" class="form-control" name="title" id="title" type="text"
                               placeholder="Title" style="margin-bottom: 15px"/>

                        @error('title')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="form-group w-75">
                        <label for="description">Description</label>
                        <input value="{{ old('description') }}" class="form-control" name="description" id="description"
                               placeholder="Description" style="margin-bottom: 15px"/>

                        @error('description')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="content">Content</label>
                        <textarea id="summernote" name="content">{{ old('content') }}</textarea>

                        @error('content')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="form-group w-50">
                        <label for="background_image">Background image</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input value="{{ old('background_image') }}" type="file" class="custom-file-input" id="background_image" name="background_image">
                                <label class="custom-file-label" for="background_image">Choose image</label>
                                @error('background_image')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="input-group-append">
                                <span class="input-group-text">Upload</span>
                            </div>
                        </div>
                    </div>

                    <div class="form-group w-50">
                        <label for="preview_image">Preview image</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input value="{{ old('preview_image') }}" type="file" class="custom-file-input" id="preview_image" name="preview_image">
                                <label class="custom-file-label" for="preview_image">Choose image</label>
                                @error('preview_image')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="input-group-append">
                                <span class="input-group-text">Upload</span>
                            </div>
                        </div>
                    </div>

                    <div class="form-group w-50" style="margin-bottom: 35px">
                        <label for="category">Category</label>
                        <select class="form-control" id="category" name="category_id">
                            @foreach($categories as $category)
                                <option
                                    {{ old('category_id') == $category->id ? ' selected' : '' }}
                                    value="{{ $category->id }}">{{ $category->title }}</option>
                            @endforeach
                        </select>
                    </div>
                    <!-- Submit Button-->
                    <div style="margin-bottom: 35px">
                        <button class="btn btn-primary text-uppercase" id="submitButton" type="submit">Share
                        </button>
                    </div>
                </form>
            </div>
        </section>
@endsection
