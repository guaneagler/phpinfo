<?php
if( ini_get('safe_mode') ){
   // safe mode is on
  echo "safe";
}else{
   // it's not
  echo "not safe";
}
echo "start";
sleep(400);
echo "end";
//phpinfo();
