<?php
require_once(LIB_PATH.DS. "config.php");
class Database
{
	var $sql_string = '';
	var $error_no = 0;
	var $error_msg = '';
	var $query = '';
	public $conn;
	public $last_query;
	private $magic_quotes_active;
	private $real_escape_string_exists;

    function __construct()
    {
        $this->open_connection();
        $this->real_escape_string_exists = function_exists("mysql_real_escape_string");
    }

    public function open_connection() {
        try {
            $this->conn = new PDO("mysql:host=".server.";dbname=".database_name. "", user,pass);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch(PDOException $e){
            echo "Problem in database connection! Contact your Administrator!". $e->getMessage();
        }
    }

    	function InsertThis($sql='') {
		$this->sql_string=$sql;
		$this->query = $this->conn->prepare($this->sql_string);
		
		if($this->query->execute()) {
	   	 	return true;
	 	 } else {
	    	return false;
	  	}
	}
	
	function setQuery($sql='') {
		try {
		   $this->sql_string=$sql;
			$this->query = $this->conn->prepare($this->sql_string);
			$this->query->execute();

		  } catch (PDOException $e) {
		    echo "Failed to get query handle: " . $e->getMessage() . "\n";
		    exit;
		  }
		
	}
	function executeQuery(){
		try{
			$this->query->execute();

		 } catch (PDOException $e) {
		    echo "Failed to get query handle: " . $e->getMessage() . "\n";
		    exit;
		  }	
	}
	
	function loadResultList() {
		
		$results = $this->query->fetchAll(PDO::FETCH_OBJ);
		return $results;
	}	
	function loadSingleResultAssoc() {
		
		$results = $this->query->fetch(PDO::FETCH_ASSOC);
		return $results;
	}	
	
	public function num_rows() {
		return $this->query->rowCount();
	}


	function loadSingleResult() {
		
		$results = $this->query->fetch(PDO::FETCH_OBJ);
		return $results;
	}
	
	function getFieldsOnOneTable( $tbl_name ) {
	
		$this->setQuery("DESC ".$tbl_name);
		$rows = $this->loadResultList();
		
		$f = array();
		for ( $x=0; $x<count( $rows ); $x++ ) {
			$f[] = $rows[$x]->Field;
		}
		
		return $f;
	}	

    public function fetch_array($result)
    {
        return mysqli_fetch_array($result);
    }

    public function insert_id()
    {
        return $this->conn->lastInsertId();
    }

    public function affected_rows()
    {
        return mysqli_affected_rows($this->conn);
    }

    public function escape_value( $value )
    {
        return $value;
    }
	
	public function close_connection() {
		$conn = null;
	}
	
} 
$mydb = new Database();


?>
