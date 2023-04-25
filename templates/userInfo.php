<?php
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
  return $userInfo;
}
function getCapacity()
{
  $Capacity = MyApiQuota();
  $Capacity['total'] = round($Capacity['total'] / 1073741824);
  $Capacity['used'] = round($Capacity['used'] / 1073741824);
  return $Capacity;
}
