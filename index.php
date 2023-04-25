<?php
// 导入功能和类
require_once './openxpanapi/demo/XpanMain.php';
?>

<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <link href="./css/userinfo.css" rel="stylesheet" style="text/css"/>
    <link href="./css/file.css" rel="stylesheet" style="text/css"/>
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
        echo "<div id='list-container'>";
        foreach ($fileLists as $fileList) {
            echo "<ul id='list' class='grid'>";
                echo "<div class='item'>";
                echo "<icon src='ccc'>";
                echo "<a>$fileList[server_filename]</a>";
                echo "<a>$fileList[size]</a>";
                $date = date("Y-m-d H:i:s", $fileList['server_mtime']);
                echo "<a>$date</a>";
                echo "</div>";
            echo "</ul>";
        }
        echo "</div>";
    ?>

  <body>
</html>
