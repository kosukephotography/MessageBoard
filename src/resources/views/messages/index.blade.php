@extends('layouts.app')

@section('content')

    <h1>メッセージ一覧</h1>

    @if (count($messages) > 0)
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>id</th>
                    <th>タイトル</th>
                    <th>メッセージ</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($messages as $message)
                <tr>
                    <td><a href="/messages/{{ $message->id }}">{{ $message->id }}</a></td>
                    <td>{{ $message->title }}</td>
                    <td>{{ $message->content }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif

    {{ $messages->links('pagination::bootstrap-4') }}

    <a href="messages/create" class="btn btn-primary">新規メッセージの投稿</a>

@endsection