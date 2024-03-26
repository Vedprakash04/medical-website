<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script>
function myfun(){
  var a = document.getElementById("mobilenumber").value;
  if(a==""){
  document.getElementById("messages").innerHTML=" (Please Fill Mobile No.)"
  return false;
  }
  
  if(isNaN (a)){
    document.getElementById("messages").innerHTML=" (Please Fill Valid Mobile No.)"
  return false;
  }
  if(a.length<10){
  document.getElementById("messages").innerHTML=" (Please Fill 10 Digit Mobile No.)"
  return false;
  }
  if(a.length>10){
  document.getElementById("messages").innerHTML=" (Please Fill 10 Digit Mobile No.)"
  return false;
  }
  if((a.charAt(0) !=9) && (a.charAt(0) !=8) && (a.charAt(0) !=7)){
    document.getElementById("messages").innerHTML=" (Please Fill Indian Mobile No.)"
  return false;
  }
}
</script>
 <style type="text/css">
     .container-fluid1 {
    padding-top: 30px;
    padding-bottom: 30px;
    background-color: #556B2F;}
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
  </style>
</head>
<body>
<div class="container" style="padding: 1px;">
<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand"><img src="SRMlogo.jpg"></a>
    
    <div class="collapse navbar-collapse" id="mynavbar">
      <ul class="navbar-nav me-auto">
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
</nav>


<div class="container-fluid1 mt-3 ">
  <h3 style="color: white; padding:`5px ;font-size: 30px; text-align: center;">GRIEVANCE BY SHARDA MEDICAL</h3>
</div><br>
<div class="container-fluid">
  <form onsubmit=" return myfun()" class="form-group" action="grievancedb.php"  name="form1" method="post" name="insertform" enctype="multipart/form-data">
<label class="left">Customer Name</label>
<input type="text" name="cjob"  class="form-control" required  placeholder="Enter your name" ><br><br>

 <label class="left">Contact </label> &nbsp;&nbsp;<span class="left phoneval" id="messages"></span>
 <input type="number" name="contact" required id="mobilenumber"  class="form-control"   placeholder="Contact No."><br><br>
 <span id="messages"></span>

<label>Address</label>
<input type="text" name="address"  class="form-control"  placeholder="Address "><br><br>

<div class="side-noti">
  <h2>10:00 AM to 9:00 PM</h2>
</div>




<label>Complaint</label>
<textarea rows="4" cols="50" name="complaint" required class="form-control upload"  placeholder="Pleaase lodge your complaint in about 4000 words "></textarea>

<label>feedback</label>
<textarea rows="4" cols="50" name="feedback" class="form-control upload"  placeholder="Pleaase lodge your feedback in about 4000 words "></textarea><br>

 <button type="submit" id="pass3" name="send" onsubmit="return myfun()" onclick="phonenumber(document.form1)"  class="btn btn-primary pd-btn">Submit</button>
 &nbsp;&nbsp;<a href="grievance.php"  class="btn btn-primary pd-btn-cancel">Cancel</a>

      </form>
      
</div><br>
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