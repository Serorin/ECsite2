<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/css/cart.css">
    <link href="https://fonts.googleapis.com/earlyaccess/mplus1p.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://code.getmdl.io/1.2.1/material.indigo-pink.min.css">
<script defer src="https://code.getmdl.io/1.2.1/material.min.js"></script>
    <title>cart</title>
  </head>
  <body>

  <div class="title">
    <p class="cart_center">
      わたしのおんなのこ
    </p>
  </div>

  <div class="top_right">
    @if(Auth::check())
    <a href="/cart"><img height="50" src="img/cart.png"></a>&nbsp;&nbsp;&nbsp;
      <button type="button" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" name="button" onclick="location.href='logout'">ログアウト</button>&nbsp;&nbsp;&nbsp;
      @else
      <button type="button" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" name="button" onclick="location.href='login'">ログイン</button> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <button type="button" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" name="button" onclick="location.href='register'">新規登録</button>
      @endif
  </div>

    <div class="navi">
      <ul>
        <li><a href="/">TOP</a></li>
        <li><a href="/long">Long</a></li>
        <li><a href="/medium">Medium</a></li>
        <li><a href="other">Other</a></li>
      </ul>
    </div>

    @if($items)
      <div class="center2">
        <table class="cart_table">
          <tr class="info2">
            <td>商品名</td>
            <td>価格</td>
          </tr>
          @foreach($items as $index=>$Product)
          <tr>
            <td class="cart_td">{{$Product->name}}</td>
            <td class="cart_td">{{$Product->price}}</td>
            <td class="cart_td"><button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="location.href='/delete?index={{$index}}'">削除</button></td>
          </tr>
          </div>
          @endforeach
          <tr>
            <td></td>
            <td class="cart_td2"><button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="location.href='/delete/all?index={{$index}}'">全削除</button></td>
          </tr>
        </table>
      </div>
      <br>
      <div class="cart_button">
        <button type="button" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" name="button" onclick="location.href='/'">買い物を続ける</button>
        &nbsp;&nbsp;&nbsp;
        <button type="button" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" name="button" onclick="location.href='/buypage'">購入</button>
@else
<div class="cart_center">
  <p>商品は入っていません。</p>
</div>
@endif
<br>

</body>
</html>
