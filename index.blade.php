@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Danh sách bài viết</h1>
        <ul>
            @foreach ($posts as $post)
                <li>
                    <h3>{{ $post->title }}</h3>
                    <p>{{ $post->content }}</p>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
