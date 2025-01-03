@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                  <div class="d-flex justify-content-between align-items-center">
                    <h1 class="m-0">{{ $question->title }}</h1>
                    <div class="ml-auto">
                      <a href="{{ route('questions.index') }}" class="btn btn-outline-secondary">{{ __('Back to all Questions') }}</a>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  {!! $question->body_html !!}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
