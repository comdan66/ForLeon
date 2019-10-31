<?php

// 載入基本函式
include 'Lib/define.php';
include 'Lib/funcs.php';

// 沒有 post account 與 password 則錯
if (!(isset($_POST['account']) && isset($_POST['password']))) {
  echo "資料錯誤！";
  exit();
}

$account = trim($_POST['account']); // 去除空白
$password = trim($_POST['password']); // 去除空白

// 藉由 account 與 password 找尋 User
$user = findUserByAccountAndPassword($account, $password);

// 找不到 User
if ($user === null) {
  echo "登入失敗";
  exit();
}

// 登入成功

// 設定 session
$_SESSION['userId'] = $user['id'];

// 轉換頁面至 index.php
header('Location: index.php');
