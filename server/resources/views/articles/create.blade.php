@extends('layouts.application')

@section('title', '新規作成')

@section('content')
  <form action="/articles" method="post">
    {{-- 以下を入れないとエラーになる --}}
    {{ csrf_field() }}
    <div class="form-group">
      <label for="title">タイトル</label>
      <input class="form-control" type="text" name="title" placeholder="記事のタイトルを入れる">
      @if ($errors->has('title'))
      <p>{{$errors->first('title')}}</p>
      @endif
    </div>
    <div class="form-group">
      <label for="body">内容</label>
      <textarea class="form-control" name="body" rows="8" cols="80" placeholder="記事の内容を入れる"></textarea>
      @if ($errors->has('body'))
      <p>{{$errors->first('body')}}</p>
      @endif
    </div>
    <div>
      <button type="submit" class="btn btn-secondary">送信</button>
    </div>
  </form>
  <a href="/articles">詳細を表示</a>
@endsection

