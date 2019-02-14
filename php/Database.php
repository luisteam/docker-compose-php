<?php
class Database {
   public static $db;
   public static $con;
   function Database(){
       $this->user=getenv('MYSQL_USER');$this->pass=getenv('MYSQL_PASSWORD');$this->host="bookmedikBD";$this->ddbb=getenv('MYSQL_DATABASE');

   }

   function connect(){
       $con = new mysqli($this->host,$this->user,$this->pass,$this->ddbb);
       $con->query("set sql_mode=''");
       return $con;
   }

   public static function getCon(){
       if(self::$con==null && self::$db==null){
           self::$db = new Database();
           self::$con = self::$db->connect();
       }
       return self::$con;
   }

}
?>
