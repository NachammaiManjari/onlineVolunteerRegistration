    
    

<html>
<head>
<style>
.logo{
  float: left;
  width: 150px;
  height: 100px;
  
}
.banner1{
   height: 300px; 
    width: 100%; 
  
}
.head {
    background-color: #ffcc33;
     height: 100px; 
    width: 100%; 
}

nav {
    background-color: #333;
    margin: 0;
    overflow: hidden;
   height: 50px; 
}

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

/* Change the link color to #111 (black) on hover */
li a:hover {
  background-color: #111;
}
    .tstyle{
        font-size: 20px;
        font-family: sans-serif;
        margin-left: 35px;
    }
   
    .loginbox{
        width:320px;
        height:420px;
        background:#000;
        color:#fff;
        top:65%;
        left:30%;
        position: absolute;
        transform: translate(-50%,-50%);
        box-sizing: border-box;
    }
    .avatar{
        width: 100px;
        height: :100px;
        border-radius: 50%;
        position: relative;
        top:10px;
        left:calc(50%-50px);
        margin-left: 100px;
    }
    .btnstyle {
  background-color: #ffcc33;
  border-color: black;
    border-style: inset;
  color: black;
   text-align: center;
  text-decoration: none;
  display: inline-block;
 
  cursor: pointer;
    height:5%;
        width:100%;
    font-family:sans-serif;
    font-size: 20px;
}
    
               
    .footer-distributed{
	background-color: #292c2f;
	box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.12);
	box-sizing: border-box;
	width: 100%;
	text-align: left;
	font: bold 16px sans-serif;

	padding: 55px 50px;
	margin-top: 600px;
}

.footer-distributed .footer-left,
.footer-distributed .footer-center,
.footer-distributed .footer-right{
	display: inline-block;
	vertical-align: top;
}

/* Footer left */

.footer-distributed .footer-left{
	width: 40%;
}

/* The company logo */

.footer-distributed h3{
	color:  #ffffff;
	font: normal 36px 'Cookie', cursive;
	margin: 0;
}

.footer-distributed h3 span{
	color:  #5383d3;
}

/* Footer links */

.footer-distributed .footer-links{
	color:  #ffffff;
	margin: 20px 0 12px;
	padding: 0;
}

.footer-distributed .footer-links a{
	display:inline-block;
	line-height: 1.8;
	text-decoration: none;
	color:  inherit;
}

.footer-distributed .footer-company-name{
	color:  #8f9296;
	font-size: 14px;
	font-weight: normal;
	margin: 0;
}

/* Footer Center */

.footer-distributed .footer-center{
	width: 35%;
}

.footer-distributed .footer-center i{
	background-color:  #33383b;
	color: #ffffff;
	font-size: 25px;
	width: 38px;
	height: 38px;
	border-radius: 50%;
	text-align: center;
	line-height: 42px;
	margin: 10px 15px;
	vertical-align: middle;
}


/* Footer Right */

.footer-distributed .footer-right{
	width: 20%;
}

.footer-distributed .footer-company-about{
	line-height: 20px;
	color:  #92999f;
	font-size: 13px;
	font-weight: normal;
	margin: 0;
}

.footer-distributed .footer-company-about span{
	display: block;
	color:  #ffffff;
	font-size: 14px;
	font-weight: bold;
	margin-bottom: 20px;
}

.footer-distributed .footer-icons{
	margin-top: 25px;
}

.footer-distributed .footer-icons a{
	display: inline-block;
	width: 35px;
	height: 35px;
	cursor: pointer;
	background-color:  #33383b;
	border-radius: 2px;

	font-size: 20px;
	color: #ffffff;
	text-align: center;
	line-height: 35px;

	margin-right: 3px;
	margin-bottom: 5px;
}

    .tstyle2{
       top:40%;
        left:50%;
        position: absolute;
    }
      
     .tstyle3{
       top:60%;
        left:50%;
        position: absolute;
    }
      
</style></head>
<body style=" background-image: linear-gradient(to bottom right, white,#F1C40F)">

<section>
<header class="head">
<img src="logo.png" alt="logo" class="logo"  />
</header>
</section>

