@extends('template')
@section('content')
    <div class="container">
        <h1>Blog Admin</h1>

        <a href="{{ route('admin.posts.create') }}" class="btn btn-success">Create Post</a><br><br>

        <table class="table">
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th class="text-center">Action</th>
            </tr>
            @foreach($posts as $post)
                <tr>
                    <td>{{ $post->id }}</td>
                    <td>{{ $post->title }}</td>
                    <td  class="text-center">
                        <a href="{{ route('admin.posts.edit',['id'=>$post->id]) }}" class="btn btn-default">Edit</a> &nbsp;&nbsp;&nbsp;
                        <a href="{{ route('admin.posts.destroy',['id'=>$post->id]) }}" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            @endforeach
        </table>

        {!! $posts->render() !!}

    </div>
@endsection
