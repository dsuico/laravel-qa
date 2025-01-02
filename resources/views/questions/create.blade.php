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
                    @csrf
                    <div class="mb-3">
                      <label for="question-title">{{ __('Question Title') }}</label>
                      <input type="text" name="title" value="{{ old('title') }}" id="question-title" class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}" />
                      @if($errors->has('title'))
                        <div class="invalid-feedback">
                          <strong>{{ $errors->first('title') }}</strong>
                        </div>
                      @endif
                    </div>
                    <div class="mb-3">
                      <label for="question-body">{{ __('Explain your question') }}</label>
                      <textarea name="body" id="question-body" class="form-control {{ $errors->has('body') ? 'is-invalid' : '' }}" rows="10">{{ old('body') }}</textarea>
                      @if($errors->has('body'))
                        <div class="invalid-feedback">
                          <strong>{{ $errors->first('body') }}</strong>
                        </div>
                      @endif
                    </div>
                    <div class="mb-3">
                      <button type="submit" class="btn btn-outline-primary btn-lg">Ask this question</button>
                    </div>
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
