<?php

$con=mysqli_connect('localhost','root','');

if (!$con)
{
echo 'Not Connected To Server';
}

if (!mysqli_select_db($con,'businfo'))
{
echo 'Database Not Selected';
}

if(isset($_POST['findbuses'])){

    $from = mysqli_real_escape_string($con,$_POST['from']);
    $to = mysqli_real_escape_string($con,$_POST['To']);

    if ($from != "" && $to != ""){

        $sql_query = "select count(*) as cntUser from busdetails where point1='".$from."' and point2='".$to."' or via like '%$from%' and via like '%$to%' or point1='".$to."' and point2='".$from."' or via like '%$from%' and point2='".$to."' or point1='".$from."' and  via like '%$to%' or via like '%$from%' and point1='".$to."' or point2='".$from."' and via like '%$to%' ";

        $result = mysqli_query($con,$sql_query);
        $row = mysqli_fetch_array($result);

        $count = $row['cntUser'];

        if($count > 0){
            $_SESSION['from'] = $from;
            header('Location: bus_avail.php');
        }else{
            echo "NO Search Results Found";
            header('refresh:2;url=journey.html');
            
        }

    }

}?>