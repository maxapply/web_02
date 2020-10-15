<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>案例中心</title>
  <link rel="stylesheet" href="./css/common.css"> <!-- 初始化 -->
  <link rel="stylesheet" href="./css/swiper.min.css"> <!-- swiper -->
  <link rel="stylesheet" href="./css/alzx/alzx.css">

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
    <div class="con_01">
      <div class="title"><h3>口碑相传</h3><p>以患者为中心，使医院也<br>能成为患者拥有美好回忆的地方</p></div>
      <div class="box">
        <ul>
          <li><img src="./images/alzx/con_01_01.png" alt=""></li>
          <li><img src="./images/alzx/con_01_02.png" alt=""></li>
          <li><img src="./images/alzx/con_01_03.png" alt=""></li>
          <li><img src="./images/alzx/con_01_04.jpg" alt=""></li>
          <li><img src="./images/alzx/con_01_05.jpg" alt=""></li>
          <li><img src="./images/alzx/con_01_06.png" alt=""></li>
        </ul>

      </div>
    </div>

    <div class="con_02">
      <div class="box">
        <div class="title"><h3>经典案例</h3></div>

        <div class="text">
          <img src="./images/alzx/con_02_01.jpg" alt="">
            <div class="fr">
              <h3>顾女士</h3>
              <p><strong>牙齿问题</strong>:牙齿不齐，要求矫正</p>
              <p><strong>治疗方案</strong>:陶瓷托槽矫正</p>
            </div>
          <img src="./images/alzx/con_02_02.jpg" alt="">

          <!-- 咨询按钮 -->
          <div class="paging">
            <a href="#">>> 有以上情况点击咨询 <<</a>
          </div>
        </div>

        <div class="text">
          <img src="./images/alzx/con_02_03.jpg" alt="">
            <div class="fr">
              <h3>何小姐</h3>
              <p><strong>牙齿问题</strong>:牙齿黑黄，不敢笑，工作没有自信</p>
              <p><strong>治疗方案</strong>:瓷贴面</p>
            </div>
          <img src="./images/alzx/con_02_04.jpg" alt="">
          <!-- 咨询按钮 -->
          <div class="paging">
            <a href="#">>> 有以上情况点击咨询 <<</a>
          </div>
        </div>

        <div class="text">
          <img src="./images/alzx/con_02_05.png" alt="">
            <div class="fr">
              <h3>紫欣 <span>4岁</span></h3>
              <p><strong>牙齿问题</strong>:牙列开颌 咬合不正</p>
              <p><strong>治疗方案</strong>:MRC肌功能矫正，纠正开口呼吸，排齐牙齿。</p>
            </div>
          <img src="./images/alzx/con_02_06.png" alt="">

          <!-- 咨询按钮 -->
          <div class="paging">
            <a href="#">>> 有以上情况点击咨询 <<</a>
          </div>
        </div>




      </div>
    </div>
    
    <div class="con_03">
      <img src="./images/alzx/con_03_01.jpg" alt="">
      <!-- 联系按钮 -->
      <div class="but_btn">
        <h3>尊敬的访客，有任何疑问可以免费咨询</h3>
        <div class="fl"><a href="#"><span></span>在线咨询</a></div>
        <div class="fr"><a href="tel:400-1671818"><span></span>电话预约</a></div>
        <div class="clear"></div>
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