<?php

// 載入基本函式
include 'Lib/define.php';
include 'Lib/funcs.php';

if (!isset($_GET['id'])) {
  echo "ID 格式錯誤！";
  exit();
}

// 藉由網址 get 參數 id 取得商品
$product = getProductById($_GET['id']);

// 回傳 null 代表找不到
if ($product === null) {
  echo "找不到此商品！";
  exit();
}

// 進入畫面
?>
<!DOCTYPE html>
<html lang="zh-Hant">
  <head>
    <meta http-equiv="Content-Language" content="zh-tw">
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no,minimal-ui">

    <title>商品內頁</title>

    <link rel="stylesheet" type="text/css" href="css/public.css">
    <link rel="stylesheet" type="text/css" href="css/product.css">

  </head>
  <body>
    
    <div id='product'>
      <h1>商品詳細資料</h1>
      <table>
        <tbody>
          <tr>
            <th>標題</th>
            <td><?php echo $product['title'];?></td>
          </tr>
          <tr>
            <th>敘述</th>
            <td><?php echo $product['description'];?></td>
          </tr>
          <tr>
            <th>售價</th>
            <td><?php echo $product['price'];?></td>
          </tr>
        </tbody>
      </table>
    </div>

  </body>
</html>