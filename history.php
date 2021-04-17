<?php
 
	session_start();
	include 'connection.php';

	$q="select * from transfer";
	$result=mysqli_query($con,$q);
	$row_count=mysqli_num_rows($result);
	
?>
<html>
<head>
	<title>Transaction History</title>
	<link rel = "stylesheet" type = "text/css" href = "Headerbtn.css">
	<style>
		table {
		font-family: arial, sans-serif;
		border-collapse: collapse;
		width: 100%;
		}

		h1{
		font-family: gabriola;
		font-size:40px;
		}
		
		td, th {
		border: 1px solid #dddddd;
		text-align: center;
		padding: 8px;
		}

		tr:nth-child(even) {
		background-color: #dddddd;
		}
		
	</style>
</head>
<body style="background-image: url('cust.jpg');">
	<div align="center" style="top:0px">		  			
		<table width="1316" align="center" class = "t">
			<tr>
            <td style = "text-align:center"> <a href="index.php" target="frame"><button class = "btn2"> Home </button></a></td>	 	
			<td style = "text-align:center"><a href="custDetails.php" target="frame"><button class = "btn2">Customers</button></a></td>
			<td style = "text-align:center"><a href="selectuser.php" target="frame"><button class = "btn2">Transact</button></a></td>
			<td style = "text-align:center"><a href="history.php" target="frame"><button class = "btn2">Transaction History</button></a></td>
			</tr>
		</table>
	</div>
		 
    <h1 align=center font-family=gabriola>Transaction History</h1>
    <table class="flat-table flat-table-1" align=center style="background-image: url('blue.png');">
	<thead>
		<th>ID</th>
		<th>SENDER NAME</th>
		<th>RECIEVER NAME</th>
		<th>AMOUNT</th>	
	</thead>
	<tbody>
		<tr align = center>
        <?php  
			while($row=mysqli_fetch_array($result)){
        ?>
	<td><?php echo  $row["id"]; ?></td>
	<td><?php echo  $row["senderName"]; ?></td>
	<td><?php echo  $row["recieverName"]; ?></td>
	<td><?php echo  $row["Amount"]; ?></td>
	<tr align = center>
	<?php }
	?>
	</tr>
	</tbody>
	</table>
	
	<div>
		<img src="cust.jpg" alt="cust" height="120" style="opacity:0.5"><br><br>
	</div>
		
</body>
</html>
