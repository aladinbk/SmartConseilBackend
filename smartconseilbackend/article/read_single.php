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

//GET ID
$article->id =isset($_GET['id']) ? $_GET['id'] : die();

//GET Article
$article->read_single();

//create array
$art_arr = array(
'id'=> $article->id,
'Title'=> $article->Title,
'Image'=> $article->Image,
'HeaderImage'=> $article->HeaderImage,
'Introduction'=> $article->Introduction,  
'Description'=> $article->Description,
'LastMod'=> $article->LastMod,
'Language'=> $article->Language,
'KeyWords'=> $article->KeyWords,
'State'=> $article->State,
'NumVisit'=> $article->NumVisit,
'IdTheme'=> $article->IdTheme,
'IdUser'=> $article->IdUser,
'IdHost'=> $article->IdHost,
);
 

//Make JSON
print_r(json_encode($art_arr));
