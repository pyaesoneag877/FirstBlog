@extends('layouts.app')
    @section('content')
        <div class="container">
        <form 
        action="/articles/update/{{$article->id}}"
        method="post">
            @csrf
                <div class="mb-3">
                    <label>Title</label>
                    <input type="text" name="title" class="form-control" value="{{$article->title}}">
                </div>
                <div class="mb-3">
                    <label>Body</label>
                    <textarea name="body" class="form-control">{{$article->body}}</textarea>
                </div>

                <div class="mb-3">
                    <label>Category</label>
                    <select class="form-select" name="category_id">
                        
                            <option value="{{ $article->category->id }}">
                                {{ $article->category->name }}
                            </option>

                    </select>
                </div>
                
                <input type="submit" value="Edit" class="btn btn-primary">
            </form>
        </div>
    @endsection