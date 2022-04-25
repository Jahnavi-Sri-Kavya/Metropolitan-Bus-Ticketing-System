<?php
$con=mysqli_connect("localhost","root","");
if(!$con)
{
echo 'server not connected';
}
if(!mysqli_select_db($con,"businfo"))
{
echo 'database not selected';
}
$dateofj = date("d/m/Y");
$routenum=$_POST['routenum'];
$busnum=$_POST['busnum'];
$from=$_POST['from_'];
$to=$_POST['to_'];
$adult=$_POST['adult'];
$child=$_POST['child'];
$type=$_POST['bustype'];
if($type=='AC'){
$cost=($adult*50)+($child*20);
}
else{
	$cost=($adult*20)+($child*10);
}


$sql="insert into booking(Dateof_journey,busnum,routenum,point1,point2,adult,child,type,cost)
values('$dateofj','$busnum','$routenum','$from','$to','$adult','$child','$type','$cost')";
if(!mysqli_query($con,$sql))
{
	echo 'Not inserted';
        
}
else
{
        echo 'Details added successfully in database';
}

header("refresh:2; url=index.html");

?>
