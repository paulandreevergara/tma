<?php
	class db{
		public function Connect(){
            $connect = mysql_connect("localhost", "root","") or die ("mysql_error()");
            $database = mysql_select_db ("themabiniacademy") or die("mysql_error()");
		}
	}
?>