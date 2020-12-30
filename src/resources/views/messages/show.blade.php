@extends('layouts.app')

@section('content')

    <h1>id = {{ $message->id }} のメッセージ詳細ページ</h1>

    <table class="table table-bordered">
        <tr>
            <th>id</th>
            <td>{{ $message->id }}</td>
        </tr>
        <tr>
            <th>タイトル</th>
            <td>{{ $message->title }}</td>
        </tr>
        <tr>
            <th>メッセージ</th>
            <td>{{ $message->content }}</td>
        </tr>
    </table>

    <a href="/messages/{{ $message->id }}/edit" class="btn btn-primary">このメッセージを編集</a>

    <form action="/messages/{{ $message->id }}" method="post">
        @csrf
        @method('DELETE')
        <input type="submit" value="削除" class="btn btn-danger">
    </form>

@endsection