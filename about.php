<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>关于我们_优贝简介_北京昌平优贝口腔-全国连锁</title>
  <link rel="stylesheet" href="./css/common.css"> <!-- 初始化 -->
  <link rel="stylesheet" href="./css/swiper.min.css"> <!-- swiper -->
  <link rel="stylesheet" href="./css/about/about.css">

  <script src="./js/flexible.js"></script>
  <script src="./js/jquery-3.5.1.min.js"></script>
  <script src="./js/swiper.min.js"></script>
</head>

<body>

  <!-- 头部 logo -->
  <?php include './public/header.php'; ?>

  <!-- swiper 版心 -->
  <div class="swiper">
    <div class="swiper-container top_swiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide"><img src="./images/about/banner_01.jpg" alt=""></div>
        <div class="swiper-slide"><img src="./images/about/banner_02.jpg" alt=""></div>
      </div>
      <!-- Add Pagination -->
      <div class="swiper-pagination"></div>
    </div>
  </div>

  <!-- 导航栏 -->
  <?php include './public/nav.php'; ?>

  <!-- 内容区域 -->
  <div class="con">

    <!-- 项目列表 -->
    <?php include './public/project.php'; ?>

    <!-- 医院介绍 文章 -->
    <div class="text">
      <div class="text_box">
         <h3>— 优贝口腔 —</h3>
         <p>北京良乡优贝口腔门诊部有限公司是标准的数字化智能齿科连锁机构，集医疗、科研、美容、种植为一体，以生态医疗为动力，数字齿科为支撑，不断引进精良的设备和高端的进口材料，汇集国内外众多口腔医学名家，在牙齿美容、牙齿种植、牙齿矫正、牙齿美白、口腔健康等领域均有专业建树。</p>
      </div>
      <div class="img">
        <img src="./images/about/yy.jpg" alt="">
      </div>
      <div class="text_box">
        <p>一个专科口腔机构的规模大小，一方面代表了医院的实力，另一方面也能窥测来诊量及诚信经营理念。优贝口腔连锁口腔专科发展模式，先后在房山、海淀、丰台、顺义、昌平等地区创建口腔旗舰医院，均属高端齿科诊疗机构，在牙齿美容、牙齿矫正、牙齿种植、牙齿美白、口腔健康等领域保持同步，立志于做中国口腔标准化齿科机构。</p>
      </div>
    </div>

    <!-- 医疗团队 -->
    <div class="team">
      <!-- 医生专家团队 标题栏 -->
      <div class="title">
        <div class="title_text">医生专家</div>
        <div class="title_fr">
          <p>精专美齿 医者仁心</p>
          <p>HOSPITAL EXPERT TEAM</p>
        </div>
      </div>

      <!-- 医生专家团队 内容 -->
      <div class="yszj_con">
        <img src="./images/index/index_zj1.png" alt="">
        <img src="./images/index/index_zj2.png" alt="">
        <img src="./images/index/index_zj3.png" alt="">
      </div>
      <div class="yszj_btn">
        <a href="#"><span></span>团队详情</a>
        <a href="#"><span></span>点击预约</a>
      </div>

    </div>
  </div>

  <!-- 底部 -->
  <?php include './public/footer.php'; ?>


  <script>
    // swiper 版心
    var swiper = new Swiper('.top_swiper', {
      slidesPerView: 1,
      spaceBetween: 30,
      loop: true,
      autoplay: {
        delay: 2500,
        disableOnInteraction: false,
      },
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      }
    });
  </script>
</body>

</html>