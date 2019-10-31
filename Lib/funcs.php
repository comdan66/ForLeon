<?php

function newPDO() {
  try {
      return new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PSWD);
  } catch (PDOException $e) {
      return null;
  }
}

function findUserByAccountAndPassword($acc, $psw) {
  $pdo = newPDO();
  if (!$pdo) { // 連線錯誤
    return null;
  }

  try {
    $sql = $pdo->prepare('SELECT * FROM `User` WHERE `account` = ? AND password = ?');
    $sql->execute([$acc, $psw]);
    $datas = $sql->fetchAll();
    
    if (count($datas) > 0) {
      return $datas[0];
    } else {
      return null;
    }
  } catch (PDOException $e) { // 發生錯誤
    return [];
  }
}

function getProductById($productId) {

  $pdo = newPDO();
  if (!$pdo) { // 連線錯誤
    return [];
  }

  try {
    $sql = $pdo->prepare('SELECT * FROM `Product` WHERE `id` = ?');
    $sql->execute([$productId]);
    $datas = $sql->fetchAll();
    if (count($datas) > 0) {
      return $datas[0];
    } else {
      return null;
    }
  } catch (PDOException $e) { // 發生錯誤
    return [];
  }
}

function getAllProduct() {
  $pdo = newPDO();
  if (!$pdo) { // 連線錯誤
    return [];
  }

  try {
    $sql = $pdo->prepare('SELECT * FROM `Product`');
    $sql->execute();
    return $sql->fetchAll();
  } catch (PDOException $e) { // 發生錯誤
    return [];
  }
}

function hasLogin() { // 判斷是否登入
  return isset($_SESSION['userId']);
}