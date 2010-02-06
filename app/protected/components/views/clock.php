<center>
<!-- $Id: clock.php 66 2010-02-06 02:03:52Z mocapapa@g.pugpug.org $ -->
<?php
  $clockOffsetX = 35;
  $clockOffsetY = 1;
?>
<div style="position: relative;">
  <img src="<?php echo Yii::app()->request->baseUrl;?>/systemImages/clock.png">
    <div class="hourHand" style="width:104px;height:104px;background-image:url(<?php echo Yii::app()->request->baseUrl;?>/systemImages/hands.png);background-repeat:no-repeat;top:<?php echo $clockOffsetY;?>px;left:<?php echo $clockOffsetX;?>px;position:absolute;"></div>
    <div class="minuteHand" style="width:104px;height:104px;background-image:url(<?php echo Yii::app()->request->baseUrl;?>/systemImages/hands.png);background-repeat:no-repeat;top:<?php echo $clockOffsetY;?>px;left:<?php echo $clockOffsetX;?>px;position:absolute;"></div>
    <div class="secondHand" style="width:104px;height:104px;background-image:url(<?php echo Yii::app()->request->baseUrl;?>/systemImages/hands.png);background-repeat:no-repeat;top:<?php echo $clockOffsetY;?>px;left:<?php echo $clockOffsetX;?>px;position:absolute;"></div>
</div>
<script type="text/javascript">
   /*<![CDATA[*/
   $(document).ready(function() {
       setInterval(function(){
           var currentTime = new Date();
           var h = currentTime.getHours()%12;
           var m = currentTime.getMinutes();
           var s = currentTime.getSeconds();
           animation(5*h+m/12, m, s);
         }, 1000);
       function animation(h, m, s) {
	 $('.hourHand').css('background-position', -Math.floor(h)*104+'px 0px');
	 $('.minuteHand').css('background-position', -m*104+'px -104px');
	 $('.secondHand').css('background-position', -s*104+'px -208px');
       }
     });
/*]]>*/
</script>
<!--
<embed src="http://www.clocklink.com/clocks/0001-gray.swf?TimeZone=JST&Place=&"
  width="140" height="140" wmode="transparent" type="application/x-shockwave-flash">
-->
</center>
