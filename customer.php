Customer.php <!DOCTYPE html> <html> <head> <link href="https://stackpath.bootstrapcd n.com/font-awesome/4.7.0/css/fontawesome.min.css" rel="stylesheet" integrity="sha384wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+ QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"> <style>  nav{         background: #FFA500;         overflow: auto;         width: 100%; } /*icons*/ .left{         float: left;       }       .right{         float: right; 
 
 
 
      }       li{         display: inline;       }       .right li a{         display: inline block;         padding: 3px;         text-align: center; 
 
      }       .fa {         padding: 3px;         font-size: 18px;         width: 20px;         text-align: center;         text-decoration: none;         margin: 5px 2px;         border-radius: 50% } .fa:hover {     opacity: 0.7; } .fa-facebook {   background: #3B5998;   color: white; } 
 
.fa-twitter {   background: #55ACEE;   color: white; } .fa-instagram {   background: #125688;   color: white; } .fa-google-plus {   background: #dd4b39;   color: white; } .fa-youtube {   background: #bb0000;   color: white; } .fa-pinterest {   background: #cb2027;   color: white; } .fa-linkedin {   background: #007bb5;   color: white; } 
 
 
.button {   background-color: #FFA500;   border: "white"; 
  color: black;   padding: 5px 31px;   text-align: center;   text-decoration: none;   display: inline-block;   font-size: 16px; } .btn {   background-color: #000080;   border: none;   color: white;   padding: 6px 32px;   text-align: center;   font-size: 16px;   margin: 4px 2px;   transition: 0.3s; } 
 
.btn:hover {   background-color: #FFFF00;   color: white; } #p02{  background-color: #000080; } 
 
 
select {         width: 1500px;         margin: 10px;  text-align: center;     } /*button in image */ .container {   position: relative;   width: 100%;   max-width: 400px; } 
 
.container img {   width: 100%;   height: 80%; } 
 
.container .bt {   position: absolute;   top: 80%;   left: 50%;   transform: translate(-50%, -50%);   -ms-transform: translate(-50%, 50%);   background-color: #000080;   color: white;   font-size: 16px;   padding: 12px 24px;   border: none; 
 
 
 
  cursor: pointer;   border-radius: 5px;   text-align: center; } .container .bt1 {   position: absolute;   top: 70%;   left: 50%;   transform: translate(-50%, -50%);   -ms-transform: translate(-50%, 50%);   background-color: #000080;   color: white;   font-size: 16px;   padding: 12px 24px;   border: none;   cursor: pointer;   border-radius: 5px;   text-align: center; } .container .bt:hover {    background-color: #FFFF00;   color: white; } .container .bt1:hover {    background-color: #FFFF00;   color: white; } .column {   float: left;   width: 25%;   padding: 50px; } 
 
/* align of image */ .row::after {   content: "";   clear: both;   display: table; } /* Add a hover effect (blue shadow) */ img:hover {   box-shadow: 0 0 2px 1px rgba(0, 140, 186, 0.5); }  .footer {    left: 0;    bottom: 0;    width: 100%;    background-color: black;    color: white;    text-align: center; } .contain {   position: relative; 
  text-align: center;   color: black;   width:100%; } .top-left {   position: absolute;   bottom: 100px;   left: 160px; } .top-right {   position: absolute;   bottom: 100px;   right: 160px; } 
 
 
 
* {   box-sizing: border-box; } 
 
.column1 {   float: left;   padding: 10px;   height: 300px;  } 
 
.left, .right {   width: 33%; } 
 
.middle {   width: 33%; } 
 
.row1:after {   content: "";   display: table;   clear: both; } </style> </head> <body> 
 
 
<br> <br> <img src="best.jpg" width="250" height="100"> <br> <br> <p id="p02"> <button class="btn" onclick="window.location.href='empl oyee.php';">employee</button> 
 
 
 
<button class="btn" onclick="window.location.href='cust omer.php';">customer</button> 
 
<div class="contain"> <img src="bus.jfif" width="100%" height="300" style="opacity:0.3"> <div class="topleft"><h1>Travel</h1> </div> 
 
</div> <br> <br> <br> <br> <div class="row2">   <div class="column2 left1" style="backgroundcolor:lightgrey;color:black;">     <h3>REGISTER</h3> 
 
  </div>      <div class="column2 right1" style="backgroundcolor:lightgrey;color:black;"> <form action="customer.php" method="post">     <p>Customer id</p>  <input type="text" name="cust_id" style="width:300px;"><br>  <p>First Name</p><br>  <input type="text" name="fname" style="width:300px;"><br>         <p>Last Name</p>  <input type="text" name="lname" style="width:300px;"><br>  <p>Age</p><br>  <input type="text" name="age" style="width:300px;"><br> <p>gender</p><br>  <input type="text" name="gender" style="width:300px;"><br>  <p>contact</p><br>  <input type="text" name="contact" style="width:300px;"><br> <p>address</p><br> 
 <input type="text" name="address" style="width:300px;"><br> 
 
 <input type="submit" class="btn" name="register" value="Account Created"> </form> <?php  $servername = "localhost";  $username = "root";  $password = "";  $dbname = "miniproject"; 
 
 $conn = new mysqli($servername, $username, $password, $dbname);   if ($conn>connect_error)    {        die("Connection failed: " . $conn->connect_error);   }   $cust_id= $_POST["cust_id"];   $fname= $_POST["fname"];   $lname= $_POST["lname"];   $age= $_POST["age"];   $gender= $_POST["gender"];   $contact= $_POST["contact"];   $address= $_POST["address"];         $sql = "INSERT INTO customer VALUES ('".$cust_id."','".$fname."','".$ln ame."','".$age."','".$gender."','". $contact."','".$address."')";      if ($conn>query($sql) === TRUE) {     echo "New record created successfully";   } else {     echo "Error: " . $sql . "<br>" . $conn->error;   } 
 
  $conn->close();  ?> 
 
 
 
  </div> </div> 
 
<div class="footer">   <p><font size="4">Made With Love From INDIA. 
 
<br>Can reach every where </font></p> </div> 
 
 
</body> </html> 
 
