@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Show Thread</div>
                    <div class="card-body">
                        <p>{{ $thread->title }}</p>
                        <div class="alert alert-success" role="alert">
                        {{ $thread->body }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                @foreach($thread->replies as $reply)
                <div class="card-header">
                    <a href="#">{{ $reply->owner->name }}</a> said: {{ $reply->created_at->diffForHumans() }}...
                </div>
                    <div class="card-body">
                        <div class="alert alert-success" role="alert">
                            {{ $thread->body }}
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
