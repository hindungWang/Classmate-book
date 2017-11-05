<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>StaffList</title>
<script type="text/javascript">

</script>
</head>
<body>

<?php
  require_once 'Stu_Service.php';
//查询
//不用添加参数
$c = new Stu_Service();$res = $c -> check_login("123456");
echo $res['user_password'];
/*
$res = $c->get_student_info();
echo $res[2]['stu_name'];
var_dump($res);*/
//添加
//添加的字段分别为
//$stu_name, $stu_addr, $stu_tellnum, $stu_wechat, $stu_email, $stu_qq,$stu_word
/*
$c -> stu_info_add("1sgs", "11sfhs1", "46fsh", "111s1", "1111sf1","111sh11","1sss1111");

$res = $c->get_student_info();
var_dump($res);
*/
//更新信息
//更新字段为$stu_name, $stu_addr, $stu_tellnum, $stu_wechat, $stu_email, $stu_qq,$stu_word
/*
if($c->update_stu_info("1","aaa", "11111", "fase", "11111", "11111","1111","11111"))
{
  echo "ok";
}
else{
  echo "err";
}
$res = $c->get_student_info();
var_dump($res);*/
//通过stu_no删除
/*
if($c -> stu_info_dele("1") == 0)
{
	echo "err";
}
$res = $c->get_student_info();
var_dump($res);
*/
?>
</boby>
</html>
