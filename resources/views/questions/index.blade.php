@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                  <div class="d-flex justify-content-between">
                    <h2>{{ __('All Questions') }}</h2>
                    <div class="ml-auto">
                      <a href="{{ route('questions.create') }}" class="btn btn-outline-secondary">{{ __('Ask Question') }}</a>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  @include('layouts._messages')
                  @foreach($questions as $question)
                    <div class="media d-flex">
                      <div class="d-flex flex-column counters">
                        <div class="vote">
                          <strong>{{ $question->votes }}</strong> {{ \Illuminate\Support\Str::plural('vote', $question->votes) }}
                        </div>
                        <div class="status {{ $question->status }}">
                          <strong>{{ $question->answers }}</strong> {{ \Illuminate\Support\Str::plural('answer', $question->answers) }}
                        </div>
                        <div class="view">
                          {{ $question->views . ' ' . \Illuminate\Support\Str::plural('view', $question->views) }}
                        </div>
                      </div>
                      <div class="media-body d-flex flex-column flex-fill">
                        <div class="d-flex">
                            <h3 class="mt-0"><a href="{{ $question->url }}">{{ $question->title }}</a></h3>
                          <div class="d-flex flex-fill">
                            @can('update', $question)
                            <div class="flex-fill mx-2 ">
                              <a href="{{ route('questions.edit', $question->id) }}" class="btn btn-sm btn-outline-info float-end">Edit</a>
                            </div>
                            @endcan
                            @can('delete', $question)
                            <div>
                              <form action="{{ route('questions.destroy', $question->id) }}" method="post">
                                @method('DELETE')
                                @csrf
                                <button class="btn btn-sm btn-outline-danger" type="submit" onclick="return confirm('Are you sure?')">Delete</button>
                              </form>
                            </div>
                            @endcan
                          </div>
                        </div>
                        <p class="lead">
                          Asked by
                          <a href="{{ $question->user->url }}">{{ $question->user->name }}</a>
                          <small class="text-muted"> {{ $question->created_date }}</small>
                        </p>
                        {{ \Illuminate\Support\Str::limit($question->body, 250) }}
                      </div>
                    </div>
                    <hr>
                  @endforeach
                  {{ $questions->links('vendor.pagination.bootstrap-5') }}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
