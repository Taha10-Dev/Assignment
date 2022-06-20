<!DOCTYPE html>
<?php
  session_start();
  if(!empty($_SESSION['sname']))
    header('Location: finalalumni.php');
?>
<html>
  <head>
  <meta charset="utf-8">
    <meta name="description" content="Almuntazir schools offer the best quality of education for your child, welcome.">
	  <meta name="keywords" content="Nursery, Special Education Needs, Primary, Secondary">
  	<meta name="author" content="Taha">
    <title>Alumni - Almuntazir Schools</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="icon" href="../img/favicon.png">
  </head>
  <body>
    <header >
      <div class="container">
        <div id="branding">
        <img class="almuntazirlogo" src="img/al_muntazir_logo-1.png" alt="almuntazir logo">
          <h1><span class="highlight">Almuntazir Schools</span> </h1>
        </div>
        <nav>
          <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="register.php">Register</a></li>
            <li class="current"><a href="alumni.php">Alumni</a></li>
            <li><a href="staff.html">Staff</a></li>
            <li><a href="contacts.html">Contacts</a></li>
          </ul>
        </nav>
      </div>
    </header>
 
    <section id="main">
        <div class="container">
          
          <form  class="form1" method="POST" action="php/alumnilogin.php">
            <h1 class="page-title"> School Alumni Portal</h1>
            <div>
                <input type="text" name="sname" placeholder=" Enter your surname" id="name">
                <input type="password" name="pword" placeholder="Password" id="pword">
            
            
              </div>
              <input type="submit" name="submit" value="LOGIN" id="btn">
            
            </div>
          </form>
          <p align="center"><i> ALUMNI! click <a href="alumniportal.html" >here</a> to register if you don't have an account</i></p>
          
        </div>
      </section>

      <footer>
        <div id="boxes">
          <div class="container">
            <div class="box box-links">
              <h3>Education Sources</h3>
              <ul class="links">
                <li><a href="nacte.go.tz">NACTE</a></li>
                <li><a href="tamisemi.go.tz">TAMISEMI</a></li>
                <li><a href="necta.go.tz">NECTA</a></li>
                <li><a href="tie.go.tz">TIE</a></li>
                <li><a href="tcu.go.tz">TCU</a></li>
                <li><a href="https://www.cambridgeinternational.org/">CAMBRIDGE</a></li>
              </ul>
              </div>
            <div class="box box-links">
              <h3>Social Medias</h3>
              <ul  class="links">
                <li><a href=" ">Facebook</a></li>
                <li><a href=" ">WhatsApp</a></li>
                <li><a href=" ">Linkedin</a></li>
                <li><a href=" ">Twiter</a></li>
                <li><a href=" ">Instagram</a></li>
              </ul></div>
            <div class="box box-links">
              <h3>Partnering with:</h3>
              <ul  class="links">
                <li><a href=" ">NBC</a></li>
                <li><a href=" ">CRDB</a></li>
                <li><a href=" ">Heritage Schools</a></li>
                <li><a href=" ">FEZA Schools</a></li>
                <li><a href=" ">UKAID</a></li>
              </ul></div>
          </div>
        </div>
      <div><p id="ls">Designed by Taha, Copyright &copy; 2022</p></div>
    </footer>
  </body>
</html>
