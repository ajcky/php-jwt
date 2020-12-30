<?php
require_once("./jwt.php");
$time = time();
$account = array('acc'=>'admin','password'=>'123456','timestamp'=>$time);
/************** account verify,create $userInfo ******************/

$userInfo = array('uid'=>1,'name'=>'jack','iss'=>'admin','iat'=>$time,'exp'=>$time+7200,'nbf'=>$time,'jti'=>md5(uniqid('JWT').$time));
$jwt=new Jwt;
$token=$jwt->getToken($userInfo);
echo "<pre>";
echo $token;

//对token进行验证签名
$getPayload=$jwt->verifyToken($token);
var_dump($getPayload);

