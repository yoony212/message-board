@extends('layouts.app')

@section('content')

    <div class="prose ml-4">
        <h2>メッセージ新規作成ページ</h2>
    </div>

    <div class="flex justify-center">
        <form method="POST" action="{{ route('messages.store') }}" class="w-1/2">
            @csrf

                <div class="form-control my-4">
                    <label for="title" class="label">
                        <span class="label-text">タイトル:</span>
                    </label>
                    <input type="text" name="title" class="input input-bordered w-full">
                </div>

                <div class="form-control my-4">
                    <label for="content" class="label">
                        <span class="label-text">メッセージ:</span>
                    </label>
                    <input type="text" name="content" class="input input-bordered w-full">
                </div>

            <button type="submit" class="btn btn-primary btn-outline">投稿</button>        </form>
    </div>
@endsection