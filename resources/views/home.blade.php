@extends('layout.app')

@section('title', 'Home')

@section('content')
    @foreach($items as $item)
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">{{ $item->title }}</h3>
            </div>
            <div class="panel-body">
                <p class="small" style="margin-top: 5px">{{ $item->subtitle }}</p>
                <hr>
                <p>{{ $item->description }}</p>
            </div>
        </div>
    @endforeach
@endsection