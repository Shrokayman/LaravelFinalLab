@extends('site_layouts.app')
@section('content')
        <a class="btn btn-primary m-2" href="/posts/create" role="button">Add new post</a>
        <table class="table m-3">
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Description</th>
                <th>Created at</th>
                <th>User name</th>
            </tr>

            @foreach($posts as $post)
                <tr>
                    <td>{{$post->id}}</td>
                    <td>{{$post->title}}</td>
                    <td>{{$post->description}}</td>
                    <td>{{$post->created_at}}</td>
                    <td>{{$post->user->name}}</td>
                    <td><a href="/posts/{{$post->id}}">Show</a></td>
                    <td><a href="/posts/{{$post->id}}/edit">Edit</a></td>
                    <td>
                        <form method="post" action="/posts/{{$post->id}}">
                            @csrf
                            @method("DELETE")
                            <input type="submit" value="Delete" >
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
@endsection
