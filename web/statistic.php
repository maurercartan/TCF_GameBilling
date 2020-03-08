<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>敘述統計</title>
  <link rel="stylesheet" href="css/trycss.css">
<script src="https://www.amcharts.com/lib/3/amcharts.js"></script>
<script src="https://www.amcharts.com/lib/3/pie.js"></script>
<script src="https://www.amcharts.com/lib/3/plugins/export/export.min.js"></script>
<link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
<script src="https://www.amcharts.com/lib/3/themes/light.js"></script>
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
  <!-- One -->
    <section id="one" class="wrapper style2">
      <div class="inner">
        <div class="grid-style">

          <div>
            <div class="box">
              <div class="image fit">
                <div id="chartdiv">
                  <script>
                  var chart = AmCharts.makeChart( "chartdiv", {
                    "type": "pie",
                    "theme": "light",
                    "dataProvider": [ {
                      "country": "A",
                      "value": 10
                    }, {
                      "country": "B",
                      "value": 25
                    }, {
                      "country": "C",
                      "value": 65
                    }],
                      "valueField": "value",
                      "titleField": "country",
                      "outlineAlpha": 0.4,
                        "depth3D": 15,
                        "balloonText": "[[title]]<br><span style='font-size:14px'><b>[[value]]</b> ([[percents]]%)</span>",
                        "angle": 30,
                        "export": {
                          "enabled": true
                        }
                      });</script>
                </div>
              </div>
              <div class="content">
                <heeder class="align-center">
                  <h3>圖1:課金玩家分群人數比例圖</h3>
                  <p style="font-size: 17px;">母群體:0-45天課金玩家總人數</p>
                  <p style="font-size: 17px;">A區域:7日內無課金但8-45日課金 佔總課金玩家人數10%</p>
                  <p style="font-size: 17px;">B區域：7日內有課金且8-45日持續課金 佔總課金玩家人數25%</p>
                  <p style="font-size: 17px;">C區域：7日內有課金但8-45日無課金 佔總課金玩家人數65%</p>
                </heeder>
                <feeter class="align-center">
                </feeter>
              </div>
            </div>
          </div>


          <div>
            <div class="box">
              <div class="image fit">
                <iframe src="piechart.html" width="500" height="450" frameborder="0" scrolling="no"></iframe>
              </div>
              <heeder class="align-center">
              <h3>圖2:課金玩家分群課金量比例圖</h3>
              <p style="font-size: 17px;">母群體:0-45天所有課金玩家課金量</p>
              <p style="font-size: 17px;">A區域：7日內及8-45日皆有課金玩家課金量 佔總課金量87%</p>
              <p style="font-size: 17px;">B區域：7日內有課金但8-45日無課金玩家課金量 佔總課金量8%</p>
              <p style="font-size: 17px;">C區域：7日內無課金但8-45日有課金玩家課金量 佔總課金量5%</p>
              <hr>
              <p style="padding-bottom:35px; font-size: 17px;">綜合圖1及圖2結果可得知7日內及8-45日皆有課金玩家課金量雖只佔總人數之25%課金額卻達到總課金量之87%</p>
              </heeder>
              </div>
            </div>
          </div>


          <div>
            <div class="box">
              <div class="image fit">
                <iframe src="registerdate.html" width="100%" height="500" frameborder="0" scrolling="no"></iframe>
              </div>
              <div class="content">
                <heeder class="align-center">
                  <h3>圖3:玩家註冊人數與時間關係圖</h3>
                </heeder>
                  <p style="text-align:center;  font-size: 17px;">母群體時間:2018/1/26-2018/3/6</p>
                  <p style="text-align:center;  font-size: 17px;">於2月19日有大量玩家註冊→中國寒假開始</p>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>
    <!--footer-->
    <footer id="footer">
     <div class="container">
       <div class="footer-content">
         <p>Original data is from Datacastle.All Rights Reserved by tap4fun.</p>
       </div>
     </div>

</body>
</html>
