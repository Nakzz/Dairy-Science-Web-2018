<?php
/*
	Hezecom Responsive Gallery, Portfolio and Slider Manager
	Author: Hezecom Technologies (http://hezecom.com) info@hezecom.net
	COPYRIGHT 2014 ALL RIGHTS RESERVED
	
	You must have purchased a valid license from CodeCanyon.com in order to have 
	access this file.

	You may only use this file according to the respective licensing terms 
	you agreed to when purchasing this item.
	*/
	if(!defined('VALID_DIR')) die('You are not allowed to execute this file directly');
	
class DB{
private static $instance = NULL;
private function __construct() {
}
public static function getInstance() {

if (!self::$instance)
    {
    self::$instance = new PDO("".DB_TYPE.":host=".LOCALHOST.";dbname=".DB_NAME."", DB_USERNAME, "a");
	self::$instance->setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND, "SET NAMES 'utf8'");
    self::$instance-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
return self::$instance;
}
private function __clone(){
}
}

	class dboptions{
	
 		public function dbSelect($table, $fieldname=null, $id=null,$classname)
        {
            $db=DB::getInstance();
            $sql = "SELECT * FROM `$table` WHERE `$fieldname`=:id";
            $stmt = $db->prepare($sql);
            $stmt->bindParam(':id', $idd);
			//$id=$idd;
            $stmt->execute();
            return $stmt->fetchObject($classname);
        }

		public function rawSelect($sql)
        {
            $db=DB::getInstance();
            return $db->query($sql);
        }

        public function rawQuery($sql)
        {
            $db=DB::getInstance();
            $db->query($sql);
        }
 	
		public function dbInsert($table, $values)
        {
            $db=DB::getInstance();
            $fieldnames = array_keys($values[0]);
            $size = sizeof($fieldnames);
            $i = 1;
            $sql = "INSERT INTO $table";
            $fields = '( ' . implode(' ,', $fieldnames) . ' )';
            $bound = '(:' . implode(', :', $fieldnames) . ' )';
            $sql .= $fields.' VALUES '.$bound;
            $stmt = $db->prepare($sql);
            foreach($values as $vals)
            {
                $stmt->execute($vals);
            }
        }
        public function dbUpdate($table, $fieldname, $value, $pk, $id)
        {
            $db=DB::getInstance();
            $sql = "UPDATE `$table` SET `$fieldname`='{$value}' WHERE `$pk` = :id";
            $stmt = $db->prepare($sql);
            $stmt->bindParam(':id', $id, PDO::PARAM_STR);
            $stmt->execute();
        }
        public function dbDelete($table, $fieldname, $id)
        {
            $db=DB::getInstance();
            $sql = "DELETE FROM `$table` WHERE `$fieldname` = :id";
            $stmt = $db->prepare($sql);
            $stmt->bindParam(':id', $id, PDO::PARAM_STR);
            $stmt->execute();
        }
		
	//LOGIN
	public function HezeLogin($username,$password,$table) {
		
		$db=DB::getInstance();
		$query = $db->prepare("SELECT `password`, `username` FROM `$table` WHERE `username` = ?");
		$query->bindValue(1, $username);
		
		try{
			$query->execute();
			$data 			= $query->fetch();
			$my_password 	= $data['password'];
			$username   	= $data['username'];
			
			if($my_password === sha1($password)){
				return $username;	
			}else{
				return false;	
			}

		}catch(PDOException $e){
			die($e->getMessage());
		}
	
	}

//USER CHECK
	public function user_exist_checker($username,$table) {
		$db=DB::getInstance();
		$query = $db->prepare("SELECT COUNT(`username`) FROM `$table` WHERE `username`= ?");
		$query->bindValue(1, $username);
	
		try{
			$query->execute();
			$rows = $query->fetchColumn();

			if($rows == 1){
				return true;
			}else{
				return false;
			}

		} catch (PDOException $e){
			die($e->getMessage());
		}

	}
	public function account_activation($username,$table) {
		$db=DB::getInstance();
		$query = $db->prepare("SELECT COUNT(`username`) FROM `$table` WHERE `username`= ? AND `user_status`= ?");
		$query->bindValue(1, $username);
		$query->bindValue(2, 'Active');
		try{
			$query->execute();
			$rows = $query->fetchColumn();

			if($rows == 1){
				return true;
			}else{
				return false;
			}

		} catch(PDOException $e){
			die($e->getMessage());
		}

	}

//get current password
public function current_password($username,$password,$table) {
		$db=DB::getInstance();
		$query = $db->prepare("SELECT password FROM `$table` WHERE `userid`= ?");
		$query->bindValue(1, $username);
		try{
			$query->execute();
			$data 			= $query->fetch();
			$my_password 	= $data['password'];

			if($my_password === sha1($password)){
				return true;	
			}else{
				return false;	
			}

		} catch(PDOException $e){
			die($e->getMessage());
		}

	}

//Login Checker

	public function logged_in_admin () {
		return(isset($_SESSION['admin_user'])) ? true : false;
	}
	public function logged_in_client () {
		return(isset($_SESSION['client_id'])) ? true : false;
	}


	public function logged_in_protect() {
		if ($this->logged_in_admin() === true) {
			header('Location: admin.php');
			exit();		
		}
	}
	 
	public function logged_out_protect() {
		if ($this->logged_in_admin() === false) {
			header('Location: admin.php');
			exit();
		}	
	}
	
	//SELECT COUNT FOR PAGINATION
		public function SelectCount($where)
		{
		$record = $this->rawSelect ("$where");
		$rowcount= $record->fetch(PDO::FETCH_OBJ);
		return $rowcount->num;
	}

}//end class

?>