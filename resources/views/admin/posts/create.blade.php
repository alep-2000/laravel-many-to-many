@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="d-flex justify-content-between align-items-center">
                    <h2>Insert a new posts</h2>
                    <a href=" {{ route('admin.posts.index')}} " class="btn btn-secondary btn-sm">Posts</a>
                </div>
                <div>
                    @if($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action=" {{ route('admin.posts.store') }} " method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="class-group">
                            <label class="control-label">Title</label>
                            <input type="text" id="title" name="title" class="form-control @error('title')is-invalid @enderror" placeholder="Title" value="{{ old('title') }}">
                            @error('title')
                                <div class="text-danger"> {{ $message }} </div>
                            @enderror
                        </div>
                        <div class="class-group">
                            <label class="control-label">Cover Image</label>
                            <input type="file" id="cover_image" name="cover_image" class="form-control @error('cover_image')is-invalid @enderror">
                            @error('cover_image')
                                <div class="text-danger"> {{ $message }} </div>
                            @enderror
                        </div>
                        <div class="class-group">
                            <label class="control-label">Types</label>
                            <select name="types_id" id="types_id" class="form-control @error('types_id')is-invalid @enderror">
                                <option value="">Select type</option>
                                @foreach($types as $type)
                                    <option value="{{ $type->id }}"> {{  $type->name }} </option>
                                @endforeach
                            </select>
                            @error('types_id')
                                <div class="text-danger"> {{ $message }} </div>
                            @enderror
                        </div>
                        <div class="class-group">
                            <label class="control-label">Content</label>
                            <textarea id="content" name="content" class="form-control" placeholder="Content">{{ old('content') }}</textarea>
                        </div>
                        <div class="class-group my-3">
                            <button type="submit" class="btn btn-primary btn-success">Create</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection