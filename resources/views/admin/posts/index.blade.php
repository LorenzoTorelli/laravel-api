@extends('layouts.app')

@section('content')
<div class="container">
    <a href="{{route("posts.create")}}"><button type="button" class="btn btn-success">New Post</button></a>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Slug</th>
            <th scope="col">Categories</th>
            <th scope="col">Commands</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($posts as $item)
                <tr>
                    <th>{{$item->id}}</th>
                    <td>{{$item->title}}</td>
                    <td>{{$item->slug}}</td>
                    <td>
                        @if ($item->category) 
                            {{$item->category->title}}
                        @else 
                            Nessuna Categoria
                        @endif
                    </td>

                    <td>
                        <div class="d-flex">
                            <a href="{{route("posts.show", $item->id)}}"><button type="button" class="btn btn-primary">View</button></a>
                            <a href="{{route("posts.edit", $item->id)}}"><button type="button" class="btn btn-warning">Edit</button></a>
                            <form action="{{route('posts.destroy', $item->id)}}" method="post">
                                @csrf
                                @method("DELETE")
                                <button class="btn btn-danger" type="submit" >Delete</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
      </table>

</div>
@endsection