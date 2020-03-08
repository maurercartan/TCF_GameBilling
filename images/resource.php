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


        /*
        echo "var links = [{source: '".$php_array[0][0]."', target: '".$php_array[0][1]."', type: 'licensing'},
                           {source: '".$php_array[1][0]."', target: '".$php_array[1][1]."', type: 'licensing'},
                           {source: '".$php_array[2][0]."', target: '".$php_array[2][1]."', type: 'licensing'},
                           {source: '".$php_array[3][0]."', target: '".$php_array[3][1]."', type: 'licensing'}
                          ];";
        */
        $links = "";
        foreach($php_array as $value)
        {
            $links = $links."{source: '".$value[0]."', target: '".$value[1]."', type: 'licensing'},";
        }
        $links = trim($links,",");
        echo "var links = [".$links."];";

        echo "var nodes = {};";

        // Compute the distinct nodes from the links.
        echo "links.forEach(function(link) {
                link.source = nodes[link.source] || (nodes[link.source] = {name: link.source});
                link.target = nodes[link.target] || (nodes[link.target] = {name: link.target});
              });";

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

    function D3JS_2($php_array,$key)
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


        /*
        echo "var links = [{source: '".$php_array[0][0]."', target: '".$php_array[0][1]."', type: 'licensing'},
                           {source: '".$php_array[1][0]."', target: '".$php_array[1][1]."', type: 'licensing'},
                           {source: '".$php_array[2][0]."', target: '".$php_array[2][1]."', type: 'licensing'},
                           {source: '".$php_array[3][0]."', target: '".$php_array[3][1]."', type: 'licensing'}
                          ];";
        */
        $links = "";
        foreach($php_array as $value)
        {
            $links = $links."{source: '".$key."', target: '".$value."', type: 'licensing'},";
        }
        $links = trim($links,",");
        echo "var links = [".$links."];";

        echo "var nodes = {};";

        // Compute the distinct nodes from the links.
        echo "links.forEach(function(link) {
                link.source = nodes[link.source] || (nodes[link.source] = {name: link.source});
                link.target = nodes[link.target] || (nodes[link.target] = {name: link.target});
              });";

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

    function read_csv2array($csvFile)
    {
        $result = array();

        $fp = fopen($csvFile, "r");
        while (($data = fgetcsv($fp, 1000, ",")) !== FALSE) {
            array_push($result,$data);
        }
        return $result;
    }

    function read_csv2dict($csvFile)
    {
        $result = array();

        $fp = fopen($csvFile, "r");
        while (($data = fgetcsv($fp, 1000, ",")) !== FALSE) {
            //array_push($result,$data);
            //$result[$data[0]] = $data[1];
            $result[$data[0]][count($result[$data[0]])] = $data[1];
        }
        return $result;
    }

    function Select_JS($FormName,$SelectName1,$SelectName2,$Select_List)
    {
        echo "
            <script type='text/javascript'>

            (function() {
            function removeAllOptions(sel, removeGrp) {
                var len, groups, par;
                if (removeGrp) {
                    groups = sel.getElementsByTagName('optgroup');
                    len = groups.length;
                    for (var i=len; i; i--) {
                        sel.removeChild( groups[i-1] );
                    }
                }

                len = sel.options.length;
                for (var i=len; i; i--) {
                    par = sel.options[i-1].parentNode;
                    par.removeChild( sel.options[i-1] );
                }
            }

            function appendDataToSelect(sel, obj) {
                var f = document.createDocumentFragment();
                var labels = [], group, opts;

                function addOptions(obj) {
                    var f = document.createDocumentFragment();
                    var o;

                    for (var i=0, len=obj.text.length; i<len; i++) {
                        o = document.createElement('option');
                        o.appendChild( document.createTextNode( obj.text[i] ) );

                        if ( obj.value ) {
                            o.value = obj.value[i];
                        }

                        f.appendChild(o);
                    }
                    return f;
                }

                if ( obj.text ) {
                    opts = addOptions(obj);
                    f.appendChild(opts);
                } else {
                    for ( var prop in obj ) {
                        if ( obj.hasOwnProperty(prop) ) {
                            labels.push(prop);
                        }
                    }

                    for (var i=0, len=labels.length; i<len; i++) {
                        group = document.createElement('optgroup');
                        group.label = labels[i];
                        f.appendChild(group);
                        opts = addOptions(obj[ labels[i] ] );
                        group.appendChild(opts);
                    }
                }
                sel.appendChild(f);
            }

            // anonymous function assigned to onchange event of controlling select list
            document.forms['".$FormName."'].elements['".$SelectName1."'].onchange = function(e) {
                // name of associated select list
                var relName = '".$SelectName2."';

                // reference to associated select list
                var relList = this.form.elements[ relName ];

                // get data from object literal based on selection in controlling select list (this.value)
                var obj = Select_List_Data[ relName ][ this.value ];

                // remove current option elements
                removeAllOptions(relList, true);

                // call function to add optgroup/option elements
                // pass reference to associated select list and data for new options
                appendDataToSelect(relList, obj);
            };

            // object literal holds data for optgroup/option elements
            var Select_List_Data = {

                '".$SelectName2."': { // name of associated select list

                    // names match option values in controlling select list
                    ".$Select_List[0].": {
                        text: [
                            '建築：魔法幸運樹等級',
                            '科研：訓練速度等級',
                            '建築：治療之泉等級',
                            '建築：瞭望塔等級',
                            '科研：偵查等級',
                            '建築：冒險傳送門等級',
                            '建築：兵營等級',
                            '建築：倉庫等級',
                            '科研：肉類生產',
                            '科研：馴獸師攻擊',
                            '科研：據點二',
                            '科研：守護者',
                            '建築：占卜台等級',
                            '科研：吟唱者',
                            '主動發起PVE次數',
                            '科研：巨獸馴獸師',
                            '建築：士兵小屋等級',
                            '建築：祭壇等級',
                            '建築：據點傳送門等級',
                            '科研：勇士攻擊',
                            '建築：智慧神廟等級',
                            '建築：要塞等級',
                            '建築：聯盟貨車等級',
                            '科研：建造速度',
                            '科研：醫院容量',
                            '科研：領土採集獎勵',
                            '建築：治療小井等級',
                            'PVE次數',
                            '建築：聯盟大廳等級']
                        //,value: ['scroll', 'tooltips', 'rotate', 'scrollers', 'banner']
                    },
                    ".$Select_List[1].": {
                        text: [
                            '建築：治療之泉等級',
                            '建築：智慧神廟等級',
                            '建築：瞭望塔等級',
                            '建築加速獲取數量',
                            '建築：據點傳送門等級',
                            '建築：倉庫等級']
                        //,value: ['random', 'form', 'table', 'order']
                    },
                    ".$Select_List[2].": {
                        text: [
                            '建築：戰爭大廳等級',
                            '科研：治療速度',
                            '主動發起PVE次數',
                            '科研：資源保護',
                            '科研：部隊消耗',
                            '建築：治療之泉等級',
                            '建築：聯盟貨車等級',
                            '建築：祭壇等級',
                            'PVE勝利次數',
                            '建築：瞭望塔等級',
                            '建築：智慧神廟等級',
                            '科研：訓練速度等級',
                            '建築：魔法幸運樹等級',
                            '建築：冒險傳送門等級',
                            '建築：占卜台等級',
                            '建築：兵營等級',
                            '科研：巨獸馴獸師',
                            '科研：守護者',
                            '建築：治療小井等級',
                            '建築：聯盟大廳等級',
                            '建築：要塞等級',
                            '科研：據點二',
                            '建築：倉庫等級',
                            'PVE次數',
                            '科研：吟唱者',
                            '建築：士兵小屋等級',
                            '建築：據點傳送門等級']
                    },
                    ".$Select_List[3].": {
                        text: [
                            '建築：智慧神廟等級',
                            '建築：要塞等級',
                            '建築：瞭望塔等級',
                            '建築加速獲取數量',
                            '建築：倉庫等級',
                            '建築：士兵小屋等級',
                            '建築：治療之泉等級']
                    },
                    ".$Select_List[4].": {
                        text: [
                            '建築：戰爭大廳等級',
                            '科研：馴獸師攻擊',
                            '科研：據點耐久',
                            '主動發起PVE次數',
                            '建築：治療之泉等級',
                            '建築：聯盟貨車等級',
                            '建築：祭壇等級',
                            'PVE勝利次數',
                            '建築：瞭望塔等級',
                            '科研：勇士攻擊',
                            '科研：建造速度',
                            '建築：智慧神廟等級',
                            '科研：偵查等級',
                            '科研：訓練速度等級',
                            '建築：魔法幸運樹等級',
                            '建築：冒險傳送門等級',
                            '建築：占卜台等級',
                            '建築：兵營等級',
                            '科研：巨獸馴獸師',
                            '科研：守護者',
                            '建築：治療小井等級',
                            '建築：聯盟大廳等級',
                            '科研：據點二',
                            '建築：要塞等級',
                            '建築：倉庫等級',
                            '科研：領土採集獎勵',
                            'PVE次數',
                            '科研：吟唱者',
                            '建築：士兵小屋等級',
                            '建築：據點傳送門等級']
                    },
                    ".$Select_List[5].": {
                        text: [
                            '魔法消耗數量',
                            '科研加速獲取數量',
                            '建築：治療之泉等級',
                            '建築：聯盟貨車等級',
                            '建築：瞭望塔等級',
                            '建築：智慧神廟等級',
                            '科研：訓練速度等級',
                            '建築：魔法幸運樹等級',
                            '建築：冒險傳送門等級',
                            '魔法獲取數量',
                            '建築：占卜台等級',
                            '建築：兵營等級',
                            '科研：巨獸馴獸師',
                            '科研：守護者',
                            '建築：治療小井等級',
                            '建築：聯盟大廳等級',
                            '科研：據點二',
                            '建築：要塞等級',
                            '建築加速獲取數量',
                            '建築：倉庫等級',
                            '治療加速獲取數量',
                            '科研：吟唱者',
                            '建築：士兵小屋等級',
                            '建築：據點傳送門等級']
                    },
                    ".$Select_List[6].": {
                        text: [
                            '魔法消耗數量',
                            '線上時長',
                            '通用加速使用數量',
                            '科研：肉類生產',
                            '主動發起PVE次數',
                            '科研加速獲取數量',
                            '石頭消耗數量',
                            '建築：治療之泉等級',
                            '建築：祭壇等級',
                            '建築：聯盟貨車等級',
                            'PVE勝利次數',
                            '建築：瞭望塔等級',
                            '肉獲取數量',
                            '肉消耗數量',
                            '象牙獲取數量',
                            '建築：智慧神廟等級',
                            '建築加速使用數量',
                            '科研：偵查等級',
                            '科研：訓練速度等級',
                            '木頭獲取數量',
                            '建築：魔法幸運樹等級',
                            '建築：冒險傳送門等級',
                            '魔法獲取數量',
                            '建築：占卜台等級',
                            '建築：兵營等級',
                            '科研：巨獸馴獸師',
                            '木頭消耗數量',
                            '科研：守護者',
                            '建築：治療小井等級',
                            '建築：要塞等級',
                            '科研：據點二',
                            '通用加速獲取數量',
                            '建築：聯盟大廳等級',
                            '建築加速獲取數量',
                            '治療加速獲取數量',
                            '科研：領土採集獎勵',
                            'PVE次數',
                            '建築：倉庫等級',
                            '科研：吟唱者',
                            '訓練加速獲取數量',
                            '建築：士兵小屋等級',
                            '建築：據點傳送門等級',
                            '石頭獲取數量']
                    },
                    ".$Select_List[7].": {
                        text: [
                            '建築：倉庫等級',
                            '建築：智慧神廟等級',
                            '建築：治療之泉等級']
                    }

                }

            };


            // already removed from global namespace
            //(function() {

                var form = document.forms['".$FormName."'];

                // reference to controlling select list
                var sel = form.elements['".$SelectName1."'];
                //sel.selectedIndex = 0;

                // name of associated select list
                var relName = '".$SelectName2."';
                // reference to associated select list
                var rel = form.elements[ relName ];

                // get data for associated select list passing its name
                // and value of selected in controlling select list
                var data = Select_List_Data[ relName ][ sel.value ];

                // add options to associated select list
                appendDataToSelect(rel, data);

            }());
            </script>
        ";
    }

    function Keep_Select_Option($select,$option)
    {
        $result = "";
        if ($select == $option)
        {
            $result = "selected='selected'";
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
<?php
    echo "<form method='post' id='myForm'>";
    echo "<div class='resourcesystem'>";
        echo "<h1>遊戲內容關聯推薦系統</h1>";
        echo "<p>為引導玩家遵照最佳課金關鍵資源路線，尋找目標資源之關聯</p>";
        echo "<p>以下拉式選單選取目標玩家族群，參照決策樹之關聯資源路徑節點取得關聯資源</p>";
        echo "<hr>";
        echo "<hr>";
        echo "<div class='resourceform'>";
            echo "<div class='formdis1'>";
            echo "<p>玩家分類：</p>";

            echo "<select name='resource1'>";
            echo "<option value='recourcea' ".Keep_Select_Option($_POST['resource1'],'recourcea').">0-7天有付費</option>";
            echo "<option value='recourceb' ".Keep_Select_Option($_POST['resource1'],'recourceb').">0-7天沒付費</option>";
            echo "<option value='recourcec' ".Keep_Select_Option($_POST['resource1'],'recourcec').">8-45天有付費</option>";
            echo "<option value='recourced' ".Keep_Select_Option($_POST['resource1'],'recourced').">8-45天沒付費</option>";
            echo "<option value='recourcee' ".Keep_Select_Option($_POST['resource1'],'recourcee').">TT</option>";
            echo "<option value='recourcef' ".Keep_Select_Option($_POST['resource1'],'recourcef').">TF</option>";
            echo "<option value='recourceg' ".Keep_Select_Option($_POST['resource1'],'recourceg').">FT</option>";
            echo "<option value='recourceh' ".Keep_Select_Option($_POST['resource1'],'recourceh').">FF</option>";
            echo "</select>";
            echo "</div>";

            echo "<div class='formdis1'>";
            echo "<p>目標資源：</p>";
            echo "<select name='resource2'>";
            echo "</select>";
            echo "</div>";



            echo "<div class='formbutton'>";
            echo "<input type=\"submit\" value='我是按鈕' onClick=\"this.form.action='#bottom';this.form.submit();\">";
            echo "</div>";
        echo "</div>";
    echo "</div>";
    echo "</form>";

    /*
    if($_POST['resource1']!="" &&
       $_POST['resource2']!="" &&
       $_POST['resource3']!="" &&
       $_POST['resource4']!="")
    {
        echo $_POST['resource1']."...".$_POST['resource2']."...".$_POST['resource3']."...".$_POST['resource4'];
    }
    */

    if($_POST['resource1']=="recourcea")
    {
        $php_array = read_csv2dict("./Data/0_7_day/chinese_pay_0_7_3.csv");
        D3JS_2($php_array[$_POST['resource2']],$_POST['resource2']);
    }
    else if($_POST['resource1']=="recourceb")
    {
        $php_array = read_csv2dict("./Data/0_7_day/chinese_not_pay_0_7_3.csv");
        D3JS_2($php_array[$_POST['resource2']],$_POST['resource2']);
    }
    else if($_POST['resource1']=="recourcec")
    {
        $php_array = read_csv2dict("./Data/8_45_day/chinese_pay_8_45_3.csv");
        D3JS_2($php_array[$_POST['resource2']],$_POST['resource2']);
    }
    else if($_POST['resource1']=="recourced")
    {
        $php_array = read_csv2dict("./Data/8_45_day/chinese_not_pay_8_45_3.csv");
        D3JS_2($php_array[$_POST['resource2']],$_POST['resource2']);
    }
    else if($_POST['resource1']=="recourcee")
    {
        $php_array = read_csv2dict("./Data/TT_TF/chinese_TT_3.csv");
        D3JS_2($php_array[$_POST['resource2']],$_POST['resource2']);
    }
    else if($_POST['resource1']=="recourcef")
    {
        $php_array = read_csv2dict("./Data/TT_TF/chinese_TF_3.csv");
        D3JS_2($php_array[$_POST['resource2']],$_POST['resource2']);
    }
    else if($_POST['resource1']=="recourceg")
    {
        $php_array = read_csv2dict("./Data/FT_FF/chinese_FT_3.csv");
        D3JS_2($php_array[$_POST['resource2']],$_POST['resource2']);
    }
    else if($_POST['resource1']=="recourceh")
    {
        $php_array = read_csv2dict("./Data/FT_FF/chinese_FF_3.csv");
        D3JS_2($php_array[$_POST['resource2']],$_POST['resource2']);
    }
    else
    {
        $php_array = read_csv2dict("./Data/chinese_pay_0_7.csv");
        D3JS_2($php_array['建築：魔法幸運樹等級'],'建築：魔法幸運樹等級');
    }

    $Select_List = array('recourcea',
                         'recourceb',
                         'recourcec',
                         'recourced',
                         'recourcee',
                         'recourcef',
                         'recourceg',
                         'recourceh');
    Select_JS("myForm","resource1","resource2",$Select_List);
    echo "<a name='bottom'></a>";
?>

<script type="text/javascript">
  document.getElementById('resource1').value = "<?php echo $_GET['resource1'];?>";
</script>

</body>
</html>
