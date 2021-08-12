<?php
session_start();
$con = mysqli_connect('localhost','root');
if($con){
echo" connection successful";

}else{
echo " no connection";
}
mysqli_select_db($con, 'dbms');
// $name = $_POST['user'];
// $pass = $_POST['password'];
 $fname = $_POST['firstname'];
 $lname = $_POST['lastname'];
 $rno = $_POST['rno'];
 $mno = $_POST['mobileno'];
 $year = $_POST['year'];
 ;
$q = " select * from visiting where rno= '$rno' && mno = '$mno' ";
$result = mysqli_query($con, $q);
$num = mysqli_num_rows($result);
if($num == 1){
echo" duplicate data ";
}else{
$qy= " insert into visiting(fname,lname,source,destination,busticket)
values('$fname','$lname','$rno','$mno', '$year')";
mysqli_query($con, $qy);
}
?>