<section>
<nav>
        <ul>
            
            <li><a href="view.php">VIEW DETAILS</a> </li>
            <li><a href="fetch.php">FETCH DETAILS</a> </li>
             <li><a href="edit.php">EDIT ACTIVITY</a> </li>
             <li><a href="delete.php">DELETE ACTIVITY</a> </li>
            
       <li><a href="home.php">Logout</a> </li>
        </ul>
</nav>

</section>
  <section class="loginbox"> 
    <img src="avatar.png" class="avatar" >
        <h1 style="margin-left: 100px">Fetch Here</h1>
        <form method="GET" novalidate>
    <table cellspacing="10" class="tstyle" >

        
        <tr><td style="color: white;font-size: 15px;font-family:cursive">Enter Age Preference</td>
    <td><input type="text" name="eid" id="eid" required>
            <br>
            <span id="err1" style="color:#ffcc33 ;font-style: italic"></span>
            </td></tr>
     
 
        <tr>
        <td colspan="2" align="center">
            <input type="submit" name="fetchbtn" value="DISPLAY" id="fetchbtn" class="btnstyle">
            </td></tr>
    
        <tr>
        <td colspan="2" align="center">
            <input type="submit" name="fetchbtn2" value="TRAINED VOLUNTEER" id="fetchbtn2" class="btnstyle">
            </td></tr>
         <tr>
        <td colspan="2" align="center">
            <input type="submit" name="fetchbtn3" value="Male/Female Volunteer" id="fetchbtn3" class="btnstyle">
            </td></tr>
        
    </table>

            
        </form>
    </section>
    
    
        <script>
        var btn=document.getElementById('fetchbtn');
        function validate()
        {
            var eid=document.getElementById('eid');
            if(eid.checkValidity)
                {
                    document.getElementById("err1").innerHTML=eid.validationMessage;
                    
                }
            
        }
            
                    btn.onclick=function(e){
            var bool=validate();
          (!bool){
              e.preventDefault();
          }
        };
        

    </script>    
    
   
<?php
    $conn =mysqli_connect("localhost","root","mysql","org");
    if(!$conn)
{
    die('could not connect'.mysqli_error());
}
 $email=$_GET["eid"];
    if(isset($_GET["fetchbtn"])){
 
        
    $query="select * from demo where preference = '$email' ";
    if($res=mysqli_query($conn,$query)){
        if(mysqli_num_rows($res)>0){
            
        echo "<table border =2 class=tstyle2>";
         echo "<tr>";   
        echo "<th colspan=6>Volunteers preference by  age </th>";
            echo "</tr>";
        echo "<tr>";
        echo "<th>NAME </th>";
        echo "<th>GENDER</th>";
        echo "<th>DOB </th>";
        echo "<th>PHNO</th>";
        echo "<th>EMAIL-ID</th>";
        echo "<th>AgePref</th>";
        
        echo "</tr>";
    while($row=mysqli_fetch_array($res))
    {
      echo "<tr>";
     echo "<td>".$row['name']."</td>";
     echo "<td>".$row['sex']."</td>";
     echo "<td>".$row['dob']."</td>";
    echo "<td>".$row['phno']."</td>";
        echo "<td>".$row['emailid']."</td>";
        echo "<td>".$row['preference']."</td>";
        echo "</tr>";
    }
        echo "</table>";
    }
    
    
        }

        
        
    }
    
    ?>
    
