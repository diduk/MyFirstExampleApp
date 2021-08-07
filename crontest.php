<?php

$logmessage='';

$logmessage.='Hello\r\n';
$logmessage.='current dir :'.__DIR__.'\r\n';

file_put_contents('./log.txt',$logmessage);
file_put_contents('/logs/mylog.txt',$logmessage);
