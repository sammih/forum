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
</div>
@endsection