<?php
    $conn =mysqli_connect("localhost","root","mysql","org");
    if(!$conn)
{
    die('could not connect'.mysqli_error());
}
    if(isset($_GET["fetchbtn2"])){
 
        
    $query="select * from demo where training = 'yes' ";
    if($res=mysqli_query($conn,$query)){
        if(mysqli_num_rows($res)>0){
            
        echo "<table border =2 class=tstyle2>";
         echo "<tr>";   
        echo "<th colspan=6>Trained Volunteers </th>";
            echo "</tr>";
        echo "<tr>";
        echo "<th>FIRST NAME </th>";
        echo "<th>GENDER</th>";
        
        echo "<th>PHNO</th>";
        echo "<th>EMAIL-ID</th>";
        
        
        echo "</tr>";
    while($row=mysqli_fetch_array($res))
    {
      echo "<tr>";
     echo "<td>".$row['name']."</td>";
     echo "<td>".$row['sex']."</td>";
     
    echo "<td>".$row['phno']."</td>";
        echo "<td>".$row['emailid']."</td>";
       
        echo "</tr>";
    }
        echo "</table>";
    }
    
    
        }

        
        
    }
    
    ?>

    <?php
    $conn =mysqli_connect("localhost","root","mysql","org");
    if(!$conn)
{
    die('could not connect'.mysqli_error());
}
    if(isset($_GET["fetchbtn3"])){
 
        
    $query="select * from demo where sex = 'male' ";
    if($res=mysqli_query($conn,$query)){
        if(mysqli_num_rows($res)>0){
            
        echo "<table border =2 class=tstyle2>";
         echo "<tr>";   
        echo "<th colspan=6>Male Volunteers </th>";
            echo "</tr>";
        echo "<tr>";
        echo "<th>FIRST NAME </th>";
        echo "<th>GENDER</th>";
        
        echo "<th>PHNO</th>";
        echo "<th>EMAIL-ID</th>";
        
        
        echo "</tr>";
    while($row=mysqli_fetch_array($res))
    {
      echo "<tr>";
     echo "<td>".$row['name']."</td>";
     echo "<td>".$row['sex']."</td>";
     
    echo "<td>".$row['phno']."</td>";
        echo "<td>".$row['emailid']."</td>";
       
        echo "</tr>";
    }
        echo "</table>";
    }
    
    
        }

       
      
        $query2="select * from demo where sex = 'female' ";
    if($res2=mysqli_query($conn,$query2)){
        if(mysqli_num_rows($res2)>0){
            
        echo "<table border =2 class=tstyle3 >";
         echo "<tr>";   
        echo "<th colspan=6>Female Volunteers </th>";
            echo "</tr>";
        echo "<tr>";
        echo "<th>FIRST NAME </th>";
        echo "<th>GENDER</th>";
        
        echo "<th>PHNO</th>";
        echo "<th>EMAIL-ID</th>";
        
        
        echo "</tr>";
    while($row=mysqli_fetch_array($res2))
    {
      echo "<tr>";
     echo "<td>".$row['name']."</td>";
     echo "<td>".$row['sex']."</td>";
     
    echo "<td>".$row['phno']."</td>";
        echo "<td>".$row['emailid']."</td>";
       
        echo "</tr>";
    }
        echo "</table>";
    }
    }
      
        
    }
    
    ?>

    

    
    
<footer class="footer-distributed">

			<div class="footer-left">

<img src="logo2.png" height="200px" width="200px">
				<p class="footer-links">
					<a href="home.html">Home</a>
					·
					<a href="#">Blog</a>
					·
					<a href="register.html">Register</a>
					·
					<a href="aboutus.html">About</a>
					·
					<a href="contact.html">Contact</a>
				</p>

				<p class="footer-company-name">CRY &copy; 2019</p>
			</div>

			<div class="footer-center">

				<div>
					<img src="loc.png" height="50px" width="50px">
					<p style="font-family:cursive;font-size:14px;color: white"><span >S – 1, 2nd floor, <br>Abdul Rafar Building, No .15/7 ,<br> Basha Street, Choolaimedu</span> Chennai, TamilNadu</p>
				</div>

				<div>
<img src="call.png" height="50px" width="50px">

					<p style="font-family:cursive;font-size: 14px;color: white">+1 555 123456</p>
				</div>

				<div>
					
					<p ><a href="" style="font-family:cursive;font-size: 14px;color: whitesmoke">cry@company.com</a></p>
				</div>

			</div>

			<div class="footer-right">

				<p class="footer-company-about" style="color:white">
					<span style="font-family:cursive;font-size: 35px;">About the company</span>
					A happy, healthy and creative child whose rights are protected and honoured in a society that is built on respect for dignity, justice and equity for all.
				</p>

				<div class="footer-icons">

					
					<a href="http://www.facebook.com/CRYINDIA"><img src="fb2.png" height="40px" width="40px"></a>
                    <a href="https://www.linkedin.com/company/cry"><img src="in.PNG" height="40px" width="40px"></a>
                    <a href="#"><img src="mail.png" height="40px" width="40px"></a>
					<a href="https://www.instagram.com/cry_india/"><img src="insta.png" height="40px" width="40px"></a>

				</div>

			</div>

		</footer>

    </body>
</html>