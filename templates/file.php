<?php

function getFileLists(){
  $panFileLists = MyXpanfilelist();
  // echo gettype($panFileLists), PHP_EOL;
  // json_decode 第二个参数 true是转换成数组，false是转换成对象
  $panFileLists=json_decode($panFileLists ,true);
  $myFileLists = array();
  $i = 0;
  foreach($panFileLists['list'] as $panFileList)
  {
    // var_export($panFileList['list'][$i]);
    // 文件名
    $myFileLists[$i]['server_filename'] = $panFileList['server_filename'];
    // 文件大小
    $myFileLists[$i]['size'] = $panFileList['size'];
    // 文件修改时间
    $myFileLists[$i]['server_mtime'] = $panFileList['server_mtime'];
    $i++;
  }
  // var_export($myFileLists);
  return $myFileLists;
}
?>
