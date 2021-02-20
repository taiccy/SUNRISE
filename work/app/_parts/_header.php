<?php

require_once(__DIR__ . '/../config.php');

createToken();

$pdo = getPdoInstance();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  validateToken();
  addCast($pdo);

  header('Location: ' . SITE_URL);
  exit;
}

$casts = getCasts($pdo);

?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= htmlspecialchars($title, ENT_QUOTES, 'UTF-8'); ?>B-BOYS</title>
  <meta name="description" content="大阪梅田の人気売り専『B-boys 大阪店』爽やか系からショタ系までイケメン揃い!!">
  <link rel="icon" href="favicon.ico">
  <link rel="stylesheet" href="css/main.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
  <header>
    <div class="logo">
      <img class="sun-logo" src="img/sun.png">
    </div>

    <div class="title">
      <h1>売り専 B-BOYS 大阪</h1>
    </div>

    <div class="shop-info">
      <div class="tel">
        <p>070-1546-7843</p>
      </div>
      <div class="time">
        <p>大阪中崎町駅 徒歩1分</p>
        <p>OPNE14:00からCLOSE24:00</p>
      </div>
    </div>

    <div class="sp-menu">
      <span class="material-icons" id="open">menu</span>
    </div>
  </header>
  
  <div class="overlay">
    <span class="material-icons" id="close">close</span>
    <nav>
      <ul>
        <li><a href="index.php">トップ</a></li>
        <li><a href="boys.php">ボーイ一覧</a></li>
        <li><a href="boys-show.php">ボーイ検索</a></li>
        <li><a href="schedule.php">出勤情報</a></li>
        <li><a href="">料金表</a></li>
        <li><a href="">ご利用案内</a></li>
        <li><a href="">アクセス</a></li>
        <li><a href="">ご案内</a></li>
        <li><a href="">アルバイト応募</a></li>
      </ul>
    </nav>
  </div>

  <div class="pc-menu">
    <img src="img/sun.png" alt="">
    <nav>
      <ul>
        <li><a href="index.php">トップ</a></li>
        <li><a href="boys.php">ボーイ一覧</a></li>
        <li><a href="boys-show.php">ボーイ検索</a></li>
        <li><a href="schedule.php">出勤情報</a></li>
        <li><a href="">料金表</a></li>
        <li><a href="">ご利用案内</a></li>
        <li><a href="">アクセス</a></li>
        <li><a href="">ご案内</a></li>
        <li><a href="">アルバイト応募</a></li>
      </ul>
    </nav>
  </div>