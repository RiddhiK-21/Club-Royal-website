<!DOCTYPE html>
<html style="background: url('https://www.clubemerald.in/wp-content/uploads/2018/10/exterior.jpg') fixed;
  background-size: 100%;">
<head>
  <meta charset="UTF-8">
<title>
Membership
</title>
<link rel="stylesheet" href="external.css">

<script>$(document).ready(function(){
    $("myForm").validate();
});</script>
<script type="text/javascript" >
   
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
      <li><a href="http://localhost/wdlproj2/restaurant.php">Restaurant</a></li>
      <li><a href="http://localhost/wdlproj2/banquet.php">Banquet</a></li>
      <li><a href="http://localhost/wdlproj2/membership.php"><font color="white">Membership</font></a></li>
    </ul>
  </div>
  <div class="header">
    <h1 style="font size:50px;">CLUB ROYAL</style></h1>
  </div>
</div>



<div class="white">
  
  <h1>About Us</h1>
  
  <p>CLUB ROYAL is the newest and the youngest Club in the city of Mumbai.It is on its well on its way to becoming a Premier Life Style Destination in the heart of the Mumbai. CLUB ROYAL is a multi-activity center for sports and entertainment with modern amenities and excellent services.</p>
  
  <p>A Gaming Zone, Swimming Pool,Gymnasium, Kid’s Play Zone and a bunch of other lifestyle activities provides the right environment for you and your family.</p>
  <br>
<br>

</div>

<div class="semitrans">
  <br><br><br>
  <div class="row">

  <div class="column" style="width:30%;">
    <div class="card" style="border-style: outset;">
      <h3>Couple Membership</h3>
        <p >
          <ul>
          <li>3 years membership</li>
          <li>Any individual, Husband & Wife.</li>
          </ul>
        </p>
    </div>
  </div>

  <div class="column" style="width:30%;">
    <div class="card" style="border-style: outset;">
      <h3>Family Membership</h3>
      <p style="font-size: 15px;">
        <ul>
        <li>3 years membership</li>
        <li>Any individual, his/ her spouse and 2 children(below age of 21).</li>
      </ul>
      </p>
    </div>
  </div>

  <div class="column" style="width:30%;">
    <div class="card" style="border-style: outset;">
      <h3>Individual Membership</h3>
      <p style="font-size: 15px;">
        <ul>
          <li>3 years membership</li>
          <li>Any individual(above 21)</li>
        </ul>
      </p>
    </div>
  </div>
  
    </div>

 <br>
  <div class="column" style="width:47%;">
    <div class="card" style="border-style: outset;">
      <h3>Corporate Membership</h3>
        <p style="font-size: 15px;">
          <ul>
          <li>5 years membership</li>
          <li>A Public Ltd.Co./ Private Ltd. Co. or a firm or any Association/ Organisation nominating one or more executives as members, each nominees spouse and 2children, ( below 21 years of age).</li>
          <li>There will be a charge of 5% extra on prevailing membership rate for a change in Nominee.</li>
          </ul>
        </p>
    </div>
  </div>

  <div class="column" style="width:47%;">
    <div class="card" style="border-style: outset;">
      <h3>Senior Citizen Membership</h3>
      <p style="font-size: 15px;">
        <ul>
       <li>3 years membership</li>
        <li>Any individual, his/her spouse above the age 60 years.</li>
      <li>Age proof required.</li>
      </ul>
      </p>
    </div>
  </div>
 
</div>
 <br><br><br>
</div>

<div class="semitrans">
  <br>
  <h2>Membership Form</h2>
  <br>
      <form name="myForm" action="" method="POST" id="myForm" onsubmit="return(validate());">
      <h3>
      Name:<br><input type="text" name="fname" id ="fname" placeholder="Firstname" onchange="casechange1()" min="4" required> 
      <input type="text" name="lname" id ="lname" placeholder="Lastname" onchange="casechange2()" min="4" required><br>
      Address:<br><input type="textarea" name="Address"><br>
      Contact Number:<br><input type="tel" name="cnumber" id="cnumber" placeholder="91-**********" pattern="[0-9]{2}-[0-9]{10}" required><br>
      E-mail:<br><input type="email" name="mail1" id ="email" placeholder="eMail-Id"  required><br>
      Age :<input type="number" name="cage" required=""><br>
      Gender:<br><input type="radio" id="Male" name="slot" value="Male" checked="">
      <label for="Male">Male</label><br>
      <input type="radio" id="Female" name="slot" value="Female">
      <label for="Female">Female</label><br>
      <input type="radio" id="Other" name="slot" value="Other">
      <label for="Other">Other</label><br>
      Type of Membership:<br>
      <select name="membership">
      	<option value="Individual Membership">Individual Membership</option>
      	<option value="Couple Membership">Couple Membership</option>
      	<option value="Family Membership">Family Membership</option>	
      	<option value="Senior Citizen Membership">Senior Citizen Membership</option>	
      	<option value="Corporate Membership">Corporate Membership</option>
      </select>
      <br>
      <input type="submit" value="submit" name="submit"></h3>
    </form>
  <br><br>


<?php
	require('dbconn.php');
	if(isset($_POST["submit"]))
	{
        $name=$_POST["fname"];
        $mem="";
        $cost=1000;
        $num=0;
        if($_POST["membership"]=="Individual Membership")
        { $mem="Individual Membership";
        $num=1.5;
        }
        else if($_POST["membership"]=="Couple Membership")
        {$mem="Couple Membership";
        $num=3;}
        else if($_POST["membership"]=="Family Membership")
        {$mem="Family Membership";
        $num=5;}
        else if($_POST["membership"]=="Senior Citizen Membership")
        {$mem="Senior Citizen Membership";
        $num=3;}
        else
        {$mem="Corporate Membership";
        $num=8;}
        $cost=$cost*$num;

       echo "<b>Confirmation Sent</b>" ;
       
		$fname=$_POST["fname"];
        $lname=$_POST["lname"];
		$cnumber=$_POST["cnumber"];
        $address=$_POST["Address"];
        $age=$_POST["cage"];
		$gender=$_POST["slot"];
        $mem=$_POST["membership"];
         $to_email = $_POST["mail1"];
       $subject = 'Club Royal: Membership Booking Confirmed';
    $message = 'Hello '.$fname.',
 Thank you for taking '.$mem.'. Approximate cost is '.$cost.'. 
 
 Regards,
 Club Royal';
  mail($to_email,$subject,$message);

        $sql_reg1 = "INSERT INTO `customer`(`Cid`, `Cfname`, `Clname`, `Cadd`, `Cgender`, `Cage`, `Cmobile`) VALUES 
		('','$fname','$lname','$address','$gender','$age','$cnumber')";
    $current_id1 = mysqli_query($conn,$sql_reg1) or die("<b>ERROR:</b>Problem with Submitting<br/>".mysqli_error($conn));

    $custid="SELECT cid,cfname from customer order by cid desc limit 1";
   $current_id3 = mysqli_query($conn,$custid) or die("<b>ERROR:</b>Problem with Submitting<br/>".mysqli_error($conn));
    $row=mysqli_fetch_row($current_id3);
    $fk_cid=$row[0];
                
		$sql_reg2 = "INSERT INTO `membership`(`Mid`, `Mtype`, `Cost`,`Cid`) VALUES
		('','$mem','$cost','$fk_cid')";
		$current_id2 = mysqli_query($conn,$sql_reg2) or die("<b>ERROR:</b>Problem with Submitting<br/>".mysqli_error($conn));

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