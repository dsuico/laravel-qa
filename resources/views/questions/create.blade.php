@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                  <div class="d-flex justify-content-between align-items-center">
                    <h2 class="m-0">{{ __('Ask Question') }}</h2>
                    <div class="ml-auto">
                      <a href="{{ route('questions.index') }}" class="btn btn-outline-secondary">{{ __('Back to all Questions') }}</a>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <form action="{{ route('questions.store') }}" method="post">
                    @include('questions._form', ['buttonText' => 'Ask Question'])
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
