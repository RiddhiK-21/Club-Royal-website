<!DOCTYPE html>
<html style="background:url('https://www.princehotels.com/shinyokohama/wp-content/uploads/sites/8/2019/06/Z7T788%E5%B0%8F.jpg') fixed;
  background-size: 100%;">
<head>
  <meta charset="UTF-8">
<title>
Banquet Hall
</title>
<link rel="stylesheet" href="external.css">

<script>$(document).ready(function(){
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
         
        var ele = document.getElementsByName('type'); 
        var f = 0;
        for(i = 0; i < ele.length; i++) 
        { 
            if(ele[i].checked) 
            {f=1;}
        } 
            if(f == 0){alert("Please select the Banquet-Hall type");}
            
      } 
</script>
</head>

<body>
<div class="fullscreen nopadding">
  <div id="header">
    <img src="https://blog.codepen.io/wp-content/uploads/2012/06/Button-Black-Small.png" width="50px" />
    <ul>
      <li><a href="http://localhost/wdlproj2">Home</a></li>
      <li><a href="http://localhost/wdlproj2/restaurant.php">Restaurant</a></li>
      <li><a href="http://localhost/wdlproj2/banquet.php"><font color="white">Banquet</font></a></li>
      <li><a href="http://localhost/wdlproj2/membership.php">Membership</a></li>
    </ul>
  </div>
  <div class="header">
    <h1 style="font size:50px;">CLUB ROYAL</style></h1>
  </div>
</div>


<div class="white">
  <h1>About Us</h1>
  
  <p>CLUB ROYAL takes pride in presenting Grand Banquets, a new Standard in the Eastern Suburbs of Mumbai. Banquets offers multiple Venues which can cater from 50 Guests to 1000+ Guests. In a short span of one year, it has become a premier destination for Meetings, Incentives, Weddings and Gala Dinners with a dedicated Events team that assists in planning and conducting events from start to finish. Banquets offers a perfect setting to host Weddings, Conferences and Events with its unique style, elegance and attention to detail.</p>
  <br>
<br>
</div>


<div class="semitrans">
  <br><br><br>
  <div class="row">

  <div class="column" style="width:24%;">
    <div class="card" style="border-style: outset;">
      <h3>DIAMOND</h3>
      <p><img src="https://www.princehotels.com/shinyokohama/wp-content/uploads/sites/8/2019/06/Z7T788%E5%B0%8F.jpg" width="250" height="200" style="float:center;"> </p>
      <p>
          <ul>
          <li>Size: 100.00sq. mtrs</li> 
          <li>The preferred Venue for residential conferences and meetings. </li>
          <li>Capacity: 200-300</li>
          </ul>
        </p>
    </div>
  </div>

  <div class="column" style="width:23%;">
    <div class="card" style="border-style: outset;">
      <h3>REGALIA</h3>
      <p><img src="https://eventective-media.azureedge.net/2382252_lg.jpg" width="250" height="200" style="float:center;"> </p>
      <p style="font-size: 15px;">
        <ul>
        <li>Size: 300.00sq. mtrs</li>
        <li>The pillar-less ROYALE Ballroom with a high ceiling (10’ 2” / 3.10 mtrs.) can be partitioned into two sound proof sections. It is attached to a covered covered open air terrace</li>
        <li>Capacity: 100 - 150 </li>
      </ul>
      </p>
    </div>
  </div>

  <div class="column" style="width:23%;">
    <div class="card" style="border-style: outset;">
      <h3>LOTUS</h3>
      <p><img src="https://assets.hyatt.com/content/dam/hyatt/hyattdam/images/2014/09/21/1358/PUNHR-P014-Banquet-Hall.jpg/PUNHR-P014-Banquet-Hall.16x9.jpg?imwidth=1280" width="250" height="200" style="float:center;"> </p>
          <p style="font-size: 15px;">
          <ul>
          <li>Size: 1200.00sq. mtrs</li>
          <li>The open air venue is ideal for Weddings including Receptions and outdoor Exhibitions.</li>
          <li>Capacity: 800 - 1000 </li>
          </ul>
        </p>
    </div>
  </div>

  <div class="column" style="width:23%;">
    <div class="card" style="border-style: outset;">
      <h3>DAFFODIL</h3>
      <p><img src="https://www.oyorooms.com/blog/wp-content/uploads/2018/03/proper-seating-arrangement.jpg" width="250" height="200" style="float:center;"> </p>
      <p style="font-size: 15px;">
        <ul>
          <li>Size: 500.00sq. mtrs</li>
          <li>The preferred Venue for meetings, events and get togethers. </li>
          <li>Capacity: 50 - 100</li>
        </ul>
      </p>
    </div>
  </div>
  
</div>
 <br><br><br>
</div>

<div class="white">
  <br>
  <h2>Banquet Booking</h2>
  <form name="myForm" action="" method="POST" id="myForm" onsubmit="return(validate());" style="font-size: 20px;">
  
  <h3>
  Name:<br><input type="text" name="fname" id ="fname" placeholder="Firstname" onchange="casechange1()" min="4" required> 
  <input type="text" name="lname" id ="lname" placeholder="Lastname" onchange="casechange2()" min="4" required><br>
  Contact Number:<br><input type="tel" name="cnumber" id="cnumber" placeholder="91-**********" pattern="[0-9]{2}-[0-9]{10}" required><br>
  E-mail:<br><input type="email" name="mail1" id ="email" placeholder="Mail-Id"  required><br>
  Banquet-Hall Type:<br><input type="radio" id="Diamond" name="type" value="Diamond" checked>
  <label for="Diamond">Diamond</label><br>
  <input type="radio" id="Regalia" name="type" value="Regalia">
  <label for="Regalia">Regalia</label><br>
  <input type="radio" id="Daffodil" name="type" value="Daffodil">
  <label for="Daffodil">Daffodil</label><br>
  <input type="radio" id="Lotus" name="type" value="Lotus">
  <label for="Lotus">Lotus</label><br>
  Date:<br><input type="date" name="hdate" value="date" min="5-12-2020" id="hdate" required><br>
  Slot:<br><input type="radio" id="morning" name="slot" value="morning" checked>
  <label for="morning">Morning</label><br>
  <input type="radio" id="evening" name="slot" value="evening">
  <label for="evening">Evening</label><br>
   No. of members:<br><input type="number" name="nomem" id="nomem" min="1" required><br>
  <input type="submit" value="Submit" name="submit"></h3>
 
  </form>
  <br>



<?php
require('dbconn.php');
if(isset($_POST["submit"]))
{
      $hall="";
    $cost=10000;
    $num=0;
   if($_POST["type"]=="Diamond")
      { $hall="Diamond";
        $num=1.5;}
   else if($_POST["type"]=="Regalia")
      { $hall="Regalia";
        $num=3;}
   else if($_POST["type"]=="Daffodil")
      { $hall="Daffodil";
        $num=5;}
   else
      { $hall="Lotus";
        $num=7.5;}
        $cost=$cost*$num;

   $fname=$_POST["fname"];
   $lname=$_POST["lname"];
   $cnumber=$_POST["cnumber"];
   $hdate=$_POST["hdate"];
   $nomem=$_POST["nomem"];
   $type=$_POST["type"];
   $slot=$_POST["slot"];
 $to_email = $_POST["mail1"];
   $subject = 'Club Royal:Banquet-Hall Booking Confirmed';
   $message = 'Hello '.$fname.',
The booking of hall '.$hall.' is confirmed for '.$hdate.'. Approximate cost is '.$cost.'. 
 
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

   $sql_reg2 = "INSERT INTO `banquet`(`Hid`, `Rent`, `Capacity`, `Btimeslot`, `Bdate`, `Halltype`,`Cid`) VALUES
   ('','$cost','$nomem','$slot','$hdate','$type','$fk_cid')";
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