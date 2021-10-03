<?php
include 'form1.0.php';
if($_POST['submit']){
    $FirstName=$_POST['FirstName'];
    $LastName=$_POST['LastName'];
    $EmailId=$_POST['EmailId'];
    $college=$_POST['college'];
    $PhnNum=$_POST['PhnNum'];

    // connection to database
    $conn=mysqli_connect('localhost','root','');
    if(!$conn){
        die('connection not created due to :- '.mysqli_connect_error());
    }
    // create database
    $query_for_database="CREATE DATABASE mydatabase";
    $database_create=mysqli_query($conn,$query_for_database);
    if(!$database_create){
        die('database not created '. mysqli_error($conn));
    }

}