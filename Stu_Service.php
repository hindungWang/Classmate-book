<?php
  require_once 'SqlServerClass.php';
  class Stu_Service
  {
    public function update_stu_info($key, $stu_name, $stu_addr, $stu_tellnum, $stu_wechat, $stu_email, $stu_qq,$stu_word)
    {
      $sql = "update stu_info set stu_name='$stu_name',stu_addr='$stu_addr',stu_tellnum='$stu_tellnum',stu_wechat='$stu_wechat',stu_email='$stu_email',stu_qq='$stu_qq',stu_word='$stu_word' where stu_info.stu_no='$key'";
      /*UPDATE `stu_info` SET `stu_name` = 'ade', `stu_addr` = '55555fe', `stu_tellnum` = '465e', `stu_wechat` = '4564e', `stu_email` = 'oiosfude', `stu_qq` = 'fiese', `stu_word` = 'fiowes9ue' WHERE `stu_info`.`stu_tellnum` = '465'*/
      $sqlHelper = new SqlHelper();
      $res = $sqlHelper->execute_dml($sql);
      $sqlHelper->close_connect();
      return $res;
    }


    public function get_student_info()
    {
      $sqlHelper = new SqlHelper();
      $res = $sqlHelper->execute_quary();
      $sqlHelper->close_connect();
      return $res;
    }

    public function stu_info_add($stu_name, $stu_addr, $stu_tellnum, $stu_wechat, $stu_email, $stu_qq,$stu_word)
    {
      $sqlHelper = new SqlHelper();
      $sql = "INSERT INTO `stu_info` 
	  (`stu_no`, `stu_name`, `stu_addr`, `stu_tellnum`, `stu_wechat`, `stu_email`, `stu_qq`, `stu_word`)
	  VALUES (NULL, '$stu_name', '$stu_addr', '$stu_tellnum', '$stu_wechat', '$stu_email', '$stu_qq','$stu_word')";
      /*INSERT INTO `stu_info` (`stu_no`, `stu_name`, `stu_addr`, `stu_tellnum`, `stu_wechat`, `stu_email`, `stu_qq`, `stu_word`) VALUES (NULL, 'rd', 'oi', NULL, NULL, NULL, NULL, NULL);*/
	  $res = $sqlHelper->execute_dml($sql);
      $sqlHelper->close_connect();
      return $res;
    }
    public function stu_info_dele($key)
    {
      $sqlHelper = new SqlHelper();
      $sql = "DELETE FROM stu_info WHERE stu_tellnum='$key'";
      $res = $sqlHelper->execute_dml($sql);
      $sqlHelper->close_connect();
      return $res;
    }
	public function check_login($id)
    {
      $sqlHelper = new SqlHelper();
	  $sql = "select user_password from user where user_id = '$id'";
      $res = $sqlHelper->user_login($sql);
      $sqlHelper->close_connect();
      return $res;
    }
}
?>
