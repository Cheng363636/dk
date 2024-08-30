
<?php
header('Content-Type: text/html; charset=utf-8');
//1、获取前端输入
$username1 = $_POST['用户名'];
$userPwd1 = $_POST['密码'];
$email = $_POST['邮箱'];

//2、连接数据库
    $servername = "localhost";
	$username = "mg3r642lh9bu";
	$password = "czy147258";
	$dbname = "db_9.29";
// 创建连接
	$conn = new mysqli($servername, $username, $password, $dbname);
//检测连接
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
} 
//3. 组装sql语句，执行新增业务,这里是新增记录
	$sql="insert into user values(null,'".$username1."','".$userPwd1."','".$email."')";
	if ($conn->query($sql) === TRUE) {
	    echo "用户注册成功";
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	} 
	$conn->close();
?>
