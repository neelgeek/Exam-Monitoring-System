<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Responsive Side Menu</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  
<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
}

.title {
  color: grey;
  font-size: 18px;
}

button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
  a {
  text-decoration: none;
  font-size: 22px;
  color: black;
}

button:hover, a:hover {
  opacity: 0.7;
}

.card{
  border-width: 20px ;
}

</style>
</head>

<body>
  <nav class="navbar">
    <span class="open-slide">
      <a href="#" onclick="openSlideMenu()">
        <svg width="30" height="30">
            <path d="M0,5 30,5" stroke="#fff" stroke-width="5"/>
            <path d="M0,14 30,14" stroke="#fff" stroke-width="5"/>
            <path d="M0,23 30,23" stroke="#fff" stroke-width="5"/>
        </svg>
      </a>
    </span>
    
    <ul class="navbar-nav">
      <li><a href="#">Home</a></li>
      <li><a href="logout.php">Logout</a></li>
    </ul>
  </nav>

  <div id="side-menu" class="side-nav">
    <a href="#" class="btn-close" onclick="closeSlideMenu()">&times;</a>
    <h3>Admin Panel</h3>
    <a href="studreg.php">Student Registration</a>
    <a href="parentreg.php">Parent Registration</a>
    <a href="teachreg.php">Teacher Registation</a>
    <a href="#">Remove</a>
    <a href="#">Inspect</a>
    <a href="#">View Credentials</a>
    <a href="#">Logout</a>

  </div>

  <div id="main">
   <!-- <h1>Responsive Side Menu</h1>-->
  </div>

  <script>
    function openSlideMenu(){
      document.getElementById('side-menu').style.width = '250px';
      document.getElementById('main').style.marginLeft = '250px';
    }

    function closeSlideMenu(){
      document.getElementById('side-menu').style.width = '0';
      document.getElementById('main').style.marginLeft = '0';
    }
  </script>



<div class="card">
  <img src="user21.png" alt="John" style="width:100%">
  <h3>Welcome Admin</h3>
  <p class="title">Ramrao Adik Institute of Technology </p>
  <p>IT Department</p>
  <p>D.Y Patil University</p>
  <div style="margin: 24px 0;">
    
    <a href="#"><i class="fa fa-twitter"></i></a>  
    <a href="#"><i class="fa fa-linkedin"></i></a>  
    <a href="#"><i class="fa fa-facebook"></i></a> 
 </div>
 <p><button>Examination Monitoring System</button></p>

</div>


<br>
<br>

<!--FOOTER-->
<footer class="footer-distributed">

  <div class="footer-left">

    <h3>Exam<span>monitoring</span></h3>

    <p class="footer-links">
      <a href="#">xyz</a>
      ·
      <a href="#">xyz</a>
      ·
      <a href="#">xyz</a>
      ·
      <a href="#">xyz</a>
      ·
      <a href="#">xyz</a>
      ·
      <a href="#">xyz</a>
    </p>

    <p class="footer-company-name">NotFriendsTech &copy; 2018</p>
    </div>

  <div class="footer-center">

    <div>
      <i class="fa fa-map-marker"></i>
      <p><span>Ramrao Adik Institute of Technology</span> Nerul, Navi-Mumbai</p>
    </div>

    <div>
      <i class="fa fa-phone"></i>
      <p>+91 8850184206</p>
    </div>

  <div>
      <i class="fa fa-envelope"></i>
      <p><a href="mailto:support@company.com">NotFriendsTech@gmail.com</a></p>
    </div>
  </div>

  <div class="footer-right">

    <p class="footer-company-about">
      <span>About the company</span>
       something about exam monitoring sysytem.
    </p>

    
      <div class="footer-icons">
      <a href="#"><i class="fa fa-facebook"></i></a>
      <a href="#"><i class="fa fa-twitter"></i></a>
      <a href="#"><i class="fa fa-linkedin"></i></a>
      <a href="#"><i class="fa fa-github"></i></a>
    </div>
  </div>
</footer>


</body>
</html>
