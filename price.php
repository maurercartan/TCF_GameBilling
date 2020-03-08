<?php
    //Show table
    //http://bl.ocks.org/AMDS/4a61497182b8fcb05906

    error_reporting(0);    //隱藏報錯

    function read_csv2dict($csvFile)
    {
        $result = array();
        $count = 0;

        $fp = fopen($csvFile, "r");
        while (($data = fgetcsv($fp, 1000, ",")) !== FALSE) {
            $result[$count] = array($data[0],$data[1]);
            $count++;
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

</head>
<body onLoad="window.scroll(0, 450)">

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
    $rnd = rand(0,2);

    echo "
        <form method='post'>
            <div class='resourcesystem'>
                <h1>課金額預測系統</h1>
                <p><font size='5'>經由下拉式選單挑選玩家範例(為0-7天遊戲數據)即可顯示針對該玩家45天之課金額預測</font></p>

                <hr>
                <h1> </h1>
                <hr>
                <div class='resourceform'>
                    <div class='formdis1'>
                        <font size='3'>
                        玩家id
                        <select name='resource1'>
    ";
    $result = read_csv2dict("./Data/example/game_result_".$rnd.".csv");
    foreach($result as $value)
    {
        echo "<option value='".$value[1]."'>".$value[0]."</option>";
    }
    echo "
                        </select>
                        <input type='submit' value='送出' onClick=\"this.form.action='price.php';this.form.submit();\">
                        </font>
                    </div>

                </div>


            </div>
        </form>
    ";
    if($_POST['resource1']!="")
    {
        $NT = (float)$_POST['resource1']*30;
        echo "<script>alert('此玩家45天預測課金額為 $".(int)$NT." NT')</script>";
    }

    echo "<div class='frame' style='text-align:center; height:400px;'>";
      echo "<iframe src='./Data/example/game_test_".$rnd.".htm' width='90%' height='100%' frameborder='0' scrolling='no'> </iframe>";
    echo"</div>";
?>


  <!--footer-->
  <footer id="footer">
   <div class="container">
     <div class="footer-content">
       <p>Original data is from Datacastle.All Rights Reserved by tap4fun.</p>
     </div>
   </div>

</body>
</html>
