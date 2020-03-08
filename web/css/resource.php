<?php
    error_reporting(0);    //隱藏報錯

    function D3JS($php_array)
    {
        echo "<div class='' style='display: block;margin: auto;text-align:center;'>";
        echo "<script src='http://d3js.org/d3.v3.min.js'></script>";
        echo "<script>";

        /*
        echo "var links = [";
        echo "  {source: 'Microsoft', target: 'Amazon', type: 'licensing'},";
        echo "  {source: 'Microsoft', target: 'HTC', type: 'licensing'},";
        echo "  {source: 'Samsung', target: 'Apple', type: 'suit'},";
        echo "  {source: 'Motorola', target: 'Apple', type: 'suit'},";
        echo "  {source: 'Nokia', target: 'Apple', type: 'resolved'},";
        echo "  {source: 'HTC', target: 'Apple', type: 'suit'},";
        echo "  {source: 'Kodak', target: 'Apple', type: 'suit'},";
        echo "  {source: 'Microsoft', target: 'Barnes & Noble', type: 'suit'},";
        echo "];";
        */



        echo "var links = [{source: '".$php_array[0][0]."', target: '".$php_array[0][1]."', type: 'licensing'},
                           {source: '".$php_array[1][0]."', target: '".$php_array[1][1]."', type: 'licensing'},
                           {source: '".$php_array[2][0]."', target: '".$php_array[2][1]."', type: 'licensing'},
                           {source: '".$php_array[3][0]."', target: '".$php_array[3][1]."', type: 'licensing'},
                          ];";

        echo "var nodes = {};";

        // Compute the distinct nodes from the links.
        echo "links.forEach(function(link) {";
        echo "  link.source = nodes[link.source] || (nodes[link.source] = {name: link.source});";
        echo "  link.target = nodes[link.target] || (nodes[link.target] = {name: link.target});";
        echo "});";

        echo "var width = 1000,height =300;";

        echo "var force = d3.layout.force()
                  .nodes(d3.values(nodes))
                  .links(links)
                  .size([width, height])
                  .linkDistance(60)
                  .charge(-300)
                  .on('tick', tick)
                  .start();";

        echo "var svg = d3.select('body').append('svg')
                  .attr('width', width)
                  .attr('height', height);";

        // Per-type markers, as they don't inherit styles.
        echo "svg.append('defs').selectAll('marker')
                  .data(['suit', 'licensing', 'resolved'])
                  .enter().append('marker')
                  .attr('id', function(d) { return d; })
                  .attr('viewBox', '0 -5 10 10')
                  .attr('refX', 15)
                  .attr('refY', -1.5)
                  .attr('markerWidth', 6)
                  .attr('markerHeight', 6)
                  .attr('orient', 'auto')
                  .append('path')
                  .attr('d', 'M0,-5L10,0L0,5');";

        echo "var path = svg.append('g').selectAll('path')
                  .data(force.links())
                  .enter().append('path')
                  .attr('class', function(d) { return 'link ' + d.type; })
                  .attr('marker-end', function(d) { return 'url(#' + d.type + ')'; });";

        echo "var circle = svg.append('g').selectAll('circle')
                  .data(force.nodes())
                  .enter().append('circle')
                  .attr('r', 6)
                  .call(force.drag);";

        echo "var text = svg.append('g').selectAll('text')
                  .data(force.nodes())
                  .enter().append('text')
                  .attr('x', 8)
                  .attr('y', '.31em')
                  .text(function(d) { return d.name; });";

        // Use elliptical arc path segments to doubly-encode directionality.
        echo "function tick() {
                path.attr('d', linkArc);
                circle.attr('transform', transform);
                text.attr('transform', transform);
              }";

        echo "function linkArc(d) {
                var dx = d.target.x - d.source.x,
                    dy = d.target.y - d.source.y,
                    dr = Math.sqrt(dx * dx + dy * dy);
                return 'M' + d.source.x + ',' + d.source.y + 'A' + dr + ',' + dr + ' 0 0,1 ' + d.target.x + ',' + d.target.y;
              }";

        echo "function transform(d) {
                return 'translate(' + d.x + ',' + d.y + ')';
              }";

        echo "</script>";
        echo "</div>";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>資源推薦</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <header id="header">
      <div class="container">
        <nav>


          <ul class="nav">
            <li><a href="index.php">報告主頁</a></li>
            <li><a href="system.php">精準行銷</a></li>
            <li><a href="resource.php">資源推薦</a></li>
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
<?php
    echo "<form method='post'>";
    echo "<div class='resourcesystem'>";
        echo "<h1>產品關聯推薦系統</h1>";
        echo "<p>持續推薦資源以提升玩家遊戲黏著度</p>";
        echo "<hr>";
        echo "<h1>下拉式選單系統</h1>";
        echo "<hr>";
        echo "<div class='resourceform'>";
            echo "<div class='formdis1'>";
            echo "<p>表格名稱</p>";
            echo "<select name='resource1'>";
            echo "<option value='recourcea'>recourceA</option>";
            echo "<option value='recourceb'>recourceB</option>";
            echo "</select>";
            echo "</div>";

            echo "<div class='formdis1'>";
            echo "<p>表格名稱</p>";
            echo "<select name='resource2'>";
            echo "<option value='recourcea'>recourceA</option>";
            echo "<option value='recourceb'>recourceB</option>";
            echo "</select>";
            echo "</div>";

            echo "<div class='formdis1'>";
            echo "<p>表格名稱</p>";
            echo "<select name='resource3'>";
            echo "<option value='recourcea'>recourceA</option>";
            echo "<option value='recourceb'>recourceB</option>";
            echo "</select>";
            echo "</div>";

            echo "<div class='formdis1'>";
            echo "<p>表格名稱</p>";
            echo "<select name='resource4'>";
            echo "<option value='recourcea'>recourceA</option>";
            echo "<option value='recourceb'>recourceB</option>";
            echo "</select>";
            echo "</div>";

            echo "<div class='formbutton'>";
            echo "<input type=\"submit\" value='我是按鈕' onClick=\"this.form.action='resource.php';this.form.submit();\">";
            echo "</div>";
        echo "</div>";
    echo "</div>";
    echo "</form>";
    if($_POST['resource1']!="" &&
       $_POST['resource2']!="" &&
       $_POST['resource3']!="" &&
       $_POST['resource4']!="")
    {
        echo $_POST['resource1']."...".$_POST['resource2']."...".$_POST['resource3']."...".$_POST['resource4'];
    }


    // D3JS
    $php_array = array(array("建築：智慧神廟等級", "建築：要塞等級"),
                       array("瞭望塔等級", "據點傳送門等級"),
                       array("士兵小屋等級", ),
                       array("", ""),
                       array("EEE", "FFF"));
    D3JS($php_array);
?>
</body>
</html>
