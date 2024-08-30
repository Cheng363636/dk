<?php
header('Content-Type: text/html; charset=utf-8');
//1、获取前端输入
$email = $_POST['邮箱'];
$userPwd = $_POST['密码'];
//2、连接数据库
$servername = "localhost";
$username = "mg3r642lh9bu";
$password = "czy147258";
$dbname = "db_9.29";
//创建连接
$conn = new mysqli($servername,$username,$password,$dbname);
//检测连接
if ($conn->connect_error){
	die("连接失败".$conn->connect_error);
}
//组装sql语句,查询用户记录
$sql = "select userPwd from user where username='".$username1."'";
$result = $conn->query($sql);
if($result->num_rows > 0){
	$row = $result->fetch_row();
	$db_userpwd = $row[0];
//4.检查输入密码和已有密码是否一致
        if($db_userpwd==$userPwd){
        	// echo '欢迎用户'.$username1.'登录';
        	echo '<script>alert("欢迎"); location.href+"https://dakun.svs.free.hr/index1.html";</script>';
        }else{
        	echo '<script>alert("登录失败"); history.go(-1);</script>';
        }
	 }else {
    	echo "用户不存在";
	}
$conn->close();
?>