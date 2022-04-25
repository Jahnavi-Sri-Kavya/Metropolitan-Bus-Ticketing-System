<html>
<head>
<link rel="stylesheet" type="text/css" href=projectstyle3.css>
</head><br>
<body align="center"><br>

<?php

$link = mysqli_connect("localhost", "root", "", "businfo");

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$sql = "SELECT * FROM busdetails";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result)>=0){ ?>
<table style="border-collapse: collapse;border: 2px solid #00008b;width:1500px;" align="center">
<tr>
<th style="border: 1px solid #00008b;padding: 20px;text-align:center;"><font>License Plate No</font></th>
<th style="border: 1px solid #00008b;padding: 20px;text-align:center;"><font>Bus No</font></th>
<th style="border: 1px solid #00008b;padding: 20px;text-align:center;"><font>Route</font></th>
<th style="border: 1px solid #00008b;padding: 20px;text-align:center;"><font>Availability<br>of Seats</font></th>
<th style="border: 1px solid #00008b;padding: 20px;text-align:center;"><font>Booking <br>status</font></th>
</tr>


<?php
        while($row = mysqli_fetch_array($result)){ ?>
<tr>
<td style="border: 1px solid #00008b;padding: 20px;text-align:center;"><font size=6px><?php echo $row['vehicle_num']; ?></font> </td>
<td style="border: 1px solid #00008b;padding: 20px;text-align:center;"><font size=6px><?php echo $row['route_num']; ?></font> </td>
<td style="border: 1px solid #00008b;padding: 20px;text-align:center;"><font size=6px><?php echo $row['via']; ?></font> </td>
<td style="border: 1px solid #00008b;padding: 20px;text-align:center;"><font size=6px><?php echo $row['avl_seats']; ?></font> </td>
<td style="border: 1px solid #00008b;padding: 20px;text-align:center;"><button id="book"><a href="ticket.php" style="text-decoration:NONE;color:white;">Booking</a></button> </td>
</tr>
<?php
        }?>
</table>
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