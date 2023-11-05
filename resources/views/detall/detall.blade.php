@extends('layouts.app')

@section('content')
    <div class="image-box">
        <div>
            <img class="image-detall-1" src="{{ URL::asset('/assets/image/home/42.png') }}">
        </div>
        <div class="flex-direction-column">
            <img class="image-detall-2" src="{{ URL::asset('/assets/image/home/43.png') }}">
            <img class="image-detall-2" src="{{ URL::asset('/assets/image/home/43.png') }}">
        </div>
    </div>
@endsection
