@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">ChatGPT answer</div><div class="card-body">
            <p>{{ $response }}</p>
        </div>
    </div>
@endsection
