<!doctype html>
<html class="no-js">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="VPS产品库存监控">
  <meta name="keywords" content="VPS产品库存监控">
  <meta name="viewport"
        content="width=device-width, initial-scale=1">
  <title>VPS库存监控 - 风之翼灵 www.fungj.com</title>

  <!-- Set render engine for 360 browser -->
  <meta name="renderer" content="webkit">

  <!-- No Baidu Siteapp-->
  <meta http-equiv="Cache-Control" content="no-siteapp"/>

  <link rel="stylesheet" href="./css/amazeui.min.css">
  <link rel="stylesheet" href="./css/app.css"></head>
<body>
  <div class="am-g am-g-fixed am-margin-top">
    <div class="am-u-sm-12">
      <h1>VPS库存监控</h1>
      <p>请查看您感兴趣的VPS产品存库哟，如需要其他商家的VPS监控信息，请告诉我 office#fungj.com</p>
    </div>
  </div>
  <br />
  <div class="am-g am-g-fixed">
    <table class="am-table am-table-striped am-table-hover">
      <thead>
        <tr>
          <th>商家</th>
          <th>VPS型号</th>
          <th>VPS信息</th>
          <th>库存</th>
          <th>更新时间</th>
          <th>操作</th>
        </tr>
      </thead>
      <tbody>
<?php
include 'mysql.php';
$db = new mysql;
$dbinfo = $db->db();
foreach ($dbinfo as $key => $value) {
	echo '<tr>';
	echo "<td>{$value['sellername']}</td>";
	echo "<td>{$value['vpstitle']}</td>";
	echo "<td>{$value['vpsinfo']}</td>";
	if ($value['state'] == '0') {
		echo '<td><span class="am-badge am-badge-success am-radius">有货</span></td>';
	} elseif ($value['state'] == '1') {
		echo '<td><span class="am-badge am-badge-warning am-radius">缺货</span></td>';
	}
	echo "<td>{$value['uptime']}</td>";
	echo "<td><a class='am-badge am-badge-primary am-round' target=\"_top\" href=\"{$value['buylink']}\">购买</a> <a class='am-badge am-badge-success am-round' href=\"#\">订阅</a></td>";
	echo '</tr>';
}
?>
      </tbody>
    </table>
  </div>
  <footer data-am-widget="footer"
          class="am-footer am-footer-default"
           data-am-footer="{  }">
    <div class="am-footer-miscs ">

      <p>
        由
        <a href="https://www.fungj.com/" title="风之翼灵"
                                                target="_blank" class="">风之翼灵</a>
        开发
      </p>
      <p>CopyRight©2017  Fungj.com</p>
      <p>滇ICP备06001881号-2</p>
    </div>
  </footer>
  <!--[if (gte IE 9)|!(IE)]>
  <!-->
  <!--<![endif]-->
  <!--[if lte IE 8 ]>
  <script src="http://libs.baidu.com/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js"></script>
  <script src="assets/js/amazeui.ie8polyfill.min.js"></script>
  <![endif]-->
  <script src="./js/amazeui.min.js"></script>
</body>
</html>