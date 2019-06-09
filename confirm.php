<?php
$name = isset($_POST["name"])? $_POST["name"] : "";
$furigana = isset($_POST["furigana"])? $_POST["furigana"] : "";
$zip1 = isset($_POST["zip1"])? $_POST["zip1"] : "";
$zip2 = isset($_POST["zip2"])? $_POST["zip2"] : "";
$pref = isset($_POST["pref"])? $_POST["pref"] : "";
$address = isset($_POST["address"])? $_POST["address"] : "";
$tel = isset($_POST["tel"])? $_POST["tel"] : "";
$tel = isset($_POST["tel"])? $_POST["tel"] : "";
$email1 = isset($_POST["email1"])? $_POST["email1"] : "";
$email2 = isset($_POST["email2"])? $_POST["email2"] : "";
$content = isset($_POST["content"])? $_POST["content"] : "";
?>

<!doctype html>
<html>
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>お問い合わせ</title>
<link href="css/reset.css" rel="stylesheet" type="text/css">
<link href="css/confirm.css" rel="stylesheet" type="text/css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
 $(function(){　//ページの内容（HTMLやCSSなど）を全て読み込み準備が整ったら実行
  $('.btnHamburger,#coverlayer,nav').on('click', function(){　//.btnHamburgerがクリックされた時の処理
    $('.btnHamburger,#coverlayer,nav').toggleClass('is-active');　//.is-activeを付ける・外す
  });
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
    <li><a href="#">Collection</a></li>
    <li><a href="#">How to use</a></li>
    <li><a href="contact.html">Contact</a></li>
  </ul>
  </nav>
	
<header>
<h1><a href="index.html"><img src="images/logo.png" alt="ambraロゴ"/></a></h1>	
</header>		
<main>
<article>
<section>
<h1>お問い合わせ</h1>
<form action="complete.php" method="post" name="contact" id="contact">
	
<input type="hidden" name="name" value="<?php echo htmlspecialchars($name,ENT_QUOTES,"UTF-8"); ?>">
<input type="hidden" name="furigana" value="<?php echo htmlspecialchars($furigana,ENT_QUOTES,"UTF-8"); ?>">
<input type="hidden" name="zip1" value="<?php echo htmlspecialchars($zip1,ENT_QUOTES,"UTF-8"); ?>">
<input type="hidden" name="zip2" value="<?php echo htmlspecialchars($zip2,ENT_QUOTES,"UTF-8"); ?>">
<input type="hidden" name="pref" value="<?php echo htmlspecialchars($pref,ENT_QUOTES,"UTF-8"); ?>">
<input type="hidden" name="address" value="<?php echo htmlspecialchars($address,ENT_QUOTES,"UTF-8"); ?>">
<input type="hidden" name="tel" value="<?php echo htmlspecialchars($tel,ENT_QUOTES,"UTF-8"); ?>">
<input type="hidden" name="email1" value="<?php echo htmlspecialchars($email1,ENT_QUOTES,"UTF-8"); ?>">
<input type="hidden" name="email2" value="<?php echo htmlspecialchars($email2,ENT_QUOTES,"UTF-8"); ?>">
<input type="hidden" name="content" value="<?php echo htmlspecialchars($content,ENT_QUOTES,"UTF-8"); ?>">
	
	
<dl>
<dt>名前</dt>
<dd><?php echo htmlspecialchars($name,ENT_QUOTES,"UTF-8"); ?></dd>
<dt>ふりがな</dt>
<dd><?php echo htmlspecialchars($furigana,ENT_QUOTES,"UTF-8"); ?></dd>
<dt>郵便番号</dt>
<dd><?php echo htmlspecialchars($zip1,ENT_QUOTES,"UTF-8"); ?> - <?php echo htmlspecialchars($zip2,ENT_QUOTES,"UTF-8"); ?></dd>
<dt>住所</dt>
<dd><?php echo htmlspecialchars($pref,ENT_QUOTES,"UTF-8"); ?>
<?php echo htmlspecialchars($address,ENT_QUOTES,"UTF-8"); ?>
	</dd>
<dt>電話番号</dt>
<dd><?php echo htmlspecialchars($tel,ENT_QUOTES,"UTF-8"); ?></dd>
<dt>E-mail</dt>
<dd><?php echo htmlspecialchars($email1,ENT_QUOTES,"UTF-8"); ?></dd>
<dt>E-mai(確認)</dt>
<dd><?php echo htmlspecialchars($email2,ENT_QUOTES,"UTF-8"); ?></dd>
<dt>内容</dt>
<dd><?php echo nl2br(htmlspecialchars($content,ENT_QUOTES,"UTF-8")); ?></dt>
<dt><input type="button" value="戻る" onClick="history.back();">
<input type="submit" value="送信"></dt>
<dd>&nbsp;</dd>
</dl>
	
	
	
</form>
</section>	
</article>	
</main>
<footer><small>Copyright &copy; 2019 Ambra. All rights reserved.</small></footer>
</div>	
	
</body>
</html>
