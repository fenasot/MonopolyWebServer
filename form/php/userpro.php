<?php
    session_start();
    header("Content-Type:text/html; charset=utf-8");
    require_once 'config.php';

    $un = $_SESSION['acc'];
    $sql = "SELECT * FROM useracc WHERE acc ='$un'";
    $result = mysqli_query($conn, $sql);
    $data = $result->fetch_assoc();

    ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title></title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <link rel="stylesheet" type="text/css" href="../css/fullPage.css">
  <link rel="stylesheet" type="text/css" href="../css/animate.css"/>
  <link rel="stylesheet" type="text/css" href="../css/style.css"/>
  <link rel="stylesheet" type="text/css" href="../css/indexstyle.css"> 
  <script src="../js/verify.js"></script>

</head>
<body>
<div class="section section6">
  <div class="title animated" >
    <h3>個人資訊</h3>
    <h4></h4>
  </div>


  <div class="neipage">
    <div class="w1200">
      <div class="breadcrumb-box">
        <div class="breadcrumb clearfix">
          <div class="fl">
            <ul class="clearfix">
              <li class="on">個人資料</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="caselist active">
        <ul>
          <li class="w1300">
            <a href="#">
              <b></b>
              <div class="timepro">
                <ul class="timeproul">
                  <li class="p3proli"><p class="p3pro">使用者姓名：<?php echo $data["id"]; ?></p></li>
                  <li class="p3proli"><p class="p3pro">帳戶ID：<?php echo $data["acc"]; ?></p></li>
                  <li class="p3proli"><p class="p3pro">累積點數：<?php echo $data["points"]; ?></p></li>
                  <li class="p3proli"><p class="p3pro">骰子的剩餘數量：<?php echo $data["dice"]; ?></p></li>
                  <li class="p3proli"><p class="p3pro">是否已領取本周的骰子：<?php 
                      if ($data["weekaward"] == 0){
                        echo "否";
                      } else {
                        echo "是";
                      }
                   ?></p></li>
                </ul>
              </div>
              <form method="post" style="display: inline" action="weekawardtab.php">
                 <input class="submit"  name="weekaward" type="submit" value="領取本周骰子">
              </form>
              <figcaption>    </figcaption>
              <form method="post" style="display: inline" action="givepoint.php">
                  <input class="submit"  name="givepoint" type="submit" value="領取點數">
              </form>
              <form method="post" style="display: inline" action="resum.php">
                  <input class="submit" type="hidden" name="Location"  value="5">
                  <input class="submit"  name="Pln" type="submit"  value="test">
              </form>


             
            </a>
          </li>
        </ul>
      </div>

      
    </div>
  </div>
</div>



<script type="text/javascript" src="../js/jquery.min.js"></script>
<script src="../js/jquery-ui-1.10.3.min.js"></script>
<script src="../js/fullPage.min.js"></script>
<script src="../js/plugin.js"></script>
<script type="text/javascript" src="../js/jquery.SuperSlide.2.1.1.js"></script>
<script src="../js/more.js"></script>



<script>
  
$(function(){
$('#lawyer').fullpage({
navigation: true,
anchors: ['page1', 'page2', 'page3', 'page4', 'page5', 'page6','page7'],
menu: '#menu'
});


jQuery(".banner").flexslider({
animation: "fade",
easing: "swing",
slideshowSpeed: 6000,
animationSpeed: 0,
pauseOnAction: false,
directionNav: false,
controlNav: true,
start: function(slider) {
jQuery('.banner .bannerfix li').eq(slider.currentSlide).addClass("imgIn").siblings().removeClass("imgIn");
},
after: function(slider) {
jQuery('.banner .bannerfix li').eq(slider.currentSlide).addClass("imgIn").siblings().removeClass("imgIn");
}
});
$(".sec5-cont").slide({
mainCell: ".bd ul",
autoPlay: true,
effect: "fade"
});

jQuery(".sec6-cont").slide({ titCell:".tab-hd li", mainCell:".tab-bd",delayTime:0 });
jQuery(".scrollBox").slide({ titCell:".list li", mainCell:".piclist", effect:"left",vis:1,scroll:1,delayTime:800,trigger:"click",easing:"easeOutCirc"});


});


   
</script>


</body>
</html>