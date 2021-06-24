<!DOCTYPE html>
<html style="background:url('https://media.architecturaldigest.com/photos/5d2c9e26ae81990009f6429f/16:9/w_2560%2Cc_limit/TAK%252520Room_by%252520Adrian%252520Gaut.jpg') fixed;
  background-size: 100%;">
<head>
  <meta charset="UTF-8">
<title>
Restaurant
</title>
<link rel="stylesheet" href="external.css">

<script>
$(document).ready(function(){
    $("myForm").validate();
});</script>
   
<script type="text/javascript">
      function validate()
      {
      
         if( document.myForm.fname.value ==  "" ||!/^[a-zA-Z]*$/g.test(document.myForm.fname.value))
         {
            alert( "Invalid First Name. Should contain only characters." );
            document.myForm.fname.focus() ;
            return false;
         }
         
         if( document.myForm.lname.value == "" || !/^[a-zA-Z]*$/g.test(document.myForm.lname.value))
         {
            alert( "Invalid Last Name. Should contain only characters." );
            document.myForm.lname.focus() ;
            return false;
         }
         
        } 
</script>
</head>

<body>
<div class="fullscreen nopadding">
  <div id="header">
    <img src="https://blog.codepen.io/wp-content/uploads/2012/06/Button-Black-Small.png" width="50px" />
    <ul>
      <li><a href="http://localhost/wdlproj2">Home</a></li>
      <li><a href="http://localhost/wdlproj2/restaurant.php"><font color="white">Restaurant</font></a></li>
      <li><a href="http://localhost/wdlproj2/banquet.php">Banquet</a></li>
      <li><a href="http://localhost/wdlproj2/membership.php">Membership</a></li>
    </ul>
  </div>
  <div class="header">
    <h1 style="font size:50px;">CLUB ROYAL</style></h1>
  </div>
</div>

<div class="white">
  <h1>About Us</h1>
  
  <p>Our luxuriously furnished restaurant serves a wide range of World Cuisine under the able direction of Award winning Revival Group. The range of cuisine offered in the restaurant is a mix of Indian, Oriental and Continental to cater to the taste buds of each of our discerning Guests. It is in the process of organizing food festivals. Enjoy our lip smacking Snacks as our Chefs churn out mouth-watering cuisine ordered by you is served. To avoid disappointment, it is advisable to always reserve a table.</p>

  <h2>Timings</h2>
  <p>Morning : 12:00 pm - 3:00 pm
<br>Evening : 7:00 pm - 11:00 pm</p>
  <br>
<br>
</div>

<div class="semitrans">
  <br><br>
  <h2>Table Booking</h2>
  <form name="myForm" action="" method="POST" id="myForm" onsubmit="return(validate());">
    <h3>
    Name:<br> <input type="text" name="fname" id ="fname" placeholder="Firstname" onchange="casechange1()" min="2" required> 
    <input type="text" name="lname" id ="lname" placeholder="Lastname" onchange="casechange2()" min="2" required><br>
    <div id="nlist"></div>
    Contact Number:<br><input type="tel" name="cnumber" id="cnumber" placeholder="91-**********" pattern="[0-9]{2}-[0-9]{10}" required><br>
    E-mail:<br><input type="email" name="mail1" id ="email" placeholder="Mail-Id"  required><br>
    Slot:<br><input type="radio" id="morning" name="slot" value="morning" checked>
    <label for="morning">Morning</label><br>
    <input type="radio" id="evening" name="slot" value="evening">
    <label for="evening">Evening</label><br>
    Date:<br><input type="date" value="date" name="Rdate" id="Rdate" min="19-09-2020"><br>
    <input type="submit" value="Submit" name="submit"></h3>
  </form>
 


<?php
require('dbconn.php');
if(isset($_POST["submit"]))
{
    $fname=$_POST["fname"];
    $lname=$_POST["lname"];
		$cnumber=$_POST["cnumber"];
		$rtimeslot=$_POST["slot"];
    $rdate=$_POST["Rdate"];
     $to_email = $_POST["mail1"];
   $subject = 'Club Royal:Restaurant Booking Confirmed';
   $message =  'Hello '.$fname.',
The booking of restaurant table is confirmed on '.$Rdate.', '.$rtimeslot.' slot. 

Regards,
Club Royal';

mail($to_email,$subject,$message);


		$sql_reg1 = "INSERT INTO `customer`(`Cid`, `Cfname`, `Clname`, `Cadd`, `Cgender`, `Cage`, `Cmobile`) VALUES 
		('','$fname','$lname',null,null,null,'$cnumber')";
		
		$current_id1 = mysqli_query($conn,$sql_reg1) or die("<b>ERROR:</b>Problem with Submitting<br/>".mysqli_error($conn));

    $custid="SELECT cid,cfname from customer order by cid desc limit 1";
   $current_id3 = mysqli_query($conn,$custid) or die("<b>ERROR:</b>Problem with Submitting<br/>".mysqli_error($conn));
    $row=mysqli_fetch_row($current_id3);
    $fk_cid=$row[0];

    $sql_reg2 = "INSERT INTO `restaurant` (`Billid`, `Rdate`, `Rtimeslot`,`Cid`) values
    ('','$rdate','$rtimeslot','$fk_cid')";

   $current_id2 = mysqli_query($conn,$sql_reg2) or die("<b>ERROR:</b>Problem with Submitting<br/>".mysqli_error($conn));
   

   echo "<b>Confirmation Sent</b>" ;
   
}
?>
</div>

<div class="dark">
  <p style="font-size: 25px;"> Contact:</p>
  <p>Address: CLUB ROYAL,Next to Shree Hospital,Anand Nagar, Chembur, Maharashtra - 400 071.<p>
  <p>Phone No.: +91-22-2523 1206</p>
  <p>e-mail ID: INFO@CLUBROYAL.IN</p>
</div>

</body>
</style>
</html>