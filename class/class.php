<?php
class Trabajo
{
    private $dbh;
    private $n;
    private $database = "modeloVentas";
    private $uid = "postgres";
    private $pwd = "root";
    private $host = "localhost";
    
    public function __construct()
    {
        $this->dbh=new PDO( "pgsql:host=$this->host;port=5432;dbname=$this->database;user=$this->uid;password=$this->pwd");
        $this->n=array();
    }

    public function get_datos()
    {
        if($this->dbh){
            echo"si hay conexion";
        }else{
            echo"no hay conexion";  
        }
        $sql ="SELECT * FROM \"tbl_Articulos\"; ";
    
		foreach ($this->dbh->query($sql) as $row)
		{
			$this->n[]=$row;
		}
			return $this->n;
			$this->dbh=null;
    }
   
}
?>