<?php
$con=mysqli_connect('localhost','root','');

if (!$con)
{
echo 'Not Connected To Server';
}

if (!mysqli_select_db($con,'passenger'))
{
echo 'Database Not Selected';
}
		
    $username = $_POST['loginname'];
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $phonenum = $_POST['phno'];
    $pwd = $_POST['password'];
    $rpwd = $_POST['repassword'];
if ($pwd==$rpwd){
    $sql = "INSERT INTO passengerinfo(username,name,email,phonenumber,password) VALUES ('$username','$fullname','$email','$phonenum','$pwd')";
}

    if(!mysqli_query($con,$sql))
    {
        echo 'Not Inserted';
    }
    else
    {
        echo "You Have Registered Successfully .";
    }

header("refresh:1; url=login.html");
?>