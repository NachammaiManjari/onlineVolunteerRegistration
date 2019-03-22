
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
        
    }
    
    .loginbox{
        width:900px;
        height:1400px;
        background:#000;
        color:#fff;
        top:130%;
        left:50%;
        position: absolute;
        transform: translate(-50%,-50%);
        box-sizing: border-box;
    }
    
    .avatar4{
        width: 100px;
        height: :100px;
        border-radius: 50%;
        position: relative;
        top:10px;
        left:calc(50%-50px);
        margin-left: 140px;
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
    height;40px;
        width:150px;
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
	margin-top:1700px;
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
          <li><a href="home.php">Home</a> </li>
            <li><a href="aboutus.php">About Us</a> </li>
             <li><a href="contact.php">Contact Us</a> </li>
             <li><a href="gallery.php">Gallery</a> </li>
             <li><a href="login.php">Logout</a> </li>
    
            <li><a href="signup.php">Sign Up</a> </li>
        </ul>
</nav>

</section>



    <section class="loginbox" >
        <h1  style="font-family:cursive;font-size: 35px;">  <img src="avatar4.png" class="avatar4">
        <b>REGISTRATION FORM</b></h1>

<form >   
    <table cellspacing="10" class="tstyle">

        
        <tr><td style="color:  #ffcc33;font-size: 25px;font-family:cursive">Name</td>
    <td><input type="text" name="fname" id="fname" pattern="[a-zA-Z]{5,30}" required>
             <br>
            <span id="err1" style="color:white;font-style: italic"></span></td>
    </tr>
     
      <tr><td style="color:  #ffcc33;font-size: 25px;font-family:cursive">Sex </td>  
          <td style="color: #ffcc33;font-size: 25px;font-family:cursive"><input type="radio" name="gender" value="male" >Male
      <input type="radio" name="gender" value="female">Female
          </td></tr>
      
<tr><td style="color: #ffcc33;font-size: 25px;font-family:cursive">Date of Birth</td>
    <td>  <input type="date" name="dob" id="dob" required>
    </td></tr>

           
<tr><td style="color: #ffcc33;font-size: 25px;font-family:cursive">Contact Number</td>
    <td>  <input type="tel" name="phno" id="phno" pattern ="[0-9]{10}" required>
    <br>
            <span id="err2" style="color:white;font-style: italic"></span> </td></tr>

      
                
<tr><td style="color: #ffcc33;font-size: 25px;font-family:cursive">Email Id</td>
    <td>  <input type="email" name="eid" id="eid" required>
   <br>
            <span id="err3" style="color:white;font-style: italic"></span>  </td></tr>

      
      
         <tr><td style="color: #ffcc33;font-size: 25px;font-family:cursive">Education Level </td>  
          <td style="color: #ffcc33;font-size: 25px;font-family:cursive"><input type="radio" name="edu" value="edu" >Primary
      <input type="radio" name="edu" value="secondary"  >Secondary
              <input type="radio" name="edu" value="ug"  >Under Graduate
              <input type="radio" name="edu" value="pg" >Post Graduate
              
          </td></tr>
      
  <tr><td style="color: #ffcc33;font-size: 25px;font-family:cursive">Registration district</td>
    <td style="color: #ffcc33;font-size: 25px;font-family:cursive"> <select name="dis">
  <option name="dis" value="Chennai">Chennai</option>
  <option name="dis" value="Salem">Salem</option>
  <option  name="dis" value="Coimbatore">Coimbatore</option>
  <option  name="dis" value="Madurai">Madurai</option>
</select></td>
    </tr>    
      
      
        <tr style="color: #ffcc33;font-size: 25px;font-family:cursive"><td>Volunteer Training </td>  
          <td style="color: #ffcc33;font-size: 25px;font-family:cursive"><input type="radio" name="train" value="yes" >Yes
      <input type="radio" name="train" value="no" >No
          </td></tr>
      
      
        <tr><td style="color: #ffcc33;font-size: 25px;font-family:cursive">Volunteer Experience </td>  
          <td style="color: #ffcc33;font-size: 25px;font-family:cursive"><input type="radio" name="exp" value="yes" >Yes
      <input type="radio" name="exp" id="eno" value="no" >No
          </td></tr>
    
<tr><td style="color:  #ffcc33;font-size: 20px;font-family:cursive">
Are you actively involved with any other NGO? <br>(if yes, please mention the name of the NGO and your involvement)
    <td> 
<input type = "text" name="activity" id="activity"  required>
 <br>
            <span id="err4" style="color:white;font-style: italic"></span>
    </td></tr>
        
      
        <tr><td style="color: #ffcc33;font-size: 25px;font-family:cursive">Identity </td>  
          <td style="color: #ffcc33;font-size: 25px;font-family:cursive"><input type="radio" name="identity" value="Student" >Student
      <input type="radio" name="identity" value="Employed" >Employed
              <input type="radio" name="identity" value="Unmployed" >Unmployed
              <input type="radio" name="identity" value="Housewife" >Housewife
              <input type="radio" name="identity" value="Retired" >Retired
          </td></tr>
      

          <tr><td style="color:  #ffcc33;font-size: 25px;font-family:cursive">Type of Service</td>
    <td style="color: #ffcc33;font-size: 25px;font-family:cursive"> 
        <select name="serv" id="serv">
</select></td>
    </tr>    
        
        
        
        <tr><td style="color: #ffcc33;font-size: 25px;font-family:cursive">Preference on age of service  </td>  
          <td style="color: #ffcc33;font-size: 25px;font-family:cursive">
      <input type="checkbox" name="apref" value="nopref" >No preference
 <input type="checkbox" name="apref" value="children" >Children
    <input type="checkbox"  name="apref" value="youth" >Youth
 <input type="checkbox" name="apref" value="adult" >Adult
 <input type="checkbox" name="apref" value="elder" >Elderely
          </td></tr>
      
        
      
    
       <tr><td style="color:  #ffcc33;font-size: 25px;font-family:cursive">Your Availablility</td>
    <td style="color: #ffcc33;font-size: 25px;font-family:cursive"> 
        <select id="avail" name="avail">
  <option value="50">Weekdays</option>
  <option value="100">Weekends</option>
  <option value="80">Both</option>
  <option value="150">Varies</option>
</select></td>
    </tr>    
        
      <tr>
        <td style="color: #ffcc33;font-size: 25px;font-family:cursive">
            Why are you interested in
            <br>becoming an volunteer?
          </td>
          <td>
          <textarea type="text" name="msg" id="msg" required></textarea>
           <br>
            <span id="err5" style="color:white;font-style: italic"></span></td>
        </tr>
        
   
        
        <tr><td colspan="2" style="color: #ffcc33;font-size: 18px;font-family:monospace"> <input type="checkbox" required>
I, hereby declare that the above statements are true. This is my commitment to serve as an active volunteer with
CRY for a period of one year. I shall pursue to promote CRY’s endeavors and never
do anything that will damage its values or vision. 
</td></tr>
        
        <tr>
        <td colspan="2" align="center">
            <input type="submit" name="submit" value="REGISTER" id="btn" class="btnstyle">
            </td></tr>
    </table>
        
    </form>
    
    </section>
    
     <script>
        var btn=document.getElementById('btn');
        function validate()
        {
            var fname=document.getElementById('fname');
            if(fname.checkValidity)
                {
                    document.getElementById("err1").innerHTML=fname.validationMessage;
                    
                }
            else if(fnameame.validity.patternMismatch)
                {
                    document.getElementById("err1").innerHTML=fname.validationMessage;
                }
            
             var phno=document.getElementById('phno');
            if(phno.checkValidity)
                {
                    document.getElementById("err2").innerHTML=phno.validationMessage;
                    
                }
            else if(phno.validity.patternMismatch)
                {
                    document.getElementById("err2").innerHTML=phno.validationMessage;
                }
            
            var eid=document.getElementById('eid');
            if(eid.checkValidity)
                {
                    document.getElementById("err3").innerHTML=eid.validationMessage;
                    
                }
             else if(eid.validity.patternMismatch)
                {
                    document.getElementById("err3").innerHTML=eid.validationMessage;
                }
            var activity=document.getElementById('activity');
            if(activity.checkValidity)
                {
                    document.getElementById("err4").innerHTML=activity.validationMessage;
                    
                }
            var msg=document.getElementById('msg');
            if(msg.checkValidity)
                {
                    document.getElementById("err5").innerHTML=msg.validationMessage;
                    
                }
           

        }
    
        function calc()
        {
            var n1=parseInt(document.getElementById('serv').value);
            var n2=parseInt(document.getElementById('avail').value);
            var res=n1+n2;
            return res;
        }
                    btn.onclick=function(e){
            var bool=validate();
          var ans=calc();
            alert("Registration fee:" +ans);
           
        };
        


         
    </script>    
    
    
<footer class="footer-distributed">

			<div calcfee();class="footer-left">

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




