<div class="container ops-main">
    <div class="row">
        <div class="col-md-6">
            <h2>書籍登録</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 col-md-offset-1">
        @include('book/message')
            @if($target == 'store')
            <form action="/book" method="post">
            @elseif($target == 'update')
            <form action="/book/{{ $book->id }}" method="post">
                <input type="hidden" name="_method" value="PUT">
            @endif
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                    <label for="title">タイトル</label>
                    <input type="text" class="form-control" name="title" value="{{ $book->title }}">
                </div>
                <div class="form-group">
                    <label for="genre">ジャンル</label>
                    <input type="text" class="form-control" name="genre" value="{{ $book->genre }}">
                </div>
                <div class="form-group">
                    <label for="impressions">感想文</label>
                    <input type="text" class="form-control" name="impressions" value="{{ $book->impressions }}">
                </div>
                <button type="submit" class="btn btn-default">登録</button>
                <a href="/book">戻る</a>
            </form>
        </div>
    </div>
</div>