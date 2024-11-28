<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width initial-scale=1.0">
        <link rel="stylesheet" href="Login.css">
    </head>
   <body> <div id="mysidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closenav()">&times</a>
    <a href="Login.html"><li>My Profile Login</li></a>
    <a href="#"><li>Reviews</li></a>
    <a href="#"><li>Job Vacancies</li></a>
    <a href="#"><li>Pay your bill</li></a>

    <p>Follow us for more updates on:</p>
  <div class="icons">
    <a href=""><img src="fbicon.png" width="40px" height="40px"></a>
    <a href=""><img src="igcon.png" width="40px" height="40px"></a>
    <a href=""><img src="xicon.png" width="40px" height="40px"></a>
  </div>        
</div>

<div id="partition">
  <div id="partition1">
    <img src="cpp/images.jfif" width="85px" height="50px" ><h2>SYDNEY INTERNATIONAL HOSPITAL</h2>
  </div>
   <div id="partition2">
    <div class="links">
     <a href="sidini1.html" style="border:10px solid transparent">HOME</a>
     <a href="appointment.html" style="border:10px solid transparent">APPOINTMENT</a>
     <a href="#" style="border:10px solid transparent">ABOUT US</a>
     <a href="floor" style="border:10px solid transparent">CONTACT US</a>
    </div> 
   </div>
</div>
<button class="menu" onclick="opennav()">&#9776</button>

 <div class="login" style="border:2px solid black;">
    <h2>SYDNEY LOGIN PORTAL </h2>
    <h4>(for doctors and patients)</h4>
    <div class="form" action="register1.php">
      <form action="register1.php" method="post"> 
        <input type="text" placeholder="Username" name = "username" required><br><br>
        <input type="password" placeholder="Password" required name="password"><br><br>
        <button name="submit">submit</button>  
    </form>


     
    </div> 
 </div>
 
      <script>
        function opennav(){
            document.getElementById("mysidenav").style.width="250px";
            document.getElementById("main").style.marginLeft="250px";
            document.body.style.backgroundColor="rgba(0,0,0,0.4)";
        }

        function closenav(){
            document.getElementById("mysidenav").style.width="0";
            document.getElementById("main").style.marginLeft="0";
            document.body.style.backgroundColor="white";
        }
    </script>
   </body> 
</html>