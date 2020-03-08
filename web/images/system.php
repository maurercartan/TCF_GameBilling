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
          <li><a href="system.php">精準行銷</a></li>
          <li><a href="resource.php">關聯推薦</a></li>
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
            <p>顯示玩家課金路線之決策樹</p>
            <p>決策樹說明：上曲線為True 下曲線為false</p>
            <hr>
            <h1> </h1>

            <hr>
            <div class='resourceform'>
                    <div class='formdis1'>
                        <p>玩家分群</p>
                        <select name='resource1'>
                        <option value='recourcea'>最高貢獻度玩家</option>
                        <option value='recourceb'>新進玩家</option>
                        </select>
                        <form>
                          資源種類:<input type=text name=result1 value=數字 >
                          資源種類:<input type=text name=result2 value=數字 >
                          資源種類:<input type=text name=result3 value=數字 >
                          資源種類:<input type=text name=result4 value=數字 >
                          資源種類:<input type=text name=result5 value=數字 >
                        </form>

                    </div>
                  <div class='formbutton'>
                        <input type='submit' value='我是按鈕' onClick=\"this.form.action='system.php';this.form.submit();\">
                    </div>
                  </div>
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
?>
<div style="text-align:center"; class="newbuttons">
<div class="button-group">
<div class="download_cv">
  <a href="">顯示路徑:高貢獻玩家</a>
</div>
<div class="download_cv">
  <a href="">顯示路徑:僅前七天課金後無</a>
</div>
<div class="download_cv">
  <a href="">顯示路徑:免費玩家</a>
</div>
<div class="download_cv">
  <a href="">顯示路徑:前七日無課金後有</a>
</div>
</div>
</div>

  <iframe src="T2中文化.html" width="100%" height="100%" frameborder="0" scrolling="no"> </iframe>





  <!--footer-->
  <footer id="footer">
   <div class="container">
     <div class="footer-content">
       <p>Original data is from Datacastle.All Rights Reserved by tap4fun.</p>
     </div>
   </div>

</body>
</html>
