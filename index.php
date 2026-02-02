<?php
require_once('funcs.php');

// すでにログイン済みならアプリ側へ（暫定：select.php）
if (isset($_SESSION["chk_ssid"]) && $_SESSION["chk_ssid"] === session_id()) {
  redirect('select.php');
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>MyLife Ledger</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

<base href="/MyLifeLedger/">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="css/mylife.css?v=1">
</head>
<body>

<nav class="navbar navbar-default navbar-fixed-top ml-navbar">
  <div class="container">
    <div class="navbar-header">
      <a class="navbar-brand ml-brand" href="index.php">
        <img src="img/logo.svg" alt="MyLife Ledger">
        <span>MyLife Ledger</span>
      </a>
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#mlNav">
        <span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
      </button>
    </div>

    <div class="collapse navbar-collapse" id="mlNav">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#features">機能</a></li>
        <li><a href="#how">使い方</a></li>
        <li><a href="#story">ストーリー</a></li>
        <li><a href="#contact">お問い合わせ</a></li>
        <li style="margin-left:8px;">
          <a class="ml-btn ml-btn-green" href="login.php" style="display:inline-block;">ログイン</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div style="height:50px;"></div>

<section class="ml-hero">
  <div class="ml-hero-bg"></div>
  <div class="ml-hero-overlay"></div>

  <div class="container ml-hero-inner">
    <div class="row" style="display:flex; align-items:center; flex-wrap:wrap;">
      <div class="col-md-6">
        <h1 class="ml-title ml-serif">人生を、森にする。</h1>
        <div class="ml-subtitle ml-subtitle-chip">毎日の記録が、あなただけの森を育てる</div>

        <div style="margin-top:18px;">
          <a class="ml-btn ml-btn-gold" href="#cta" style="display:inline-block; margin-right:10px;">アプリを始める</a>
          <a class="ml-btn ml-btn-ghost" href="#features" style="display:inline-block;">Web版へ</a>
        </div>
      </div>

      <div class="col-md-6 ml-hero-right" style="text-align:center; margin-top:18px;">
        <img src="img/devices.png" alt="アプリ画面">
      </div>
    </div>
  </div>
</section>

<section id="features" class="ml-section">
  <div class="container">
    <div class="ml-section-title ml-serif">“生きた証拠”が、積み上がる</div>
    <div class="ml-section-desc">30秒でも成立。回収して、読み返せる形に整え、人生資産にする。</div>

    <div class="row ml-feature-row">
      <div class="col-md-4" style="margin-bottom:15px;">
        <div class="ml-card">
          <div class="ml-icon">📝</div>
          <h4>1分日記</h4>
          <p>たった1分で記録。忙しくても“今日”を落とさない。</p>
        </div>
      </div>
      <div class="col-md-4" style="margin-bottom:15px;">
        <div class="ml-card">
          <div class="ml-icon">🌿</div>
          <h4>スキルツリー</h4>
          <p>成長を見える化。章立て（シーズン制）に整理。</p>
        </div>
      </div>
      <div class="col-md-4" style="margin-bottom:15px;">
        <div class="ml-card">
          <div class="ml-icon">📚</div>
          <h4>家族年表</h4>
          <p>思い出を繋ぐ。文脈ごと“家族史”へ。</p>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="how" class="ml-section">
  <div class="container">
    <div class="ml-section-title ml-serif">使い方</div>
    <div class="ml-section-desc">投げ込む → AI整形 → 未来に読める形へ。まずは最小で続ける。</div>

    <div class="row ml-feature-row">
      <div class="col-md-4" style="margin-bottom:15px;">
        <div class="ml-card">
          <div class="ml-icon">💬</div>
          <h4>30秒で投げ込む</h4>
          <p>チャット／音声／写真で“文脈ごと”回収。</p>
        </div>
      </div>
      <div class="col-md-4" style="margin-bottom:15px;">
        <div class="ml-card">
          <div class="ml-icon">✨</div>
          <h4>AIが整える</h4>
          <p>短文→未来可読な日記へ自動整形。タグで綺麗に仕分け。</p>
        </div>
      </div>
      <div class="col-md-4" style="margin-bottom:15px;">
        <div class="ml-card">
          <div class="ml-icon">🧭</div>
          <h4>読み返せる</h4>
          <p>年表／検索／人物で“人生資産”として積み上がる。</p>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="story" class="ml-section">
  <div class="container">
    <div class="ml-section-title ml-serif">ストーリー</div>
    <div class="ml-section-desc">「人生が流れていく恐怖」を、未来への贈り物に変える。</div>

    <div class="row ml-feature-row">
      <div class="col-md-8 col-md-offset-2">
        <div class="ml-card">
          <p style="margin:0;">
            MyLife Ledgerは、忙しい毎日を過ごす人達が抱える「幸福なのに、記憶と成長実感が消えていく」問題を、
            “生きた証拠”として残し、未来の自分と家族に渡すための人生台帳です。
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="contact" class="ml-section">
  <div class="container">
    <div class="ml-section-title ml-serif">お問い合わせ</div>
    <div class="ml-section-desc">不明点があれば何なりとお申し付けください。</div>

    <div class="row ml-feature-row">
      <div class="col-md-8 col-md-offset-2">
        <div class="ml-card text-center">
          <p style="margin:0;">
            まずは「入力が続く」「残した後に感動がある」体験を是非体験ください。
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="cta" class="ml-cta">
  <div class="container text-center">
    <div class="ml-section-title ml-serif">今すぐ、あなたの森を育て始めよう。</div>
    <div class="ml-section-desc">書くための日記ではなく、未来に渡すための人生台帳。</div>

    <div style="margin-top:18px;">
      <a class="ml-btn ml-btn-green" href="#" style="display:inline-block; width:200px; margin:6px;"> App Store</a>
      <a class="ml-btn ml-btn-green" href="#" style="display:inline-block; width:200px; margin:6px;">▶ Google Play</a>
    </div>

    <div class="ml-footer">© <?= date('Y') ?> MyLife Ledger</div>
  </div>
</section>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="js/mylife.js?v=1"></script>
</body>
</html>
