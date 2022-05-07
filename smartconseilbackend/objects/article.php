<?php
class Article{
    
    //database connection and table name
    private $conn;
    private $table_name = "article";
    
    //object properties
    public $id;
    public $Title;
    public $Image;
    public $HeaderImage;
    public $Introduction;
    public $Description;
    public $LastMod;
	public $Language;
	public $KeyWords;
	public $State;
	public $NumVisit;
	public $IdTheme;
	public $IdUser;
	public $IdHost;		
	
    //constructor with $db as database connection
    public function __construct($db){
        $this->conn = $db;
    }
    
    //Function GET articles
    function readAll(){
        
        //select all query
        $query = "SELECT * FROM " . $this->table_name."";
        
        //prepare query statement
        $stmt = $this->conn->prepare($query);
        
        //execute query
        $stmt->execute();
        return $stmt;
    }
	//function Get By Id
	function read_single(){	
	
		$query = 'SELECT * FROM '.$this->table_name.' WHERE id = ?';
		$stmt= $this->conn->prepare($query);
		$stmt->bindParam(1, $this->id);
		$stmt->execute();
		$row = $stmt->fetch(PDO::FETCH_ASSOC); 
		$this->Title =$row['Title'];
		$this->Image =$row['Image'];
		$this->HeaderImage =$row['HeaderImage'];
		$this->Introduction =$row['Introduction'];
		$this->Description =$row['Description'];
		$this->LastMod =$row['LastMod'];
		$this->Language =$row['Language'];
		$this->KeyWords =$row['KeyWords'];
		$this->State =$row['State'];
		$this->NumVisit =$row['NumVisit'];
		$this->IdTheme =$row['IdTheme'];
		$this->IdUser =$row['IdUser'];
		$this->IdHost =$row['IdHost'];
			
}
	
	

}
