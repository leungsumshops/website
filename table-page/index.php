<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>CSV to HTML Table</title>
    <meta name="author" content="Derek Eder">
    <meta content="Display any CSV file as a searchable, filterable, pretty HTML table" />

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/dataTables.bootstrap.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script type="text/javascript" src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script type="text/javascript" src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
      <div>
        <ul class="nav navbar-nav">
      <?
      $HKdistrict = array("北角","堅尼地城","中環","上環","西灣河","西環","灣仔","太古康怡","銅鑼灣","太古","西營盤","太古城","筲箕灣","鴨脷洲","小西灣","炮台山","鰂魚涌","大坑","跑馬地","黃竹坑","柴灣","天后","金鐘","香港大學");
      $KLdistrict = array("佐敦","九龍城","南昌","九龍灣","九龍塘","土瓜灣","何文田","旺角","深水埗","尖沙咀","鑽石山","油麻地","大角咀","太子","樂富","黃大仙","藍田","尖沙嘴","觀塘","荔枝角","美孚","紅磡","新蒲崗","奧運","長沙灣","牛頭角","黃埔","柯士甸","石硤尾","慈雲山");
      $NTdistrict = array("上水","元朗","大埔","將軍澳","屯門","荃灣","青衣","馬鞍山","沙田","葵芳","葵涌","粉嶺","東涌","錦田","西貢","大嶼山","天水圍","葵興","大圍","南丫島","太和","荔枝角","深水埗","火炭","荃灣西","石門","洪水橋","沙田圍","寶琳","深井");
      $typearray = array ("Online shop","飲食","零售","手機維修","補習","手作工作室","出版","醫療","媒體","旅遊","運輸","出版社","汽車美容","飲食 (月餅）","美容","工藝","飲品批發","飲食(拉麵)","飲食 (咖啡店)","健身","髮型屋","派對場地","電腦零售","飲食 (西餐/咖啡店)");
      echo '<li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    香港 
                    <b class="caret"></b>
                </a>
                <ul class="dropdown-menu">';
      clicktosearch($HKdistrict);
      echo '</ul>
            </li>';
      echo '<li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    九龍 
                    <b class="caret"></b>
                </a>
                <ul class="dropdown-menu">';
      clicktosearch($KLdistrict);
      echo '</ul>
            </li>';
      echo '<li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    新界 
                    <b class="caret"></b>
                </a>
                <ul class="dropdown-menu">';
      clicktosearch($NTdistrict);
      echo '</ul>
            </li>';
      echo '<li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    類型 
                    <b class="caret"></b>
                </a>
                <ul class="dropdown-menu">';
      clicktosearch($typearray);
      echo '</ul>
            </li>';
      /*echo "</td></tr><tr><td>九龍:</td><td>";
      clicktosearch($KLdistrict);
      echo "</td></tr><tr><td>新界:</td><td>";
      clicktosearch($NTdistrict);
      echo "</td></tr><tr><td>類型:</td><td>";
      clicktosearch($typearray);
      echo "</td></tr></table>";*/
      
      function clicktosearch($array){
        foreach ($array as $key){
          echo '<li id="'.$key.'key"><a href="#">'.$key.'</a></li>';
        //echo '<input type="button" value="'.$key.'" id="'.$key.'" />​';
        echo '<script type="text/javascript">';
        echo "
            document.getElementById('".$key."key').addEventListener('click', function () {
            document.getElementById('search').focus();
            var text = document.getElementById('search');
            text.value += '".$key." ';
        });
        </script>";
        }
      }
      ?>
        </ul>
    </div>
    
      <br><p>(選擇後請按Enter搜尋)</p><br><br>
    <div class="container-fluid">

     <!--  <h2>Leungsumshopslist</h2>-->

      <!--<p>Display any CSV file as a searchable, filterable, pretty HTML table. Done in 100% JavaScript. <a href='https://github.com/derekeder/csv-to-html-table'>Code on GitHub</a>.</p>-->

      <!-- <p>Database from  <a href='https://t.me/hkgoodfirms812'>香港良心米之連頻道</a>.</p>-->

      <div id='table-container'></div>

    </div><!-- /.container -->

    <!-- <footer class='footer'>
      <div class='container-fluid'>
        <hr />
        <p class='pull-right'><a href='https://github.com/derekeder/csv-to-html-table'>CSV to HTML Table</a> by <a href='http://derekeder.com'>Derek Eder</a></p>
      </div>
    </footer>-->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.csv.min.js"></script>
    <script type="text/javascript" src="js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="js/dataTables.bootstrap.js"></script>
    <script type="text/javascript" src="js/csv_to_html_table.js"></script>


    <script type="text/javascript">
      function format_link(link){
        if (link)
          return link;
        else
          return "";
      }

      CsvToHtmlTable.init({
        csv_path: 'https://docs.google.com/spreadsheets/d/e/2PACX-1vRTAznAByEh82swodDfuXpKO7Byqlw3TlB4DDaVGM7Na7zvatSRbknZC5l539IH5i1Fe27uO1TT1Z27/pub?gid=0&single=true&output=csv',
        element: 'table-container', 
        allow_download: false,
        csv_options: {separator: ',', delimiter: '"'},
        datatables_options: {"paging": true},
        custom_formatting: [[4, format_link]]
      });
    </script>
  </body>
</html>
