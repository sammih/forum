@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Threads</div>
                @foreach($threads as $thread)
                    <div class="card-body">
                        <p> <a href="{{ $thread->path() }}">{{ $thread->title }}</a> </p>
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
