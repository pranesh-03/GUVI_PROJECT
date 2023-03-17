<?php
$redis = new Redis();
$redis->connect('localhost',6578);
if($redis){
    $redis->set('mykey',890);
    $redis->set('mynewkey','myvalue');

    echo $redis->get('mykey');

}?>