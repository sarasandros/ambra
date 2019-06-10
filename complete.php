<?php
mb_language("japanese");
mb_internal_encoding("UTF-8");
 
//データ格納
 $to = $_POST["email1"];//メール送信先の設定
 $subject = "お問い合わせ";//メールの件名
 $header = "From:info@tdp.com";//送信元アドレス
 $header .= "\n";//改行
 $header .= "Bcc:sarasa0326@gmail.com";//確認メール管理者受信用
 $message = "お問い合わせいただき誠にありがとうございます。" . "\n" .
 "お客様からのお問い合わせを下記内容にて受け付けました" . "\n" . "\n" .
 "お名前：" . $_POST["name"] . "\n" .
 "E-Mail：" . $_POST["email1"] . "\n" .
 "お問い合わせ内容：" . "\n" .
 $_POST["content"] ;
 
//メール送信
  mb_send_mail($to, $subject, $message, $header);
	
?>
<!doctype html>
<html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>お問い合わせ</title>
<link href="css/reset.css" rel="stylesheet" type="text/css">
<link href="css/complete.css" rel="stylesheet" type="text/css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
 $(function(){　//ページの内容（HTMLやCSSなど）を全て読み込み準備が整ったら実行
  $('.btnHamburger,#coverlayer,nav').on('click', function(){　//.btnHamburgerがクリックされた時の処理
    $('.btnHamburger,#coverlayer,nav').toggleClass('is-active');　//.is-activeを付ける・外す
  });
});	
</script>
<script type="text/javascript" src="js/jquery.backstretch.js"></script>
<script>
$(document).ready(function() {
　　  $.backstretch("images/contact_back.jpg");

    });
</script>
	</head>

<body>
<div id="wrapper">

<!--ハンバーガーメニュー-->
<div class="btnHamburger">
<span class="line line_01"></span>
<span class="line line_02"></span>
<span class="line line_03"></span>
</div>

<!--カバーレイヤー-->
<div id="coverlayer"></div>
	
<nav>
  <ul>
    <li><a href="index.html">Top </a></li>
    <li><a href="collection.html">Collection</a></li>
    <li><a href="message.html">How to use</a></li>
    <li><a href="contact.html">Contact</a></li>
  </ul>
  </nav>
	
<header>
<h1><a href="index.html"><img src="images/logo.png" alt="ambraロゴ"/></a></h1>
<main>
<article>
<section>
<h1>お問い合わせ</h1>	
<h2>
送信完了<br>
お問い合わせありがとうございます。
<div id="btn"><a href="index.html">
Top
</a>
</div>
</h2>
</section>	
</article>	
</main>
<footer><small>Copyright &copy; 2019 Ambra. All rights reserved.</small></footer>
</header>		

</div>
</body>
</html>