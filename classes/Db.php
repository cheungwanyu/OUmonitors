<?php
	class Db{
		private $sqlConect;
		public function __construct(){
			$this->sqlConect = mysqli_connect("127.0.0.1", "oumonitor", "Ouhk2018", "oumonitors","3306");
			// Change character set to utf8
			mysqli_set_charset($this->sqlConect,"utf8");
		}
		public function query($sql){
			$sqlConect->query($sql);
		}
		public function select($name,$table){
			$sql = "SELECT ";
			if($name == NULL){
				$sql .= "* ";
			}elseif(sizeof($name) == 1){
				$sql .= $name." ";
			}else{
				for($i=0;$i<sizeof($name);$i++){
					if($i == sizeof($name)-1){
						$sql .= $name[$i]." ";
					}else{
						$sql .= $name[$i].", ";
					}
				}
			}
			$sql .= "FROM `$table`";
			$result = $this->sqlConect->query($sql);
			while($row = mysqli_fetch_array($result,MYSQLI_NUM)){
				$out[] = $row;
			}
			if(!$result || !isset($out)){
				return false;
			}
			return $out;
		}
		public function selectSQL($sql){
			$result = $this->sqlConect->query($sql);
			if(!$result){
				return false;
			}
			// echo $sql."<br><br>";
			while($row = mysqli_fetch_array($result,MYSQLI_NUM)){
				$out[] = $row;
			}
			if(!isset($out))
				return NULL;
			return $out;
		}
		/*
			$data[] <= Tabl
			$data[][]  <= data
		*/
		public function selectQuerywithJoin($data,$mapping,$query){
			
			$sql = "SELECT ";
			foreach($data as $t => $d){
				/* Table */
				if($table == NULL){
					$table = " FROM ".$t;
				}else{
					$table .= ", ".$t;
				}
				foreach($d as $dO){
					/* att */
					if($att == NULL){
						$att = $dO;
					}else{
						$att = " AND ".$dO;
					}
				}
			}
			/* Mapping */
			foreach($mapping as $m){
				if($map == NULL){
					$map = $m;
				}else{
					$map .= ",".$m;
				}
			}
			$sql .= $att;
			$sql .= $table;
			$sql .= "WHERE $map AND $query";
			// $result = $this->sqlConect->query($sql);
			// WriteLog::write(WriteLog::DEBUG,__CLASS__ ."::". __FUNCTION__ ."/QUERY:". $sql);
			// if(!$result){
				// return false;
			// }
			echo $sql."<br><br>";
			// while($row = mysqli_fetch_array($result,MYSQLI_NUM)){
				// $out[] = $row;
			// }
			// WriteLog::write(WriteLog::DEBUG,__CLASS__ ."::". __FUNCTION__ ."/NUMBER OF RESULT:". sizeof($out));
			// if(!isset($out))
				// return NULL;
			// return $out;
		}
		public function selectQuery($name,$table,$query){
			$sql = "SELECT ";
			if($name == NULL){
				$sql .= "* ";
			}elseif(sizeof($name) == 1){
				$sql .= $name." ";
			}else{
				for($i=0;$i<sizeof($name);$i++){
					if($i == sizeof($name)-1){
						$sql .= $name[$i]." ";
					}else{
						$sql .= $name[$i].", ";
					}
				}
			}
			$sql .= "FROM `$table`";
			$sql .= "WHERE $query";
			$result = $this->sqlConect->query($sql);
			if(!$result){
				return false;
			}
			// echo $sql."<br><br>";
			while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
				$out[] = $row;
			}
			if(!isset($out))
				return NULL;
			return $out;
		}
		public function insert($title,$data,$table){
			$sql = "INSERT INTO `$table` (";
			if(sizeof($title) == 1){
				$sql .= $title;
			}else{
				for($i=0;$i<sizeof($title);$i++){
					if($i == sizeof($title)-1){
						$sql .= $title[$i];
					}else{
						$sql .= $title[$i].", ";
					}
				}
			}
			$sql .= ") VALUES (";
				for($i=0;$i<sizeof($title);$i++){
					if($data == NULL){
						$in = "NULL";
					}else{
						$in = "'$data[$i]'";
					}
					if($i == sizeof($title)-1){
						$sql .= "$in";
					}else{
						$sql .= "$in".", ";
					}
				}
			$sql .= ")";
			$this->sqlConect->query($sql);
			return mysqli_insert_id($this->sqlConect);
		}
		public function update($title,$data,$query,$table){
			$sql = "UPDATE `$table` SET ";
			for($i=0;$i<sizeof($title);$i++){
				$sql .= "`".$title[$i]."` = '".$data[$i]."'";
				if($i != (sizeof($title)-1)){
					$sql.= ", ";
				}
			}
			$sql .= " WHERE $query;";
			$this->sqlConect->query($sql);
		}
		public function del($query,$table){
			$sql = "DELETE FROM `$table` WHERE $query";
			$this->sqlConect->query($sql);
		}
	}
?>