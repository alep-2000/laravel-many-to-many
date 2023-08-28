@extends('layouts.admin')

@section('content')
    <section class="bg-white">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="d-flex justify-content-between align-items-center my-3">
                        <div>
                            <h1> {{ $tecnology->name }} </h1>
                        </div>
                        <div>
                            <a href="{{ route('admin.tecnologies.index') }} " class="btn btn-sm btn-primary">Tutti i Post</a>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <img src=" {{ asset('storage/'.$post->cover_image) }} ">
                </div>
                <div class="col-12">
                    @if($post->type)
                        {{ $post->type->name }}
                    @else
                        Senza Tipologia
                    @endif
                </div>
                <div class="col-12">
                    <strong>Tecnologies:</strong>
                    @if($post->tecnologies)
                        @foreach($post->tecnologies as $tecnology)
                            <a href="{{ route('admin.tags.show', $tecnology->id) }}"></a>
                        @endforeach
                    @else
                        Non ci sono tecnologie associate al post
                    @endif
                </div>
                <div class="col-12">
                    <p> {{ $tecnology->slug }} </p>
                </div>
            </div>
        </div>
    </section>
@endsection