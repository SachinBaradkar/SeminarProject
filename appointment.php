<?php
 $servername="localhost";
 $username="root";
 $password="";
 $databasename="appointments";

 $conn=mysqli_connect($servername,$username,$password,$databasename);
// now check the connection
 if(!$conn)
 {
 	die("Connection Failed:" . mysqli_connect_error());

 }

 if(isset($_POST['appointment_submit']))
 {	
      $name = $_POST['name'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $appointment_date = $_POST['appointment_date'];
      $department = $_POST['department'];
      $doctor = $_POST['doctor'];
      $message = $_POST['message'];
	 $sql_query = "INSERT INTO appointments_table (name,email,phone,appointment_date,department,doctor,message)
    	 VALUES ('$name','$email','$phone','$appointment_date','$department','$doctor','$message')";

	 if (mysqli_query($conn, $sql_query)) 
 	 {
     		echo "Submited successfully ! <br> Please ignore above notice and press back to see CIIGMA website again.. ";
 } 
 	 else
      {
 		echo "Error " . $sql_query . mysqli_error($conn);
 	 }
 	 mysqli_close($conn);
  
 }

?>
