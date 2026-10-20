<?php 
session_start();
include_once("config.php");

if(empty($_SESSION['username'])){
    header("Location");
}
$user=$_POST['user']??null;

$sql="SELECT * FROM users";
$selectUsers=$conn->prepare($sql);
$selectUsers->execute();


$users=$selectUsers->fetchAll();

?>

<html>
    <head>
        <title></title>
        <link href="/css/bootstrap.css" rel="stylesheet">
         <link href="/css/bootstrap.js" rel="stylesheet">
    </head>
<body>
    <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow" >
    <a  class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#"></a>
    

<button class="navbar-toggler position-absolute d-md-none collapsed" type="button"
data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false"
aria-label="Toggle Navigation">
<span class="navbar-toggler-icon4"></span></button>
<input type="text" class="form-control form-control-dark w-50" 
placeholder="Search" aria-label="Search">


<div></div>



