<?php
require_once 'Stu_Service.php';
if(!empty($_GET['tellnum']))
{
	$stu_tellnum = $_GET['tellnum'];
	$c = new Stu_Service();
	$res = $c -> stu_info_dele($stu_tellnum);
	if($res == 1)
	{
		echo "<script  type='text/javascript'>alert('删除成功！');window.location.href='main.php';</script>";
		exit(0);
	}
}
echo "<script  type='text/javascript'>alert('删除失败！');window.location.href='main.php';</script>";
?>