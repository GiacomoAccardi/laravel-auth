@extends('layouts.dashboard')

@section('main-content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 p-5 project-ref">
                <h2 class="mb-3">{{ $project->name }}</h2>
                <img src="{{ $project->image !== null ? asset('./storage/' . $project->image) : 'https://coffective.com/wp-content/uploads/2018/06/default-featured-image.png.jpg' }}"
                    alt="{{ $project->name }}" class="mb-3">
                <p>{{ $project->slug }}</p>
                <p>{{ $project->summary }}</p>
            </div>
        </div>
    </div>
@endsection
