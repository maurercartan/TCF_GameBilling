<?php
    //Show table
    //http://bl.ocks.org/AMDS/4a61497182b8fcb05906

    error_reporting(0);    //隱藏報錯

    function read_csv2dict($csvFile)
    {
        $result = array();

        $fp = fopen($csvFile, "r");
        while (($data = fgetcsv($fp, 1000, ",")) !== FALSE) {
            $result[$data[0]] = array($data[1]);
        }
        return $result;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/style.css">
  <title>精準行銷</title>
  <style>
   .resourceform .formdis1{
    text-align: center;
    margin:auto;
  }
  .resourceform{
   text-align: center;
   margin:auto;
 }
  </style>
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
        <h1>課金額預測系統</h1>
        <p style='font-size: 18px;'>經由下拉式選單挑選玩家範例(為0-7天遊戲數據)即可顯示針對該玩家45天之課金額預測</p>

        <hr>
        <h1> </h1>
        <hr>
        <div class='resourceform'>
        <div class='formdis1'>
        <p style='text-align:center;'>玩家id</p>

        <select name='resource1'>
        <option value='0.99'>1617</option>
        <option value='12.97'>1639</option>
        <option value='0'>1672</option>
        <option value='0'>1685</option>
        <option value='0'>1791</option>
        <option value='0'>1874</option>
        <option value='0'>1887</option>
        <option value='0'>1893</option>
        <option value='0.99'>1897</option>
        <option value='0'>1898</option>
        <option value='8982.78'>1973</option>
        <option value='167.73'>2209</option>
        <option value='1.98'>2235</option>
        <option value='1.98'>2409</option>
        <option value='0.99'>2427</option>
        <option value='5.98'>2573</option>
        <option value='11.96'>2826</option>
        <option value='110.96'>3486</option>
        <option value='348.89'>4425</option>
        <option value='26.96'>4482</option>
        <option value='0.99'>5588</option>
        <option value='4.99'>7007</option>
        <option value='0.99'>7250</option>
        <option value='25.92'>7309</option>
        <option value='15.96'>7360</option>
        <option value='4.99'>8053</option>
        </select>
        </div>

        <div class='formbutton'>
        <input type='submit' value='送出' onClick=\"this.form.action='price.php';this.form.submit();\">
        </div>

        </div>


        </div>
        </form>
    ";
    if($_POST['resource1']!="")
    {
        $NT = (float)$_POST['resource1']*30;
        echo "<script>alert('此玩家45天預測課金額為 $".$NT." NT')</script>";
    }
?>
<div class="iframe" style="text-align:center; height:550px;">
  <iframe src="newexample.htm"" width="90%" height="100%" frameborder="0" scrolling="no" > </iframe>
</div>

  <!--footer-->
  <footer id="footer">
   <div class="container">
     <div class="footer-content">
       <p>Original data is from Datacastle.All Rights Reserved by tap4fun.</p>
     </div>
   </div>

</body>
</html>
