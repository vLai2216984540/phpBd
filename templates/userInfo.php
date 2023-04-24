
<!-- 使用php构造百度网盘用户信息界面 -->
<!-- 导入XpanMain.php -->

<?php
// require_once('../openxpanapi/vendor/autoload.php');
// 从数据库中获取用户信息
function getUserInfo()
{
  $userInfo = MyXpannasuinfo();
  switch ($userInfo['vip_type']) {
    case 1:
      $userInfo['vip_type'] = '普通会员';
      break;
    case 2:
      $userInfo['vip_type'] = '超级会员';
      break;
    default:
      $userInfo['vip_type'] = '普通用户';
      break;
  }
  // echo $userInfo, PHP_EOL;
  return $userInfo;
}
function getCapacity()
{
  $Capacity = MyApiQuota();
  $Capacity['total'] = round($Capacity['total'] / 1073741824);
  $Capacity['used'] = round($Capacity['used'] / 1073741824);
  // $Capacity['remain'] = $Capacity['total'] - $Capacity['used'];
  // echo $Capacity, PHP_EOL;
  return $Capacity;
  // // 获取用户的盘内容量
  // $uCapacity = $uInfo['total'];
  // $uCapacity = round($uCapacity / 1073741824 * 100) / 100;
  // // 获取用户的已用容量
  // $uUsedCapacity = $uInfo['used'];
  // $uUsedCapacity = round($uUsedCapacity / 1073741824 * 100) / 100;
  // // 获取用户的剩余容量
  // $uRemainCapacity = $uCapacity - $uUsedCapacity;
}
