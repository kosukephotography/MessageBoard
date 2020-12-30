@extends('layouts.app')

@section('content')

    <h1>メッセージ新規作成ページ</h1>

    <div class="row">
        <div class="col-6">
            <form action="/messages" method="POST">
                @csrf

                <div class="form-group">
                    <label for="title">タイトル</label>
                    <input type="text" name="title" id="title" class="form-control">
                </div>

                <div class="form-group">
                    <label for="content">メッセージ</label>
                    <input type="text" name="content" id="content" class="form-control">
                </div>

                <input type="submit" value="投稿" class="btn btn-primary">
        
            </form>
        </div>
    </div>

@endsection