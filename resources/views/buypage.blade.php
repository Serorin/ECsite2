<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/css/buypage.css">
    <link href="https://fonts.googleapis.com/earlyaccess/mplus1p.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://code.getmdl.io/1.2.1/material.indigo-pink.min.css">
<script defer src="https://code.getmdl.io/1.2.1/material.min.js"></script>
    <title>buypage</title>
  </head>
  <body>
    <div class="title">
      <p class="cart_center">
        わたしのおんなのこ
      </p>
    </div>

    <div class="top_right">
      @if(Auth::check())
        <button type="button" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" name="button" onclick="location.href='logout'">ログアウト</button>&nbsp;&nbsp;&nbsp;
        @else
        <button type="button" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" name="button" onclick="location.href='login'">ログイン</button> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <button type="button" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" name="button" onclick="location.href='register'">新規登録</button>
        @endif
    </div>


      <div class="buy_center">
      <h4>購入ありがとうございました！</h4>
      <h5>商品が送信されました</h5>
      <a href="/" >→TOPへ</a>
      </div>


  </body>
</html>
