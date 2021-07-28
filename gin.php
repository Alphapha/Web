<?php 
include("config.php"); 
  
$page = intval($_POST['pageNum']);  
// $t = intval($_POST['t']);  
// if($t!=""){
// 	$wsq=" where type='$t' ";
// }else{
// 	$wsq="";
// }
 $sql2 = "select id from dongfanglsw";
 $result = mysqli_query($conn, $sql2);
 $total = mysqli_num_rows($result);//总记录数 
//$result = mysql_query("select id from food");  
//$total = mysql_num_rows($result);//总记录数  
  
$pageSize = 5; //每页显示数  
$totalPage = ceil($total/$pageSize); //总页数  
  
$startPage = $page*$pageSize;  
$arr['total'] = $total;  
$arr['pageSize'] = $pageSize;  
$arr['totalPage'] = $totalPage;  
//$query = mysql_query("select id,title,pic from food order by id asc limit $startPage,$pageSize");  
//while($row=mysql_fetch_array($query)){ 
 $sql = "select * from dongfanglsw order by id desc limit $startPage,$pageSize";
 $query = mysqli_query($conn, $sql);
 while($row = mysqli_fetch_assoc($query)) {
     $arr['list'][] = array(  
        'xm' => $row['xm'],  
        'zyjg' => $row['zyjg'],  
        'img' => $row['img'],
		'ttt' => $row['info']
     );  
}  
//print_r($arr);  
echo json_encode($arr); 
?>


