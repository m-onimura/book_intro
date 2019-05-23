@component('components.head')
  @slot('title')
  登録情報変更
  @endslot
@endcomponent

<body>
  <div class="user_edit">
    <header class="header">
      <div class="flex">
        <div class="left">
          <h1><a class="title" href="/">Book Talk</a></h1>
        </div>
        <div class="right flex">
          <div><a class="login" href="/posts/add">投稿</a></div>
          <div><a class="signup" href="/user">{{$user->name}}</a></div>
          <div><a class="logout" href="/auth/logout">ログアウト</a></div>
        </div>
      </div>
    </header>
    <h2 class="heading">登録情報変更</h2>
    <div class="container">
      <form action="/user/edit" method="post">
        {{ csrf_field() }}
        <div class="box">
          <label for="name">ユーザー名</label>
          <input class="form_text" type="text" name="name" size="30" value="{{$user->name}}">
          <span class="error">{{ $errors->first('name') }}</span>
        </div>
        <div class="box">
          <label for="email">メールアドレス</label>
          <input class="form_text" type="text" name="email" size="30" value="{{$user->email}}">
          <span class="error">{{ $errors->first('email')}}</span>
        </div>
        <button class="form_btn type="submit" name="action" value="send">送信</button>
      </form>
    </div>
  </div>
</body>
</html>