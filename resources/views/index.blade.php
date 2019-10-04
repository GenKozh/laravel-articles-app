@extends('base')

@section('main')
<div class="row">
<div class="col-sm-12">
    <h1 class="display-3">Articles</h1>    
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Author</td>
          <td>Title</td>
          <td>Text</td>
        </tr>
    </thead>
    <tbody>
        @foreach($articles as $article)
        <tr>
            <td>{{$article->id}}</td>
            <td>{{$article->author_name}} {{$article->author_name}}</td>
            <td>{{$article->article_text}}</td>
            <td>
                <a href="{{ route('article.edit',$article->id)}}" class="btn btn-primary">Edit</a>
            </td>
            <td>
                <form action="{{ route('article.destroy', $contact->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
</div>
@endsection