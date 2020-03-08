<?php
    error_reporting(0);    //隱藏報錯
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/style.css">
  <title>精準行銷</title>

</head>
<body>

  <header id="header">
    <div class="container">
      <nav>

        <ul class="nav">
          <li><a href="index.php">報告主頁</a></li>
          <li><a href="price.php">金額預測</a></li>
          <li><a href="system.php">精準行銷</a></li>
          <li><a href="statistic.php">敘述統計</a></li>
          <li><a href="aboutus.php">關於團隊</a></li>

        </ul>
      </nav>
    </div>
  </header>

  <section class="home_bg">
  <div class="container_table">
    <div class="container_table_cell">
      <h2>手機遊戲玩家的消費金額預測與行為分析-以Brutal Age為例</h2>
    </div>
  </div>
<div class = "blank">
  <p>                           </p>
</div>


<?php
    echo "
        <form method='post'>
        <div class='resourcesystem'>
            <h1>精準行銷決策樹</h1>      
            <p style='font-size: 18px;'>顯示玩家課金路線之決策樹，上曲線為True即為大於平均 下曲線為false即為小於平均。</p>
            <p style='font-size: 22px;'>玩家分類說明:</p>
            <p style='font-size: 18px;'>TT:高貢獻玩家即為前7日與8-45日皆持續課金者 TF:消費熱度退燒玩家即為前7日課金8-45日無課金者</p>
            <p style='font-size: 18px;'>FF:不消費玩家即為前7日與8-45日皆無課金者 FT:慢熱玩家即為前7日無課金8-45日有課金者</p>
            <hr>
            <h1> </h1>

            <hr>
        </div>
        </form>
    ";
    if($_POST['resource1']!="" &&
       $_POST['resource2']!="" &&
       $_POST['resource3']!="" &&
       $_POST['resource4']!="")
    {
        //echo $_POST['resource1']."...".$_POST['resource2']."...".$_POST['resource3']."...".$_POST['resource4'];
    }
    echo "
    <div style='text-align:center'; class='newbuttons'>
      <div id='TT' name='TT'>
        <div class='button-group'>
        <div class='download_cv'><a href='system_TT.php#TT'>顯示路徑:高貢獻玩家</a></div>
        <div class='download_cv'><a href='system_TF.php#TF'>顯示路徑:消費熱度退燒玩家</a></div>
        <div class='download_cv'><a href='system_FF.php#FF'>顯示路徑:不消費玩家</a></div>
        <div class='download_cv'><a href='system_FT.php#FT'>顯示路徑:慢熱玩家</a></div>
        </div>
      </div>
    </div>
    ";
?>


  <iframe src="T2中文化_TT.html" width="100%" height="100%" frameborder="0" scrolling="no"> </iframe>





  <!--footer-->
  <footer id="footer">
   <div class="container">
     <div class="footer-content">
       <p>Original data is from Datacastle.All Rights Reserved by tap4fun.</p>
     </div>
   </div>

</body>
</html>
