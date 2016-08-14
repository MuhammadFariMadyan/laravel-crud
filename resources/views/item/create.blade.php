@extends('layout.app')

@section('title', 'Create item:')

@section('content')

    @if ($errors->any())
        <div class="alert alert-danger">
            @foreach($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif

    {!! Form::open(['url' => 'item']) !!}

    @include('item.form', ['submitButtonText' => 'Create item'])

    {!! Form::close() !!}

@endsection