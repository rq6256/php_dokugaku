<?php
$siteTitle = 'プロフィール編集';
require('head.php'); 
?>

  <body class="page-profEdit page-2colum page-logined">

    <!-- メニュー -->
    <?php
    require('header.php'); 
    ?>

    <!-- メインコンテンツ -->
    <div id="contents" class="site-width">
      <h1 class="page-title">プロフィール編集</h1>
      <!-- Main -->
      <section id="main" >
        <div class="form-container">
          <form action="" class="form">
            <div class="area-msg">
              TELは半角数字10文字以上で入力してください。<br>
              年齢は半角数字で入力してください。<br>
              ◯◯が長すぎます。
            </div>
           <label>
             名前
             <input type="text" name="username">
           </label>
            <label>
              TEL
              <input type="text" name="tel">
            </label>
            <label>
              郵便番号
              <input type="text" name="zip">
            </label>
            <label>
              住所
              <input type="text" name="addr">
            </label>
            <label style="text-align:left;">
             年齢
              <input type="number" name="age">
            </label>
            <label>
              Email
              <input type="text" name="email">
            </label>
            
            <div class="btn-container">
              <input type="submit" class="btn btn-mid" value="変更する">
            </div>
          </form>
        </div>
      </section>
      
      <!-- サイドバー -->
      <section id="sidebar">
        <a href="registProduct.html">商品を出品する</a>
        <a href="tranSale.html">販売履歴を見る</a>
        <a href="profEdit.html">プロフィール編集</a>
        <a href="passEdit.html">パスワード変更</a>
        <a href="withdraw.html">退会</a>
      </section>
    </div>

    <!-- footer -->
    <?php
    require('footer.php'); 
    ?>
