<?php
// 设置SQL文件保存文件名
$filename = date("Y-m-d",time())."_ozelearning.sql";
// 所保存的文件名
header("Content-disposition:filename=".$filename);
header("Content-type:application/octetstream");
header("Pragma:no-cache");
header("Expires:0");
// 获取当前页面文件路径，SQL文件就导出到此文件夹内
$tmpFile = "E:\xampp\htdocs\OZELearning\backups\".$filename;
// 用MySQLDump命令导出数据库
exec("mysqldump -uroot -paoji1qazxsw2 --default-character-set=utf8 ozelearning > ".$tmpFile);
$file = fopen($tmpFile, "r"); // 打开文件
echo fread($file,filesize($tmpFile));
fclose($file);
exit;
?> 