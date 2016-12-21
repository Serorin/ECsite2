<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/css/top.css">
    <link href="https://fonts.googleapis.com/earlyaccess/mplus1p.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.2.1/material.indigo-pink.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="img/jquery.bxslider.min.js"></script>
    <link href="img/jquery.bxslider.css" rel="stylesheet" />
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $('.bxslider').bxSlider({
                auto: true,
                speed: 1500
            });
        });
    </script>
    <title>TOP</title>
</head>

<body>
    <div class="title">
      <p class="top_center">
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
            <li><a href="/other">Other</a></li>
        </ul>
    </div>

    <!-- バナー -->
    <ul class="bxslider">
        <li><img class="top_center_pict" src="/img/バナー.png"></li>
        <li><img class="top_center_pict" src="/img/バナー2.jpg"></li>
    </ul>

    <!-- お知らせ -->
    <table class="top_info_1">
        <tr class="top_info_2">
            <td>お知らせ</td>
          </tr>
                    @foreach($newslist as $value)
                        <tr>
                            <td>{{$value->name}}</td>
                            <td>{{$value->created_at}}</td>
                      </tr>
                   @endforeach
          </tr>
    </table>

    </div>
</body>

</html>
