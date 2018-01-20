<?php
include('../dbcon.php');
	$rollno=$_POST['rollno'];
	$name=$_POST['name'];
	$city=$_POST['city'];
	$pcon=$_POST['pcon'];
	$std=$_POST['std'];
	$id=$_POST['sid'];
	$imagename = $_FILES['simg']['name'];
	$tempname = $_FILES['simg']['tmp_name'];
	
	move_uploaded_file($tempname,"../dataimg/$imagename");
	
	$qry="UPDATE 'student' SET 'rollno'='$rollno', 'name' = '$sname', 'city' = '$city', 'pcon'= '$pcon' 'standard'='$std', 'image'='$im
', WHERE 'id'='$id';"; 
	$run=mysqli_query($con,$qry);

	$run=mysqli_query($con,$qry);
   
   if($run == true)
   {
	   ?><script>alert('Data updated succesfully');
	   window.open('updateform.php?sid=<?php echo $id;?>','_self');
	   
	   </script><?php
   }
?>