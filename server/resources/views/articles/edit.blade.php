@extends('layouts.application')

{{-- @yield('title')にテンプレートごとの値を代入 --}}
@section('title', '編集')

{{-- application.blade.phpの@yield('content')に以下のレイアウトを代入 --}}
@section('content')
  <form action="/articles/{{$article->id}}" method="post">

    {{ csrf_field() }}

    <div class="form-group">
      <label for="title">タイトル</label>
      <input class="form-control" type="text" name="title" placeholder="記事のタイトルを入れる" value="{{$article->title}}">
    </div>
    <div class="form-group">
      <label for="body">内容</label>
      <textarea class="form-control" name="body" rows="8" cols="80" placeholder="記事の内容を入れる">{{$article->body}}</textarea>
    </div>
    <div>
      <input type="hidden" name="_method" value="patch">
      <button type="submit" class="btn btn-secondary">送信</button>
    </div>
  </form>
@endsection
