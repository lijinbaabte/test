<?php

$con=mysqli_connect("localhost","root","baabtra","lijintest");
$req= json_encode($_REQUEST);
$result=mysqli_query($con,"insert into tbl_test(vchr_msg)values('$req')");


?>