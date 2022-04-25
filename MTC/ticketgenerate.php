<html>
<head>
<link rel="stylesheet" type="text/css" href=ticketstyle.css>
</head>
<body align=center>
<br>
<h1><b>Payment successful!</b><img src=tick.png with=30px height=30px></h1>
<br>
<div align=center class=ticketbox>
<font class=headding><b>METROPOLITAN TRANSPORT CORPORATION</b></font>
<br><br>
<font class=headding>
<b>Paperless e-Ticket </b></font>
<br>
<table boder=0 align=center>
<?php

$link = mysqli_connect("localhost", "root", "", "businfo");

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$sql = "select * from booking where ticketid=(select max(ticketid) from booking)";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result)>=0){ 
      while($row = mysqli_fetch_array($result)){ ?>

<tr align="left"><td><b>Ticket no:</b></td>
<td><?php echo $row['ticketid']; ?></td></tr>
<tr align="left"><td><b>Route no:</b></td>
<td><?php echo $row['routenum']; ?></td></tr>
<tr align="left"><td><b>Bus no:</b></td>
<td><?php echo $row['busnum']; ?></td></tr>
<tr align="left"><td><b>From:</b></td>
<td><?php echo $row['point1']; ?></td></tr>
<tr align="left"><td><b>To:</b></td>  
<td><?php echo $row['point2']; ?></td></tr>
<tr align="left"><td><b>Date of journey:</b></td><td><?php echo $row['Dateof_journey']; ?></td></tr>
<tr><td><b>Number of people:</b></td>
</tr>
<tr align="left">
<td><b>Adult:</b><?php echo $row['adult']; ?></td>
<td><b>Child:</b><?php echo $row['child']; ?></td></tr>
<tr align="left"><td><b>Cost:</b></td>
<td><?php echo $row['cost']; ?></td></tr>
<?php
        }?>
</table>
</div>
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