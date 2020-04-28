<?php
include("navbar.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src='https://kit.fontawesome.com/a076d05399.js'></script>
  <link rel="stylesheet" href="../css/bootstrap-datepicker.css">
  <script type="text/javascript" src="../bootstrap/bootstrap-datepicker.js"></script>

    
  <script>
    $(function(){
        $('.dates #date').datepicker({
            'format':'yyyy-mm-dd',
            'autoclose' : true
        });
    });
    </script>
    
</head>
    
    <style>
        
.border
{
    margin-left: -30px;
    height: 70px;
    width: 100%;
    border: none;
    padding: 5px 0px;
    background-color: white;
    box-shadow: 0px 1px 6px 0px;
}
form
{
   margin-top: 1px; 
   margin-left: 10%;
}
body
{
   background-color: #d9e8ff;         
}
.form-group 
{
    margin-left: -2px;
    text-align: right;
    padding-bottom: 22px;
    color: gray;
}
.form-control
{
    height: 50px; 
    text-align: right;
}
input[type=date]
{
    color: white;        
}
input[type=time]
{
   color: white;
}
.wrapper
{
   background-color: white;
   height: 550px;
   width: 1140px;
   margin-top: 20px;
   box-shadow:0px 1px 6px 0px; 
}
.bor_1
{
   background-color: #1a75ff;
   height: 250px;
   width: 300px;
   margin: 50px;
   box-shadow:0px 1px 6px 0px;   
}
.bor_2
{
   background-color: #1a75ff;
   height: 250px;
   width: 300px;
   margin: 50px;
   box-shadow:0px 1px 6px 0px; 
   padding-right: 200px;
   position: relative;
   left: 30%;
   bottom: 54.5%;
   padding: 0;
   

}
.bor_3
{
   background-color: #1a75ff;
   height: 250px;
   width: 300px;
   margin: 50px;
   box-shadow:0px 1px 6px 0px;
   position: relative;
   left: 60%;
   bottom: 109%;
  
}
    </style>
<body>
<img src="../img/15-152740_gotham-city-skyline-clip-art-png-download-simple.png" style="width:1499px;height:500px;">
<div class="container">
  <form class="form-inline" action="">
      <div class="border">
          
      <div class="form-group">
      <label for="from"><i class='fas fa-bus' style="font-size:24px; position: relative; left:140%; margin-bottom:0; color:gray; padding-left:0;"></i></label>
      <input type="text" class="form-control" id="from" placeholder="FROM" name="from">
      </div>
          
      <div class="form-group">
      <label for="to"><i class='fas fa-bus' style="font-size:24px; position: relative; left:140%; color:gray;"></i></label>
      <input type="text" class="form-control" id="to" placeholder="TO" name="to">
      </div>
          
      <div class="form-group">
      <div class="dates">
      <label for="date"><i class='far fa-calendar-alt' style="font-size:24px; position: relative; left:150%; color:gray;"></i></label>
      <input type="text" autocomplete="off" id="date" class="form-control" placeholder="YYYY-MM-DD"/>
      </div>
      </div>
          
      <div class="form-group">
      <label for="time"><i class='far fa-clock' style="font-size:24px; position: relative; left:150%; color:gray;"></i></label> 
      <input type="text" autocomplete="off" id="time" class="form-control" placeholder="HH-MM"/>
      </div> 
          
      <div class="form-group">
    <button type="submit" class="btn btn-default" style="height:50px; width:70px;"><i class='fas fa-search' style="font-size:30px;"></i></button>
          </div>
    </div>
      
  </form>
    
<div class="wrapper">
    <br>
    <i class='fa fa-handshake' style="font-size:100px; padding-left:500px; color:#778899;"></i>
    <h2 style="font-size:50px; text-align:center; font-family:Tw Cen MT; color:gray;"><b>WE PROMISE TO DELIVER</b></h2>
    
    <div class="bor_1">
    <br>
    <i class='fa fa-id-badge' style="font-size:50px; padding-left:120px; color:white;"></i>
    <h4 style="font-size:20px; text-align:center; font-family:Tw Cen MT; color:white;"><b>MAXIMUM CHOICE</b></h4>
    <br><br>
    <p style="font-size:16px; text-align:center; font-family:Tw Cen MT; color:white;">We give you the widest number of travel options across thousands of routes.</p>   
    </div>
    
    <div class="bor_2">
    <br>
    <i class='fa fa-phone' style="font-size:50px; padding-left:120px; color:white;"></i>
    <h4 style="font-size:20px; text-align:center; font-family:Tw Cen MT; color:white;"><b>SUPERIOR CUSTOMER SERVICE</b></h4>
    <br><br>
    <p style="font-size:16px; text-align:center; font-family:Tw Cen MT; color:white;">We put our experience and relationships to good use and are available to solve your travel issues.</p>  
    </div>
    
    <div class="bor_3">
    <br>
    <i class='fa fa-percent' style="font-size:50px; padding-left:120px; color:white;"></i>
    <h4 style="font-size:20px; text-align:center; font-family:Tw Cen MT; color:white;"><b>LOWEST PRICES</b></h4>
    <br><br>   
    <p style="font-size:16px; text-align:center; font-family:Tw Cen MT; color:white;">We always give you the lowest price with the best partner offers.</p> 
        
    </div> 
    </div>
</div>
</body>
</html>
<?php
include("footer.php");
?>