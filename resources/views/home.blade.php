@extends('layout.app')

@section('title', 'Home')

@section('content')
    <div class="text-center">
        {{ $items->links() }}
    </div>
    @foreach($items as $item)
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">{{ $item->id }} - {{ $item->title }}</h3>
            </div>
            <div class="panel-body">
                <p class="small" style="margin-top: 5px">{{ $item->subtitle }}</p>
                <p class="small">Created at: {{ $item->created_at }}, Updated at: {{ $item->updated_at  }}</p>
                <hr>
                <p>{{ $item->description }}</p>
            </div>
        </div>
    @endforeach
    <div class="text-center">
        {{ $items->links() }}
    </div>
@endsection