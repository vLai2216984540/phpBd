<?php

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
        if (isset($_GET['path'])) {
          $path = $_GET['path'];
        }
        $fileLists = getFileLists($path);
        echo '<nav style="margin-left: 20%;">';
        echo '<a href="/phpBd/index.php" style="text-decoration: none; color:black;">🏠主页</a>';
        $dir['path']=str_replace('/', '', $fileLists[0]['path']);
        echo "<a href='/phpBd/index.php?path={$path}' style='text-decoration: none;color:black;'> $path</a>";
        echo '</nav>';
        
        echo "<div class='list-container'>";
          echo "<div class='tab'>";
            echo "<a>名称</a>";
            echo "<a>大小</a>";
            echo "<a>修改日期</a>";
          echo "</div>";
          foreach ($fileLists as $fileList) {
                  echo "<a class='item' href='/phpBd/index.php?path=$fileList[server_filename]'>";
                      echo "<div class='left-container'>";
                          echo '<svg t="1682577628968" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="4961" width="1.5em" height="1.5em">';
                          echo "<path d='$fileList[icon]' p-id='4962' fill='#1296db'></path></svg>";
                          echo "<p>$fileList[server_filename]</p>";
                      echo "</div>";
                      echo "<div class='right-container'>";
                          echo "<p>$fileList[size]</p>";
                          echo "<p>$fileList[server_mtime]</p>";
                      echo "</div>";
                  echo "</a>";
                  echo $fileList['path'];
          }
        echo "</div>";
        getCurDirLists($fileList['path']);
    ?>
  <body>
</html>
