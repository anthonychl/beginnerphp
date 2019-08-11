<?php

echo 'the current time is '.time().'<br>'; // seconds elapsed since 1970, unix timestamp

echo 'the current time in a formatted way is '.date('H i s',time()).'<br>'; //H:hour i:minutes s:seconds;
echo 'the current time in a formatted way is '.date('H:i:s',time()).'<br>';
echo 'the current time in a formatted way is '.date('H.i.s',time()).'<br>';
echo 'the current time in a formatted way is '.date('h i s',time()).'<br><br>';

echo 'the current date in a formatted way is '.date('D d M Y',time()).'<br>';//(D)ay (d)ate (M)onth (Y)ear
echo 'the current date/time in a formatted way is '.date('D d M Y @ H:i:s',time()).'<br><br>';

echo 'the modified date/time in a formatted way is '.date('D d M Y @ H:i:s',time()-120).'<br>';// substract seconds
echo 'the modified date/time in a formatted way is '.date('D d M Y @ H:i:s',time()+360).'<br>';// add seconds
echo 'the modified date/time in a formatted way is '.date('D d M Y @ H:i:s',strtotime('+ 1 week')).'<br>';// add a week
echo 'the modified date/time in a formatted way is '.date('D d M Y @ H:i:s',strtotime('- 1 week')).'<br>';// minus a week
echo 'the modified date/time in a formatted way is '.date('D d M Y @ H:i:s',strtotime('+ 1 month')).'<br>';
echo 'the modified date/time in a formatted way is '.date('D d M Y @ H:i:s',strtotime('+ 1 year')).'<br>';
echo 'the modified date/time in a formatted way is '.date('D d M Y @ H:i:s',strtotime('+ 1 week 2 hours 15 minutes 30 seconds')).'<br>';// add a week



?>