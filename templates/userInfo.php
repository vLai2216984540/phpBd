
<!-- 使用php构造百度网盘用户信息界面 -->
<!-- 导入XpanMain.php -->

<?php
require_once '../openxpanapi/demo/XpanMain.php';
// require_once('../openxpanapi/vendor/autoload.php');
// 从数据库中获取用户信息
function getUserInfo()
{
  $uInfo = MyApiQuota();
//   输出$uInfo的内容并换行 
    echo $uInfo . PHP_EOL;
  // 获取用户头像
  $uAvatar = $uInfo['avatar_url'];
  // 获取用户昵称
  $uNickname = $uInfo['total'];
  echo $uNickname;
  // // 获取用户注册时间
  // $uRegTime = $uInfo['regtime'];
  // // 获取用户的盘内容量
  // $uCapacity = $uInfo['capacity'];
  // // 获取用户的已用容量
  // $uUsedCapacity = $uInfo['usedcapacity'];
  // // 获取用户的剩余容量
  // $uRemainCapacity = $uCapacity - $uUsedCapacity;
  // // 获取用户的vip等级
  // $uVipLevel = $uInfo['viplevel'];
  // // 获取用户的vip到期时间
  // $uVipExpireTime = $uInfo['vipexpiretime'];
  echo "<html><head><meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\" /></head>
            <body>
        <body>
        <html>";
}

getUserInfo();


