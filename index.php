<?php

// // 导入功能和类
// // require_once  语句用于在脚本执行期间包含并运行指定文件。

require_once './openxpanapi/demo/XpanMain.php';
?>

<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <link href="./css/userinfo.css" rel="stylesheet" style="text/css"/>
  </head>
  <body>
    <div class="userdiv">
      <?php include './templates/userInfo.php';
        $userInfo = getUserInfo();
        $Capacity = getCapacity();?>
      用户名：<?php echo $userInfo['netdisk_name']; ?>
      <br>
      VIP等级：<?php echo $userInfo['vip_type']; ?>
      <br>
      总容量：<?php echo $Capacity['total']; ?>GB;
      <br>
      已用容量：<?php echo $Capacity['used']; ?>GB;
      <br>
      剩余容量：<?php echo ($Capacity['total']-$Capacity['used']); ?>GB;
      <br>
    </div>
    <?php
      include './templates/file.php';
      $fileLists = getFileLists();
      foreach ($fileLists as $fileList) {
        echo $fileList['server_filename'] . " ";
        echo $fileList['size'] . " ";
        echo $fileList['server_mtime'];
        echo "<br>";
      }
    ?>
  <body>
</html>
