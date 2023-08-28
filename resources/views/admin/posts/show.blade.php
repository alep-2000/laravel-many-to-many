@extends('layouts.admin')

@section('content')
    <section class="bg-white">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="d-flex justify-content-between align-items-center my-3">
                        <div>
                            <h1> {{ $post->title }} </h1>
                        </div>
                        <div>
                            <a href="{{ route('admin.posts.index') }} " class="btn btn-sm btn-primary">Tutti i Post</a>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <img src=" {{ asset('storage/'.$post->cover_image) }} ">
                </div>
                <div class="col-12">
                    {{ $post->types->name }}
                </div>
                <div class="col-12">
                    <p> {{ $post->content }} </p>
                </div>
            </div>
        </div>
    </section>
@endsection