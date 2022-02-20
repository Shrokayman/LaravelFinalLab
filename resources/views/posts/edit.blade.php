@extends('site_layouts.app')
@section('content')
        <form class="m-5" method="post" action="/posts/{{$post->id}}">
            @csrf
            @method('PATCH')
            <div class="mb-3">
                <label class="form-label">Title</label>
                <input type="text" name="title" value="{{$post->title}}" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Description</label>
                <input type="text" name="description" value="{{$post->description}}" class="form-control">
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
        @include('shared.errors')
@endsection
