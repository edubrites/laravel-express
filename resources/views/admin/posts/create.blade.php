@extends('template')
@section('content')
    <div class="container">
        <h1>Create new post</h1>

        @if($errors->any())

            <ul class="alert">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

        {!! Form::open(['route'=>'admin.posts.store','method'=>'post']) !!}

        @include('admin.posts._form')

        <!-- Title Form Input -->
        <div class="form-group">
            {!! Form::label('title','Tags:') !!}
            {!! Form::textarea('tags', null, ['class'=>'form-control']) !!}
        </div>

        <!-- Title Form Input -->
        <div class="form-group">
            {!! Form::submit('Create Post', ['class'=>'btn btn-primary']) !!}
        </div>

        {!! Form::close() !!}

    </div>
@endsection
