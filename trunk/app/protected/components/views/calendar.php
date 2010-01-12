<center>
<ul class="Calendar">
<?php
   // @version $Id$
   if (isset(Yii::app()->params['calendarLocale']) && Yii::app()->params['calendarLocale'] == 'Japan')
     include_once('generate_calendar_Japan.php');
   else
     include_once('generate_calendar.php');
echo generate_calendar($year, $month, $days, $len, $url, 0, $pnc);
?>
</ul>
</center>
