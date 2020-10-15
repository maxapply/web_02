
<link rel="stylesheet" href="../css/footer.css">

<footer>
  <img src="../images/index/youbeimap.jpg" alt="">
  <img src="../images/index/new_zz_footer.png" alt="">
</footer>


<!-- 底部按钮 -->
<div class="bottom">
  <div class="fl">
    <a href="#" class="but"><span></span>疯狂优惠</a>
  </div>
  <div class="fr">
    <a href="#" class="but"><span></span>电话咨询</a>
  </div>
</div>







<!-- 弹出层 -->
<div class="Popup">
  <span></span>
  <img src="../images/swt_bg.jpg" alt="">
  <a href="#"></a>
  <a href="tel:400-1671818"></a>
</div>


<!-- 制顶 -->
<div class="fright" >
  <img src="../images/topping.png" alt="">
  <span></span>
</div>

<script>

//  自动 广告弹窗
$(document).ready(function () {
  $(".Popup").slideDown()
})


// 点击关闭弹窗
$('.Popup span').click(function(){
  $('.Popup').slideUp()
})


// 滚动大于200 制顶小火箭显示
$(function(){
  function showBox(){
      $(document).scrollTop()>=200 ? $('.fright').fadeIn(): $('.fright').fadeOut()
  }
  // dom渲染完成后判断滚动条卷起距离大于200 ？显示 ：隐藏
  showBox()
  // 滚动的时候显示小火箭
    $(window).scroll(function(){
      showBox()
    })
})
// 点击小火箭， 卷起距离为0
$('.fright').click(function(){
  $('body,html').animate({
    scrollTop: 0
  })
})



</script>