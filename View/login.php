<!DOCTYPE html>
<html lang="zh-Hant">
  <head>
    <meta http-equiv="Content-Language" content="zh-tw">
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no,minimal-ui">

    <title>登入</title>

    <link rel="stylesheet" type="text/css" href="View/css/public.css">
    <link rel="stylesheet" type="text/css" href="View/css/login.css">

  </head>
  <body>
    
    <form action="signin.php" method="post" id='login'>
      <b>請輸入帳號密碼登入！</b>
      <hr>

      <label class='account'>
        <b>帳號</b>
        <input type="text" name="account" placeholder="請輸入您的帳號…">
      </label>

      <label class='password'>
        <b>密碼</b>
        <input type="password" name="password" placeholder="請輸入您的密碼…">
      </label>

      <button type='submit'>登入</button>
    </form>

  </body>
</html>