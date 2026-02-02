<?php
require_once('funcs.php');

$lid = $_POST['lid'] ?? '';
$lpw = $_POST['lpw'] ?? '';

if ($lid === '' || $lpw === '') {
  redirect('login.php?error=1');
}

$pdo = db_conn();

// life_flg=0（使用中）のみ対象
$sql = "SELECT * FROM gs_user_table WHERE lid = :lid AND life_flg = 0 LIMIT 1";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':lid', $lid, PDO::PARAM_STR);
$status = $stmt->execute();
if ($status === false) {
  sql_error($stmt);
}

$user = $stmt->fetch(PDO::FETCH_ASSOC);
if (!$user) {
  redirect('login.php?error=1');
}

// password_hash() 前提
if (!password_verify($lpw, $user['lpw'])) {
  redirect('login.php?error=1');
}

// ログイン成功：セッションへ保存
$_SESSION['chk_ssid']  = session_id();
$_SESSION['name']      = $user['name'];
$_SESSION['lid']       = $user['lid'];
$_SESSION['kanri_flg'] = (int)$user['kanri_flg'];

// ログイン後は一覧へ（暫定）
redirect('select.php');
