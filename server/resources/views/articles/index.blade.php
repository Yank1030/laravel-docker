{{-- layoutsフォルダのapplication.blade.phpを継承 --}}
@extends('layouts.application')

{{-- @yield('title')にテンプレートごとの値を代入 --}}
@section('title', '記事一覧')

{{-- application.blade.phpの@yield('content')に以下のレイアウトを代入 --}}
@section('content')
    <div>
      <a href="/articles/create">新規作成</a>
    </div>
    <table class="table">
        <tbody>
            @foreach ($articles as $article)
            <tr>
                <th>{{$article->title}}</th>
                <td>{{$article->body}}</td>
                <td><a href="/articles/{{$article->id}}">詳細を表示</a></td>
                <td><a href="/articles/{{$article->id}}/edit">編集する</a></td>
                <td>
                  <form action="/articles/{{$article->id}}" method="post">
                    {{ csrf_field() }}
                    <input type="hidden" name="_method" value="delete">
                    <button type="submit" class="btn btn-link">削除する</button>
                  </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <script>
        $(document).ready(function(){
            console.log('test');
        });
    </script>
@endsection
