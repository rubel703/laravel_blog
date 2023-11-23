@extends('layouts.layout')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-6">
            <div class="card">
                <div class="card-header text-center">
                    <h5 class="card-title d-inline">{{$post->name}}</h5>
                </div>
                <div class="card-body">
                    <p class="card-text">{{ $post->description }}</p>
                    <p class="card-text fw-semibold fst-italic">Category: {{ $post->category }}</p>
                    <a href="{{ route('profile.index') }}" class="btn btn-success">Back</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection