<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>Payment Successful</title>
	<meta name="description"
		content="Learn how to recreate the preloader from Cantina Negrar. Tutorial for a passionate front-end web developers by Petr Tichy.">

	<!--iOS -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">


	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" type="text/css" href=ticketstyle.css>
	<script src="js/vendor/modernizr-2.6.2.min.js"></script>
	<style type="text/css">
		h1 {
			height: 100%;
			/* The html and body elements cannot have any padding or margin. */
			margin: 0;
			font-size: 14px;
			font-family: 'Open Sans', sans-serif;
			font-size: 32px;
			margin-bottom: 3px;
		}

		.entry-header {
			text-align: left;
			margin: 0 auto 50px auto;
			width: 80%;
			max-width: 978px;
			position: relative;
			z-index: 10001;
		}

		#demo-content {
			padding-top: 100px;
		}

		#loader {
			z-index: 1001;
			/* anything higher than z-index: 1000 of .loader-section */
		}

		#loader-wrapper .loader-section {
			position: fixed;
			top: 0;
			width: 51%;
			height: 100%;
			background: white;
			z-index: 1000;
		}

		#loader-wrapper .loader-section.section-left {
			left: 0;
		}

		#loader-wrapper .loader-section.section-right {
			right: 0;
		}

		/* loaded styles */
		.loaded #loader-wrapper .loader-section.section-left {
			-webkit-transform: translateX(-100%);
			/* Chrome, Opera 15+, Safari 3.1+ */
			-ms-transform: translateX(-100%);
			/* IE 9 */
			transform: translateX(-100%);
			/* Firefox 16+, IE 10+, Opera */
			-webkit-transition: all 0.3s 0.3s ease-out;
			transition: all 0.3s 0.3s ease-out;
		}

		.loaded #loader-wrapper .loader-section.section-right {
			-webkit-transform: translateX(100%);
			/* Chrome, Opera 15+, Safari 3.1+ */
			-ms-transform: translateX(100%);
			/* IE 9 */
			transform: translateX(100%);
			/* Firefox 16+, IE 10+, Opera */
			-webkit-transition: all 0.3s 0.3s ease-out;
			/* Android 2.1+, Chrome 1-25, iOS 3.2-6.1, Safari 3.2-6  */
			transition: all 0.3s 0.3s ease-out;
			/* Chrome 26, Firefox 16+, iOS 7+, IE 10+, Opera, Safari 6.1+  */
		}

		.loader #loader {
			opacity: 0;
			-webkit-transition: all 0.3s ease-out;
			/* Android 2.1+, Chrome 1-25, iOS 3.2-6.1, Safari 3.2-6  */
			transition: all 0.3s ease-out;
			/* Chrome 26, Firefox 16+, iOS 7+, IE 10+, Opera, Safari 6.1+  */

		}

		.loaded #loader-wrapper {
			visibility: hidden;
		}
	</style>
</head>

<body class="demo">

	<!-- Demo content -->
	<div id="demo-content">

		<header class="entry-header">

			<h1 class="entry-title"></h1>
		</header>

		<div id="loader-wrapper">
			<div id="loader"></div>

			<div class="loader-section section-left"></div>
			<div class="loader-section section-right"></div>
		</div>

		<div id="content" align="center">
			<h2><b>Payment successful!</b><img src=tick.png with=30px height=30px></h2>
<br>
<div align=center class=ticketbox style="height:950px;">
<font class=headding><b>METROPOLITAN TRANSPORT CORPORATION</b></font>
<br><br>
<font class=headding>
<b>Paperless e-Ticket </b></font>
<br>
<br>
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

<tr></tr>
<tr></tr>
<tr><td><b><p class=ticket>Ticket no:</b></p></td>
<td><p class=ticket><?php echo $row['ticketid']; ?></p></td></tr>
<tr><td><b><p class=ticket>Route no:</b></p></td>
<td><p class=ticket><?php echo $row['routenum']; ?></p></td></tr>
<tr><td><b><p class=ticket>Bus no:</b></p></td>
<td><p class=ticket><?php echo $row['busnum']; ?></p></td></tr>
<tr><td><b><p class=ticket>From:</b></p></td>
<td><p class=ticket><?php echo $row['point1']; ?></p></td></tr>
<tr><td><b><p class=ticket>To:</b></p></td>  
<td><p class=ticket><?php echo $row['point2']; ?></p></td></tr>
<tr><td><b><p class=ticket>Date of journey:</b></p></td>
<td><p class=ticket><?php echo $row['Dateof_journey']; ?></p></td></tr>
<tr><td><b><p class=ticket>Type:</b></p></td>
<td><p class=ticket><?php echo $row['type']; ?></p></td></tr>
<tr><td><b><p class=ticket>Number of people:</b></p></td>
</tr>
<tr>
<td><b><p class=ticket>Adult:  </b><?php echo $row['adult']; ?></p></td>
<td><b><p class=ticket>Child:  </b><?php echo $row['child']; ?></p></td></tr>
<tr></tr><tr></tr>
<tr></tr>
<tr><td><b><p class=ticket>Cost:</b></p></td>
<td><p class=ticket><b>&#x20B9;<?php echo $row['cost']; ?></b></p></td></tr>
<?php
        }?>
</table>
<br><br>
<font class=headding> Happy Journey!</font>
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

		</div>

	</div>

	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script>
		window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>')
	</script>
	<script>
		$(document).ready(function () {
			setTimeout(function () {
				$('body').addClass('loaded');
				$('h1').css('color', '#222222');
			}, 2000);


		});
	</script>

</body>

</html>