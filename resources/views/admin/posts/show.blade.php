@extends('layouts.app')

@section('page-title', $post->title)

@section('main-content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h1 class="text-center text-success">
                        {{ $post->title }}
                    </h1>
                    
                    <div>
                        <h3>
                            {{ $post->slug }}
                        </h3>
                        <p>
                            {{ $post->content }}
                        </p>
                    </div>

                    <div class="mb-4">
                        <a href="{{ route('admin.posts.index') }}" class="btn btn-primary">
                            Go back to Posts Page
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection