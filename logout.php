<?php
require_once('funcs.php');

// SESSION初期化
$_SESSION = [];

// Cookie破棄
if (isset($_COOKIE[session_name()])) {
  setcookie(session_name(), '', time() - 42000, '/');
}

// SESSION削除
session_destroy();

redirect('login.php');
