@extends('base')

@section('main')
<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h1 class="display-3">Create an article</h1>
  <div>
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('articles.store') }}">
          @csrf
          <div class="form-group">    
              <label for="author_name">Author:</label>
              <input type="text" class="form-control" name="author_name"/>
          </div>

          <div class="form-group">
              <label for="title">Title:</label>
              <input type="text" class="form-control" name="title"/>
          </div>

          <div class="form-group">
              <label for="article_text">Text:</label>
              <div>
                 <textarea name="article_text" class="form-control" id="article_text" cols="80" rows="10" aria-required="true" placeholder="Article text is go here"></textarea>
              </div>
          </div>

          <button type="submit" class="btn btn-primary-outline">Create an article</button>
      </form>
  </div>
</div>
</div>
@endsection