<?php session_start()
$error = '';
if (isset($_POST['submit'])) { if (empty($_POST['name']) || empty($_POST['design_no'])) { $error = "Username or Password is invalid"; } 
else{
 Define $username and $password $name = $_POST['name']; $design_no = $_POST['design_no']; 
 // mysqli_connect() function opens a new connection to the MySQL server. 
 $conn = mysqli_connect("localhost", "root", "", "miniproject"); 
 // SQL query to fetch information of registerd users and finds user match
 $query = "SELECT username, password from employee where name=? AND design_no=? LIMIT 1"; 
 // To protect MySQL injection for Security purpose 
 $stmt = $conn->prepare($query); 
 $stmt->bind_param($name, $design_no);
  $stmt->execute(); $stmt->bind_result($name, $design_no);
   $stmt->store_result(); 
   if($stmt->fetch()) 
 //fetching the contents of the row 
 { $_SESSION['login_user'] = $name; 
 // Initializing session
  header("location: profile.php"); 
 // Redirecting To Profile Page
  } 
  mysqli_close($conn);
  // Closing Connection 
} 
  ?> 