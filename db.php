Db.php <!DOCTYPE html> <html> <head>  <script src="https://ajax.googleapis.com/aj ax/libs/angularjs/1.7.8/angular.min .js"></script>  <script src="https://ajax.googleapis.com/aj ax/libs/jquery/3.4.1/jquery.min.js" ></script> 
10 
 
 
 <title></title> </head> <body>  <?php    $servername = "localhost";   $username = "root";   $password = "";   $dbname = "miniproject";   // Create connection   $conn = mysqli_connect($servername, $username, $password, $dbname);   // Check connection   if (!$conn) {       die("Connection failed: " . mysqli_connect_error());   } 
 
  $sql = "Select password from login where eid='".$_POST['userId']."'";   $result = mysqli_query($conn, $sql); 
 
  if (mysqli_num_rows($result) > 0) {       // output data of each row       while($row = mysqli_fetch_assoc($result)) {          $password = $row["password"];       }   } else {       echo "0 results";   }   if($password == $_POST['password'])   {    $sql1 = "Select design_no from employee where eid=".$_POST['userId']."";    $result1 = mysqli_query($conn, $sql);    if (mysqli_num_rows($result1) > 0) {     // output data of each row     while($row1 = mysqli_fetch_assoc($result1)) { 
    $design_no = $row1["design_no"];     }    } else {     echo "0 results";    }    if($design_no == " manager " )    {     include("trip.php");    }    else    {     include("bus.php");    }         }else{    echo "<script>alert('Please enter correct password...!');</script>";    include("index.php");   }   mysqli_close($conn); 
    ?> </body> </html> 
 