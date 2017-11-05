<?php
	require_once 'Stu_Service.php';
	$user_id = $_POST['user_id'];
	//$user_name = $_POST['user_name'];
	$user_password = $_POST['user_password'];
	$c = new Stu_Service();
	$res = $c -> check_login($user_id);
	//echo $user_id.$user_password.$res['user_password']
	if($res)
	{
		if($res['user_password'] == md5($user_password))
		{
			header("Location:main.php");exit(0);
		}
	}
	echo "<script  type='text/javascript'>alert('用户名或密码错误！');window.location.href='login.html';</script>";
	
	?>