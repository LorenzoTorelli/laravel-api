@extends('layouts.app')

@section('content')
    <div class="container">
        <a href="{{route("posts.index")}}"><button type="button" class="btn btn-secondary">List</button></a>
        <h1>{{$post->title}}</h1>
        <p>{{$post->content}}</p>
        <div class="mb-3">
            <strong>Stato:</strong>
            @if ($post->published) 
                <span class="badge badge-success">Pubblicato</span>
            @else
             <span class="badge badge-secondary">Bozza</span>
            @endif
        </div>

        <div class="mb-3">
            @if ($post->category)
                <strong>Categoria:</strong>
                {{$post->category->title}}
            @endif
        </div>

            
        {{-- <div class="mb-3">
            <strong>Tags</strong>
            @foreach ($post->tags as $tag)
                <span class="badge badge-primary">{{$post->$tag->title}}</span>
            @endforeach
        </div> --}}
        
    </div>
@endsection