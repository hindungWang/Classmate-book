<?php
  class SqlHelper
  {
    public $mysql_conf = array('host'    => '127.0.0.1:3306', 
                                'db'      => 'student_info', 
                                'db_user' => 'root', 
                                'db_pwd'  => '123456', 
                                );
    public $mysqli;

    public function __construct()
    {
      $this->mysqli = @new mysqli($this->mysql_conf['host'], $this->mysql_conf['db_user'], $this->mysql_conf['db_pwd']);
      if ($this -> mysqli->connect_errno) 
      {
        die("could not connect to the database:\n" . $this->mysqli->connect_error);//诊断连接错误
      }
    }


    public function close_connect()
          {
              if(!empty($this->mysqli))
              {
                $this->mysqli->close();
              }
          }
    public function execute_quary()//查询
    {
      $this->mysqli->query("set names 'utf8';");//编码转化
      $select_db = $this->mysqli->select_db($this->mysql_conf['db']);
      if (!$select_db) {
        die("could not connect to the db:\n" .  $this->mysqli->error);
      }$sql = "select * from stu_info;";
      $res = $this->mysqli->query($sql);
      if($res)
      {
        $i = 1;
        while ($row = $res->fetch_assoc())
        {
         //var_dump($row);
         /*$row['stu_name']}
         {$row['stu_addr']}
         {$row['stu_tellnum']}
         {$row['stu_wechat']}
         {$row['stu_email']}
         {$row['stu_qq']}
         {$row['stu_word']};*/
         $arr[$i++] = $row;
       }
       /*var_dump($arr);
       exit(0);*/
       $arr['num']=$i-1;
       return $arr;
      }
      return $res;
    }
    public function execute_dml($sql)//增删改
    {
      //echo $sql."***";exit(0);
      $this->mysqli->query("set names 'utf8';");
      $select_db = $this->mysqli->select_db($this->mysql_conf['db']);
      $b = $this->mysqli->query($sql);
      if(!$b)
      {
        return 0;
      }
      else
      {
        return 1;
      }
    }
	public function user_login($sql)//查询
    {
      $this->mysqli->query("set names 'utf8';");//编码转化
      $select_db = $this->mysqli->select_db($this->mysql_conf['db']);
      if (!$select_db) 
	  {
        die("could not connect to the db:\n" .  $this->mysqli->error);
      }
	  //echo $sql;
      $res = $this->mysqli->query($sql);
      if($res)
      {
       return ($res->fetch_assoc());
      }
      return $res;
    }


  }

 ?>
