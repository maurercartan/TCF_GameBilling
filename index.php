<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>專題主頁</title>
  <link rel="stylesheet" href="css/style.css">
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
</section>
<section class="about_me clearfix">
    <div class="container">
      <h2>專案內容說明</h2>

      <div class="summary">
        <div class="col-left">
          <div class="avatar">
            <iframe src="indexchart.html" width="500" height="500" frameborder="0" scrolling="no"></iframe>
          <!--  <img src="images/new.png" alt="avatar">-->
            </div>
        </div>

        <div class="col-right">
          <div class="personal-info">
            <h3>專題目的</h3>
            <p style="font-size:16px;">　　根據韓國手遊推廣企業ADWAYS於2016年7月發布之報告，不區分遊戲類型的調查，以2015年為基準，手遊壽命為25週。這項調查是從2011年開始。根據調查結果，2011年~2012年平均壽命為190週。2013年平均壽命為116週，2014年平均壽命為47週，2015年平均壽命為25週。</p>
            <p style="font-size:16px;">　　由於手機遊戲生命週期的縮短，手機產業日漸速食化，因此，手機遊戲如何在短暫的生命週期之中獲得最大利益是重要的課題。</p>
            <p style="font-size:16px;">　　本專案將以野蠻時代(Brutal age)為例，由玩家進入遊戲初期的數據進行分析，預測玩家的價值，找出玩家課金的決策因子，以進行精準行銷，精確地投放廣告及營運活動，創造個性化的遊戲體驗與最大化的收益。</p>
            <h3>關於Brutal age</h3>
            <p style="font-size:16px;">　　由成都尼畢魯科技股份有限公司(tap4fun)推出。根據App Annie統計，本遊戲在12個國家取得遊戲暢銷榜第1，在82個國家取得遊戲暢銷榜前10，是一款具有代表性的SLG類型手機遊戲。</p>
          </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- What I Offer -->

 <section class="my_service">
   <div class="container">
     <h2>系統內容說明</h2>

     <div class="service-items">
       <div class="service-content" style="width:50%;">
         <i class="fa fa-html5" aria-hidden="true"></i>
         <h3>玩家課金額預測系統</h3>
         <p>玩家前7天數據預測45天時課金總額</p>
         <div class="button-group">
           <div class="download_cv">
             <a href="price.php">課金額預測</a>
           </div>
         </div>
       </div>
       <div class="service-content" style="width:50%;">
         <i class="fa fa-css3" aria-hidden="true"></i>
         <h3>精準行銷決策樹</h3>
         <p>關鍵資源最佳路徑推薦</p>
         <div class="button-group">
           <div class="download_cv">
             <a href="system.php">精準行銷</a>
           </div>
         </div>
       </div>

      </div>
     </div>
 </section>
  <!-- Quote -->
  <section class="quotes">
    <div class="overlay"></div>
    <div class="container">
      <div class="quote-inner">
        <h3>      </h3>
        <p>  </p>
      </div>
    </div>
  </section>
  <!-- Latest Work -->
   <section class="works">
     <div class="container">
       <h2>敘述統計分析</h2>

       <div class="work-items" >
         <div class="col-work">
           <a href="statistic.php">
             <h2>課金玩家分群人數比例</h2>
             <iframe src="indexchart2.html" width="500" height="500" frameborder="0" scrolling="no"></iframe>
           </a>
         </div>

         <div class="col-work">
           <a href="statistic.php">
             <h2>課金玩家分群課金量比例</h2>
             <iframe src="piechart.html" width="500" height="500" frameborder="0" scrolling="no"></iframe>
           </a>
         </div>

           <a href="statistic.php">
             <h2 style="color:black;">玩家註冊人數與時間關係</h2>
             <iframe src="registerdate.html" width="100%" height="500" frameborder="0" scrolling="no"></iframe>
           </a>

       </div>
     </div>
   </section>
   <!-- Quote -->
   <section class="quotes">
     <div class="overlay"></div>
     <div class="container">
       <div class="quote-inner">
         <h3> </h3>
         <p> </p>
       </div>
     </div>
   </section>
<!-- Contact -->
<section class="contact">
 <div class="container">
   <h2>聯絡我們</h2>

   <div class="contact-form">
     <form action="">
       <div class="form-input">
         <input type="text" name="name" class="form-style" placeholder="input your name" required>
       </div>

       <div class="form-input">
         <input type="email" name="email" class="form-style" placeholder="enter your email" required>
       </div>

       <div class="form-input">
         <textarea name="textarea" id="message" cols="30" rows="10" placeholder="write message" required></textarea>
       </div>

       <div class="form-submit">
         <input type="submit" name="submit" value="submit">
       </div>
     </form>
   </div>
 </div>
</section>
<!-- Footer -->
<footer id="footer">
 <div class="container">
   <div class="footer-content">
     <p>Original data is from Datacastle.All Rights Reserved by tap4fun.</p>
   </div>
 </div>
</footer>
</body>
</html>
