@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-uppercase mb-5">Add new post </h1>
    <form action="{{route('posts.store')}}" method="post" >
        @csrf

        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title"> 
            @error('title')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="category">Category</label>
            <select class="custom-select @error('category_id') is-invalid @enderror" name="category_id" id="category">
                <option selected {{old("category_id") == "" ? "selected" : ""}}>Choose...</option>
                @foreach ($categories as $category)
                    <option value="{{$category->id}}" {{old("category_id") == "category_id" ? "selected" : ""}}>{{$category->title}}</option>
                @endforeach
                </select>
                @error('category')
                    <div class="alert alert-danger">{{$message}}</div>
                @enderror
        </div>
        <div class="form-group">
            <label for="content">Content</label>
            <textarea class="form-control @error('content') is-invalid @enderror" name="content" id="content" cols="30" rows="10" placeholder="inserisci il contenuto"></textarea>
           
            @error('content')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="published">Publish</label>
           <input type="checkbox" id="published" name="published">
           
            @error('content')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror
        </div>
        <div class="form-group">
            <p>Tags</p>
            @foreach ($tags as $tag)
                <div class="form-check form-check-inline">
                    <input type="checkbox" id="{{$tag->slug}}"  class="form-check-input" name="tags[]" value="{{$tag->id}}">
                    <label  class="form-check-label" for="{{$tag->slug}}">{{$tag->title}}</label>
                
                    {{-- @error('content')
                        <div class="alert alert-danger">{{$message}}</div>
                    @enderror --}}
                </div>
            @endforeach
           
        </div>
        
       <button class="btn btn-success" type="submit" >Add to Database</button>

    </form>
</div>
@endsection