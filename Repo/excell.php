<?php
	require_once 'Stu_Service.php';
	$c = new Stu_Service();
	$res = $c->get_student_info();
	//var_dump($res);exit(0);
	function createtable($res,$filename)
	{    
		header("Content-type:application/vnd.ms-excel");    
		header("Content-Disposition:filename=".$filename.".xls");    
		
		$strexport="姓名\t住址\t电话\t微信\t邮箱\tQQ\t个性签名\r";    
		for ($i= 1; $i <= $res['num'];$i++)
		{    
		  
			$strexport.=$res[$i]['stu_name']."\t";     
			$strexport.=$res[$i]['stu_addr']."\t";    
			$strexport.=$res[$i]['stu_tellnum']."\t";    
			$strexport.=$res[$i]['stu_wechat']."\t";    
			$strexport.=$res[$i]['stu_email']."\t";  
			$strexport.=$res[$i]['stu_qq']."\t";  
			$strexport.=$res[$i]['stu_word']."\r";  
			  
		}    
		$strexport=iconv('UTF-8',"GB2312//IGNORE",$strexport);    
		exit($strexport);       
	} 
	$filename = '同学录'.date('YmdHis');	
	createtable($res,$filename);
?>