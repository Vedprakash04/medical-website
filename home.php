<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <style type="text/css">
   .bg-4 {
    padding-top: 10px;
    padding-bottom: 10px;
    background-color: #556B2F;
    

  }
  
  .container-fluid1 {
    padding-top: 70px;
    padding-bottom: 70px;}
  .bg-1 { 
    background-color:white;
    color:black;

  }
  .bg-2 { 
    background-color:white; /* Dark Blue */
    color: black;
  }
  .bg-3 { 
    background-color: #ffffff; /* White */
    color: #555555;
  }
  .container1-fluid{
    border: 5px solid grey;
  border-radius: 8px;
  padding: 5px;
  }
  .side-noti{
     position: fixed;
     right: 0px;
     top: 50px;
     border-color: darkgrey;
     border-style: solid;
     background-color:#556B2F ;
     color: white;
     border-bottom-left-radius: 20px;

    }
    .side-noti2{
     position: fixed;
     right: 0px;
     top: 110px;
     border-color: darkgrey;
     border-style: solid;
     background-color:#556B2F ;
     color: white;
     border-bottom-left-radius: 20px;

    }
    
  </style>
</head>
<body>
 <div class="container" style="padding: 1px;">
<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand"><img src="SRMlogo.jpg">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="mynavbar">
      <ul class="navbar-nav me-auto" >
        <li class="nav-item">
          <a class="nav-link" href="home.php">Home</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="service.php">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="gallery.php">Gallery</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact As</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="grievance.php">Grievance</a>
        </li>
        
      </ul>
    </div>
  </div>
</nav><br>

<!-- First Container -->
<div class="container1-fluid bg-1 text-center col-md-12"style="overflow: auto;">
 <div class="col-md-6"  style="float: left; "> <h3 class="margin" style=" font-family: Copperplate, Papyrus,fantasy;float: left;padding-top: 100px;padding-left: 50%;"><p><b>Hii</b></p><b>I'm your pharmcist</b></h3><br><br>
 <div class="services-read-more" style="box-sizing: border-box;
                    display: block;
                    text-align: center;
                    padding-bottom: 10px;
                    padding-left: 32%;
                    ">
                      <a style="border: 1px solid #c3c3c3;
                      border-radius: 20px;
    color: white;
    display: inline-block;
    font-size: 16px;
    padding: 15px 30px;
    text-transform: uppercase;
    font-weight: 600;
    transition: all 0.5s;
    text-decoration: none;
        background-color: #FF4500;
            " href="https://wa.me/+917999878432?text=Order Now" target="_blank">Order Now &nbsp;<img src="wp.png"></a>
                    </div>
                  </div>

  <div class="col-md-6" style="float: right;"><img src="vv4.jpeg" class="img-responsive col-md-6 img-circle margin" style="display:inline;border-style: outset;border-radius: 10px;border-color: white;" alt="Bird" width="350" height="350" ></div>
</div>
<div class="side-noti">
  <h2>10:00 AM to 9:00 PM</h2>
</div>
<div class="side-noti2">
  <a style="text-decoration:none;font-size: 30px;color: white;" href="https://www.google.com/maps/place/Sharda+Medical/@21.3202778,81.6389094,20.75z/data=!4m6!3m5!1s0x3a28e7127c0212cd:0xe5409cfc535d2036!8m2!3d21.3202721!4d81.6390651!16s%2Fg%2F11k9pjdpds?entry=ttu">Location of medical</a>
</div>
<div class="side-noti"style="top: 170px;font-size: 30px;">
  <a style="text-decoration: none;color: white;" href="tel:7999878432">Call now</a>
</div>
<br>

<!-- Second Container -->
<div class="container1-fluid bg-2 col-md-12 text-center" style="overflow:auto;padding-top:30px;">
  <div class="col-md-6" style="float:right; padding-top: 50px;font-family: Copperplate, Papyrus,fantasy;">
  <h3 class="margin"><b>ABOUT SHARDA MEDICAL</b></h3></div>
  <div class="col-md-6" style="float:left;font-family: 'Trebuchet MS', sans-serif;">
  <p >Offering a superior buying experience, we endow our esteemed customers with the best prices in market. we strive to achieve the highest level of customer satisfaction. Equipped with a well-informed team, using state of the art E-commerce platform, and prompt customer support system, we aim to offer our customers with unparalleled services.</p>
  <p1>So, make a move and Happy Shopping !!!!</p1>
  <a href="service.php" class="btn btn-default btn-lg" style="color: red;">
    <span class="glyphicon glyphicon-search"></span> More >>
  </a>
</div>
</div><br>

<!-- Third Container (Grid) -->
  
 

<footer class="container-fluid1 bg-4 text-center " style="overflow:auto;  border-radius: 8px;">
  <div class="col-md-6" style="float:right;padding-top: 60px;">
  <a class="navbar-brand"><img src="SRMlogo.jpg"></a>
  <p style="color:white;">2021 <a href="home.php" style="text-decoration:none ;color: lightgreen;">SHARDA MEDICAL</a>. ALL Rights Reserved.<br>Site Designed & Hosted By <a href="sudodeveloper.com" style="text-decoration:none;color: white;">SudoDevelop</a></p></div>


  <div class="col-md-6" style="float:left;">
    <h2 style="
    color: #071041;
    font-weight: 600;
    text-transform: uppercase;
    font-size: 30px;
    text-align: center;">RAWA BHATA</h2>
    <p style="    text-align: center;color: white;">Durga Chowk, Rawabhata<br>Transport Nagar, Bhanpuri<br> Raipur<br>Chhattisgarh 493221<br>
    Mobile:8225087358<br></p>

                    
                  
            <div style="text-align: center;padding-bottom: 10px;" class="services-read-more">
                      <a style="border: 1px solid #c3c3c3;
                      border-radius: 20px;
    color: white;
    display: inline-block;
    font-size: 16px;
    padding: 15px 30px;
    text-transform: uppercase;
    font-weight: 600;
    transition: all 0.5s;
    text-decoration: none;
        background-color: #FF4500;
            "href="https://www.google.com/maps/place/Sharda+Medical/@21.3202778,81.6389094,20.75z/data=!4m6!3m5!1s0x3a28e7127c0212cd:0xe5409cfc535d2036!8m2!3d21.3202721!4d81.6390651!16s%2Fg%2F11k9pjdpds?entry=ttu" target="_blank">Location &nbsp;<img src="location.png"></a>
                    
                 

</div>
</footer>
</div>
</body>
</html>
