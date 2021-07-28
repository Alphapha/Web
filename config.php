<?php
header("Content-type: text/html;charset=utf-8");
$servername = "127.0.0.1";
$username = "yang";
$password = "123";
$dbname = "python";
$db_md5 = "dododo";//加上保密
 
// 创建连接
$conn = new mysqli($servername, $username, $password, $dbname);
// 检测连接
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
} 
    /* Close the connection 关闭连接*/     
   // mysqli_close($conn);     
date_default_timezone_set('prc');//时区问题，php环境默认时差与北京时间相差8小时，我们要想获取正确的时间就必须设置在PHP文件开始处 加上date_default_timezone_set('prc');

?>

