<?php
// funcs.php
ini_set("display_errors", 1);

if (session_status() === PHP_SESSION_NONE) {
  session_start();
}

function db_conn(): PDO {
  $db_name = 'xxxx';
  $db_host = 'xxxx';
  $db_id   = 'xxxx';
  $db_pw   = 'xxxx';

  try {
    $server_info = 'mysql:dbname=' . $db_name . ';charset=utf8;host=' . $db_host;
    $pdo = new PDO($server_info, $db_id, $db_pw);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $pdo;
  } catch (PDOException $e) {
    exit('DBConnectError!!:' . $e->getMessage());
  }
}

function sql_error($stmt): void {
  $error = $stmt->errorInfo();
  exit("SQLError!!:" . $error[2]);
}

function redirect(string $file): void {
  header("Location: " . $file);
  exit();
}

function h($str): string {
  return htmlspecialchars((string)$str, ENT_QUOTES, 'UTF-8');
}

function loginCheck(): void {
  if (!isset($_SESSION["chk_ssid"]) || $_SESSION["chk_ssid"] !== session_id()) {
    redirect('login.php');
  } else {
    session_regenerate_id(true);
    $_SESSION["chk_ssid"] = session_id();
  }
}

function isAdmin(): bool {
  return isset($_SESSION["kanri_flg"]) && (int)$_SESSION["kanri_flg"] === 1;
}

function adminCheck(): void {
  if (!isAdmin()) {
    exit("ADMIN ONLY");
  }
}
