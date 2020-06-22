<?php
phpinfo();
return;
if( ini_get('safe_mode') ){
   // safe mode is on
  echo "safe";
}else{
   // it's not
  echo "not safe";
}
set_time_limit(550);
echo "start";
sleep(400);
echo "end";
echo ini_get("max_execution_time");
//phpinfo();
