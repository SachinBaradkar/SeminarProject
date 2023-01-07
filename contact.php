 <?php 
    // if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    //   $name = $_POST['name'];
    //   $email = $_POST['email'];
    //   $subject = $_POST['sub'];
    //   $messege = $_POST['msg'];
    
    // Connecting to the Database
    // $servername = "localhost";
    // $username = "root";
    // $password = "";
    // $database = "contacts";

    // Create a connection
    // $conn = mysqli_connect($servername, $username, $password, $database);
    // Die if connection was not successful
    // if (!$conn){
        // die("Sorry we failed to connect: ". mysqli_connect_error());
    // }
    // else{ 
      // Submit these to a database
      // Sql query to be executed 
      // $sql = "INSERT INTO `contactus` (`name`, `email`, `subject`, `messege`) VALUES ('$name', '$email', '$subject', '$messege ' )";
      // $result = mysqli_query($conn, $sql);

     

//     }

//   }

//
//Full Code of php file for mySql database connection with html form

$servername="localhost";
 $username="root";
 $password="";
 $databasename="contacts";

 $conn=mysqli_connect($servername,$username,$password,$databasename);
// now check the connection
 if(!$conn)
 {
 	die("Connection Failed:" . mysqli_connect_error());

 }

 if(isset($_POST['save']))
 {	
      $name = $_POST['name'];
      $email = $_POST['email'];
      $message = $_POST['message'];
     //  $message = $_POST['message'];
	 $sql_query = "INSERT INTO contactus (name,email,message)
    	 VALUES ('$name','$email','$message')";

	 if (mysqli_query($conn, $sql_query)) 
 	 {
     		echo "Submited successfully ! <br> Please press back to see CIIGMA website again.. ";
 } 
 	 else
      {
 		echo "Error " . $sql_query . mysqli_error($conn);
 	 }
 	 mysqli_close($conn);
  
 }

//  $conn= new mysqli ("localhost","root","",contacts) or die (not connected);
//  if($conn)
//  {echo "connected";}

 ?> 
