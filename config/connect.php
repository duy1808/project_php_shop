<?php
if(!defined("SECURITY")){
	die("Quay lại đăng nhập lại đê!");
}
$connect = mysqli_connect("localhost", "root","","project_php_mobile");
if($connect){
    mysqli_query($connect,"SET NAMEs 'utf8'");
}
else{
    echo "Kết nối thấy bại!";
}
?>