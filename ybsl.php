<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>优贝实力</title>
  <link rel="stylesheet" href="./css/common.css"> <!-- 初始化 -->
  <link rel="stylesheet" href="./css/swiper.min.css"> <!-- swiper -->
  <link rel="stylesheet" href="./css/ybsl/ybsl.css">

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
      <div class="title"><h3>— 名师汇聚 —</h3></div>
      <div class="box">
        <h3>专业医疗团队</h3>
        <div class="text">
          <img src="./images/ybsl/con_01_01.jpg" alt="">
           <p>优贝口腔拥有一支高学历、临床经验丰富、医术精湛的口腔医疗团队，能够针对患者的不同情况量身制定个性化诊疗方案，满足不同患者的需求。优贝口腔 全部医生均毕业于国内知名口腔医学院，走进优贝口腔，您所享受到的是一种与众不同的服务，在博爱口腔，看牙不再是一件痛苦与麻烦的事情，而是一种享受。</p>
        </div>

        <!-- 联系按钮 -->
        <div class="but_btn">
          <h3>尊敬的访客，有任何疑问可以免费咨询</h3>
          <div class="fl"><a href="#"><span></span>在线咨询</a></div>
          <div class="fr"><a href="tel:400-1671818"><span></span>电话预约</a></div>
          <div class="clear"></div>
        </div>
      </div>
    </div>

    <div class="con_01">
      <div class="title"><h3>— 医疗设备 —</h3></div>
      <div class="box">
        <h3>引进诊疗设备</h3>
        <div class="text">
          <img src="./images/ybsl/con_02_01.jpg" alt="">
           <p>优贝口腔引进业界数字化设备，不仅为客户提供高品质服务，亦为医生的诊疗提供科学、快捷、有效的依据，使得种牙过程由原来的手工操作转化为自动化处理，变得相当精准快捷。</p>
        </div>

        <!-- 联系按钮 -->
        <div class="but_btn">
          <h3>尊敬的访客，有任何疑问可以免费咨询</h3>
          <div class="fl"><a href="#"><span></span>在线咨询</a></div>
          <div class="fr"><a href="tel:400-1671818"><span></span>电话预约</a></div>
          <div class="clear"></div>
        </div>
      </div>
    </div>

    <div class="con_01">
      <div class="title"><h3>— 技术特色 —</h3></div>
      <div class="box">
        <h3>特色技术</h3>
        <div class="text">
          <img src="./images/ybsl/con_03_01.jpg" alt="">
           <p>优贝口腔，美国3MLava全瓷牙、法国EMS无痛洁牙、德国3D美容冠重塑美白牙齿、MIDI微创种植牙、美国YSGG水激光高新技术，带给患者的全新体验，让诊疗过程更舒适、更舒适、更有效！</p>
        </div>

        <!-- 联系按钮 -->
        <div class="but_btn">
          <h3>尊敬的访客，有任何疑问可以免费咨询</h3>
          <div class="fl"><a href="#"><span></span>在线咨询</a></div>
          <div class="fr"><a href="tel:400-1671818"><span></span>电话预约</a></div>
          <div class="clear"></div>
        </div>
      </div>
    </div>

    <div class="con_01">
      <div class="title"><h3>— 众多种植手术 —</h3></div>
      <div class="box">
        <h3>众多成功案例</h3>
        <div class="text">
          <img src="./images/ybsl/con_04_01.jpg" alt="">
           <p>数年来，专业成就实力，优贝口腔成功种植每一颗牙。在优贝，每一位种牙朋友都会签订维护协议，明确价格，维护术后种牙效果...</p>
        </div>

        <!-- 联系按钮 -->
        <div class="but_btn">
          <h3>尊敬的访客，有任何疑问可以免费咨询</h3>
          <div class="fl"><a href="#"><span></span>在线咨询</a></div>
          <div class="fr"><a href="tel:400-1671818"><span></span>电话预约</a></div>
          <div class="clear"></div>
        </div>
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