<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>关于我们_来院路线_北京昌平优贝口腔-全国连锁</title>
  <link rel="stylesheet" href="./css/common.css"> <!-- 初始化 -->
  <link rel="stylesheet" href="./css/lxwm/lxwm.css">

  <script src="./js/flexible.js"></script>
  <script src="https://api.map.baidu.com/api?ak=X2455as78Q7aVDj5nWMRKBLKWly7pWdq&v=2.0&services=false"></script> <!-- 百度api -->
  <script src="./js/jquery-3.5.1.min.js"></script>
</head>

<body>

  <!-- 头部 logo -->
  <?php include './public/header.php'; ?>

  <!-- 版心 -->
  <div class="banner">
    <img src="./images/lxwm/banner.png" alt="">
  </div>


  <!-- 导航栏 -->
  <?php include './public/nav.php'; ?>

  <!-- 内容区域 -->
  <div class="con">

    <!-- 项目列表 -->
    <?php include './public/project.php'; ?>
    <div class="title"><h3>— 来院路线 —</h3></div>

    <!-- 地址详情 -->
    <div class="details">
      <div class="fl_img">
        <img src="./images/lxwm/yy.jpg" alt="">
      </div>

      <div class="fr_text">
        <h2>北京优贝口腔</h2>
        <p><strong>电话:</strong>400-1671818</p>
        <p><strong>地址:</strong>优贝口腔南环中路24号</p>
        <p><strong>公交路线:</strong> 345路&nbsp;&nbsp;357路&nbsp;&nbsp;559路&nbsp;&nbsp;885路</p>

      </div>
    </div>

    <!-- 导航到店按钮 -->
    <div class="btn">
      <a href="#"><span></span>点击咨询</a>
      <a href="http://api.map.baidu.com/geocoder?address=北京优贝口腔(昌平旗舰店)&output=html&src=webapp.baidu.openAPIdemo"><span></span>点击导航到店</a>
      <!-- <a href="http://api.map.baidu.com/marker?location=40.218111,116.238067&title=目的位置&content=北京优贝口腔(昌平旗舰店)&output=html"><span></span>点击导航到店</a> -->
    </div>

    <!-- 地图导航 -->
    <section class="map">
      <div id="allmap"></div>
    </section>

  </div>

  <!-- 底部 -->
  <?php include './public/footer.php'; ?>

  <script type="text/javascript">

      // 百度地图API功能
      var map = new BMap.Map("allmap"); // 创建Map实例
      var point = new BMap.Point(116.238067, 40.218111);
      map.centerAndZoom(point, 16);


      // 向地图添加标注
      var myIcon = new BMap.Icon("https://api.map.baidu.com/images/marker_red_sprite.png", new BMap.Size(23, 25));
      // 创建标注对象并添加到地图 
      var marker = new BMap.Marker(point, {
        icon: myIcon
      });
      map.addOverlay(marker);

      marker.setAnimation(BMAP_ANIMATION_BOUNCE); //跳动的动画

      // var marker = new BMap.Marker(point);  // 创建标注
      // map.addOverlay(marker);               // 将标注添加到地图中
      // marker.setAnimation(BMAP_ANIMATION_BOUNCE); //跳动的动画



      var sContent_01 =
        `<h4 class="map_h4">北京博爱口腔</h4>` + 
        `<p class="map_p"><span class="map_span_01">地址：</span>（通顺路店）</p>` + 
        `<p class="map_p"><span class="map_span_01">公交路线：</span>345路&nbsp;&nbsp;357路&nbsp;&nbsp;559路&nbsp;&nbsp;885路</p>` + 
        `<p class="map_p"><span class="map_span_01">热线咨询电话：</span><span class="map_span">(010)-56193353</span></p`;


        var infoWindow = new BMap.InfoWindow(sContent_01);  // 创建信息窗口对象
        map.openInfoWindow(infoWindow, map.getCenter()); // 打开信息窗口
        map.openInfoWindow(infoWindow,point); //开启信息窗口


      //添加地图类型控件
      map.addControl(new BMap.MapTypeControl({
        mapTypes: [BMAP_NORMAL_MAP,
          BMAP_HYBRID_MAP
        ]
      }));
      map.setCurrentCity("北京"); // 设置地图显示的城市 此项是必须设置的
      map.enableScrollWheelZoom(true); //开启鼠标滚轮缩放



  </script>


</body>

</html>