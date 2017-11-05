<?php
	require_once 'Stu_Service.php';
	$c = new Stu_Service();
$stu_name = $_POST['stu_name'];
$stu_addr = $_POST['stu_addr'];
$stu_tellnum = $_POST['stu_tellnum'];
$stu_email = $_POST['stu_email'];
$stu_wechat = $_POST['stu_wechat'];
$stu_qq = $_POST['stu_qq'];
$stu_word = $_POST['stu_word'];
//echo $stu_name;exit(0);
if(!empty($_FILES['file']))
{
	
	$file = $_FILES['file'];
	$name = $file['name'];
	$type = strtolower(substr($name,strrpos($name,'.')+1)); //得到文件类型，并且都转化成小写
	$allow_type = array('jpg'); //定义允许上传的类型
	//判断文件类型是否被允许上传
	if(!in_array($type, $allow_type)){
	//如果不被允许，则直接停止程序运行
		echo "<script  type='text/javascript'>alert('请上传.jpg格式！');
		window.location.href='main.php';</script>";
		exit(0);
	}
	//判断是否是通过HTTP POST上传的
	if(!is_uploaded_file($file['tmp_name'])){
	//如果不是通过HTTP POST上传的
		echo "<script  type='text/javascript'>alert('上传失败！');
		window.location.href='main.php';</script>";
		exit(0);
	}
	$upload_path = "./images/stu/"; //上传文件的存放路径
	//开始移动文件到相应的文件夹
	
	
	if(move_uploaded_file($file['tmp_name'],$upload_path.$stu_tellnum.".jpg"))
	{
		$res  = $c -> stu_info_add( $stu_name,
								$stu_addr,
								$stu_tellnum,
								$stu_email,
								$stu_wechat,
								$stu_qq,
								$stu_word
								);
		if($res == 1)
		{
			echo "<script  type='text/javascript'>alert('添加成功！');
			window.location.href='main.php';
			</script>";
			exit(0);
		}
	}
}
echo "<script  type='text/javascript'>alert('添加失败 ！');
		window.location.href='main.php';
		</script>";
exit(0);








?>