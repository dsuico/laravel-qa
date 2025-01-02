@csrf
<div class="mb-3">
  <label for="question-title">{{ __('Question Title') }}</label>
  <input type="text" name="title" value="{{ old('title', $question->title) }}" id="question-title" class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}" />
  @if($errors->has('title'))
    <div class="invalid-feedback">
      <strong>{{ $errors->first('title') }}</strong>
    </div>
  @endif
</div>
<div class="mb-3">
  <label for="question-body">{{ __('Explain your question') }}</label>
  <textarea name="body" id="question-body" class="form-control {{ $errors->has('body') ? 'is-invalid' : '' }}" rows="10">{{ old('body', $question->body) }}</textarea>
  @if($errors->has('body'))
    <div class="invalid-feedback">
      <strong>{{ $errors->first('body') }}</strong>
    </div>
  @endif
</div>
<div class="mb-3">
  <button type="submit" class="btn btn-outline-primary btn-lg">{{ $buttonText }}</button>
</div>