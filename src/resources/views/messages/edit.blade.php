@extends('layouts.app')

@section('content')

    <h1>id: {{ $message->id }} のメッセージ編集ページ</h1>

    <div class="row">
        <div class="col-6">
            <form action="/messages/{{ $message->id }}" method="post">
                @csrf
                @method('PUT')
        
                <div class="form-group">
                    <label for="content">メッセージ</label>
                    <input type="text" name="content" id="content" class="form-control" value="{{ $message->content }}">
                </div>
        
                <input type="submit" value="更新" class="btn btn-primary">
        
            </form>
        </div>
    </div>

@endsection