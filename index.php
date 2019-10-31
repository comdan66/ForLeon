<?php

// 載入基本函式
include 'Lib/define.php';
include 'Lib/funcs.php';

// 取得所有商品
$products = getAllProduct();

// 進入畫面
?>
<!DOCTYPE html>
<html lang="zh-Hant">
  <head>
    <meta http-equiv="Content-Language" content="zh-tw">
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no,minimal-ui">

    <title>首頁</title>

    <link rel="stylesheet" type="text/css" href="css/public.css">
    <link rel="stylesheet" type="text/css" href="css/index.css">

  </head>
  <body>
    
    <div id='products'>
      <?php
      if (isset($products) && $products) { ?>
        <table>
          <thead>
            <tr>
              <th class='id'>ID</th>
              <th class='title'>標題</th>
              <th class='price'>售價</th>
              <th class='view'>檢視</th>
            </tr>
          </thead>
          <tbody>
            <?php
            foreach ($products as $product) { ?>
              <tr>
                <td><?php echo $product['id'];?></td>
                <td><?php echo $product['title'];?></td>
                <td><?php echo $product['price'];?>元</td>
                <td>
                  <a href="<?php echo hasLogin() ? "product.php?id=" . $product['id'] : "login.php";?>">檢視</a>
                </td>
              </tr>
            <?php
            } ?>
          </tbody>
        </table>
      <?php
      } else {
        echo "沒有資料！";
      } ?>
    </div>

  </body>
</html>