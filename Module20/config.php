<?php 
$u='root';
$ass='';
$server='localhost';
$dbname='personalmovie_project';


try{
    $conn = new PDO("mysql:host=$server;dbname=$dbname", $u, $ass);
    echo "Connected succesfully!";


}catch(Exception $e){
    echo "Error".$e->getMessage();
}







?>