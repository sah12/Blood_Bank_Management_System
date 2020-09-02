<?php

if(isset($_GET['id'])){
$id=$_GET['id'];

include 'conn.php';


$qry="delete from campaign where id=$id";
$result=mysqli_query($conn,$qry);

if($result){
    echo"patient Deleted";
    header('Location:viewcampaign.php');
}else{
    echo"ERROR!!";
}
}
?>