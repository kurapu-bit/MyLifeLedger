<?php
require_once('funcs.php');

// すでにログイン済みなら一覧へ（暫定：select.php）
if (isset($_SESSION["chk_ssid"]) && $_SESSION["chk_ssid"] === session_id()) {
  redirect('select.php');
}

$error = isset($_GET['error']) ? (int)$_GET['error'] : 0;
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>ログイン | MyLife Ledger</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

<base href="/MyLifeLedger/">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="css/mylife.css?v=1">

</head>
<body>

<nav class="navbar navbar-default ml-navbar">
  <div class="container">
    <div class="navbar-header">
      <a class="navbar-brand ml-brand" href="index.php">
        <img src="img/logo.svg" alt="MyLife Ledger">
        <span>MyLife Ledger</span>
      </a>
    </div>
  </div>
</nav>

<div class="ml-login-wrap">
  <div class="ml-login-left"></div>

  <div class="ml-login-right">
    <div class="ml-login-box">

      <div class="ml-login-head">
        <h1 class="ml-serif">おかえりなさい</h1>
        <p>あなたの森が待っています</p>
      </div>

      <?php if ($error === 1): ?>
        <div class="alert alert-danger">IDまたはパスワードが正しくありません。</div>
      <?php endif; ?>

      <form method="post" action="login_act.php">
        <div class="form-group">
          <input type="text" name="lid" class="form-control ml-input"
                 placeholder="メールアドレス / ログインID" required>
        </div>

        <div class="form-group">
          <input type="password" name="lpw" class="form-control ml-input"
                 placeholder="パスワード" required>
        </div>

        <button type="submit" class="ml-btn ml-btn-green" style="width:100%;">ログイン</button>

        <div style="margin-top:12px; text-align:center; color:rgba(30,42,32,0.70);">
          アカウントをお持ちでない方
          <a href="user_insert.php" style="color: var(--ml-gold); font-weight:700;">新規登録</a>
        </div>

        <div style="margin-top:18px; text-align:center;">
          <a href="index.php" style="font-size:12px; color:rgba(30,42,32,0.60);">← TOPへ戻る</a>
        </div>
      </form>

    </div>
  </div>
</div>

</body>
</html>
