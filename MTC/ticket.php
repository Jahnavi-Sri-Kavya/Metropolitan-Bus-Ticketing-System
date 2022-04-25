<html>
<head>
<link rel="stylesheet" type="text/css" href='projectstyle.css'>
</head>
<body align=center>
<br><br>
<form action="book.php" method="post">
<h1>BOOKING WINDOW</h1>

<?php

$link = mysqli_connect("localhost", "root", "", "businfo");

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$sql = "SELECT * FROM busdetails";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result)>=0){
while($row = mysqli_fetch_array($result)){ ?>
<table align=center>
<tr>
<td></td>
<td align=right ><font class=para>Route number:</font></td>
<td colspan= 2><textarea name='routenum' rows='1' cols='6' readonly="readonly"><?php echo $row['route_num'];?></textarea></td>
<td></td>
</tr>
<tr>
<td></td>
<td align=right><font class=para>Bus number:</font></td>
<td colspan= 2><textarea name='busnum' rows='1' cols='10' readonly="readonly"><?php echo $row['vehicle_num'];?></textarea></td>
<td></td>
</tr>
<tr></tr>
<tr>
<td align=right><font class=para>From:</font></td>
<td><textarea name='from_' rows='1' cols='20' readonly="readonly"><?php echo $row['point1'];?></textarea></td>
<td align=right><font class=para>To: </font></td>
<td><textarea name='to_' rows='1' cols='20' readonly="readonly"><?php echo $row['point2'];?></textarea></td>
</tr>
<?php
        }?>
<tr></tr>
<tr>
<td colspan=4><font class=para><b>Number of tickets</b></font></td>
</tr>
<tr>
<td><font class=para>Adult:</font></td>
<td><input type=text class=biginp size=2 id=adult name=adult required></td>
<td align=right><font class=para>Child:</font></td>
<td><input  type=text class=biginp id=child size=2 name=child required></td>
</tr>
<tr></tr>
<tr></tr>
<tr>
<td align=right><font class=para><b>Type:</b></font></td>
<td align=center><font class=para><input type=radio name=bustype value=AC>AC</font></td>
<td><font class=para><input type=radio name=bustype value='Non AC'>Non AC</font></td>
<td>
</tr>
<tr></tr>
<tr>
<td></td>
<td></td>
<td>
<button 
style='background:#00008b ;
  width: 100%;
  height: 50px;
  font-size: 20px;
  margin-left: 13px;
  margin-top: 10px;
  color:white;'> PROCEED </button>
</td>
<td>
<input type=button value=BACK style='background:#00008b ;
  width: 60%;
  height: 50px;
  font-size: 20px;
  margin-left: 13px;
  margin-top: 10px;
  color:white;'>
</td>
</tr>
</table>
</form>
<?php
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>
</body>
</html>