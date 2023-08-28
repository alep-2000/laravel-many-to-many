@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 d-flex justify-content-between align-items-center my-3">
            <div>
                <h1>OUR POSTS</h1>
            </div>
            <div>
                <a href="{{ route('admin.posts.create') }}" class="btn btn-primary btn-sm">Create your Posts</a>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-12">
            <table class="table mb-5">
                <thead>
                    <tr class="text-primary">
                        <th>ID</th>
                        <th>TITLE</th>
                        <th>SLUG</th>
                        <th>ACTIONS</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($posts as $post)
                    <tr>
                        <td> {{ $post->id }} </td>
                        <td> {{ $post->title }} </td>
                        <td> {{ $post->slug }} </td>
                        <td>
                            <a href="{{ route('admin.posts.show', $post->id) }}" class="btn btn-info btn-sm"><i class="fa-solid fa-circle-info"></i></a>
                            <a href="{{ route('admin.posts.edit', $post->id) }}" class="btn btn-warning btn-sm"><i class="fa-solid fa-pen-to-square"></i></a>
                            <form class="d-inline-block" action=" {{route('admin.posts.destroy', $post->id)}} " onsubmit="return confirm('Sei sicuro di voler cancellare questo post?')" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection