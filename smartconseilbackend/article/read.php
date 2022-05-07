<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

//include database and object files
include_once '../config/database.php';
include_once '../objects/article.php';

//instantiate database and product object
$database = new Databse();
$db = $database->getConnection();

//initialize object
$article = new Article($db);

//query products
$stmt = $article->readAll();
$num = $stmt->rowCount();

//check if more than 0 record is found
if($num>0){
    $articles_array= array();
	$articles_array['data']= array();
	
    $data = "";
    $x = 1;
    
    //retreive table contents
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        //extract row
        extract($row);
		$article_item = array(
		'id'=> $id,
		'Title'=> $Title,
		'Image'=> $Image,
		'HeaderImage'=> $HeaderImage,
		'Introduction'=> $Introduction,  
		'Description'=> $Description,
		'LastMod'=> $LastMod,
		'Language'=> $Language,
		'KeyWords'=> $KeyWords,
		'State'=> $State,
		'NumVisit'=> $NumVisit,
		'IdTheme'=> $IdTheme,
		'IdUser'=> $IdUser,
		'IdHost'=> $IdHost,);
		// Push to Data
		array_push($articles_array['data'], $article_item);    
    }
	
    //json format output
	echo json_encode($articles_array);

	}
	else{
	echo json_encode(
		array('message'=> 'No Article Found')
	);
	}

?>
