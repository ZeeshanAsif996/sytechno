<?php
   require "conn.php";
 echo "hello";
   if ($_SERVER['REQUEST_METHOD'] == 'POST') {

   	$aboutus = $_POST['aboutus'];   

   	$query = "UPDATE `aboutus` SET `aboutusdetail`= '$aboutus' WHERE id = 1";

   	if (mysqli_query($conn,$query)) {
   		echo "Success....!!";
   	}
    
    mysqli_close($conn);
   }
?>
