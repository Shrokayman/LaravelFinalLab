@extends('site_layouts.app')
@section('content')
        <h3>{{$post->title}}'s info</h3>
        <ul>
            <li>{{$post->id}}</li>
            <li>{{$post->title}}</li>
            <li>{{$post->description}}</li>
            <li>{{$post->created_at}}</li>
            <li>{{$post->updated_at}}</li>
        </ul>
@endsection
