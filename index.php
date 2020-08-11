<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>EventPass</title>
	<!-- Latest compiled and minified CSS -->
	<meta name="description" content="Free Online EventPass Genaration">
  <meta name="keywords" content="Amit Solution,Pass Genaration">
  <meta name="author" content="Amit Solution">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha256-3blsJd4Hli/7wCQ+bmgXfOdK7p/ZUMtPXY08jmxSSgk=" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha256-xykLhwtLN4WyS7cpam2yiUOwr709tvF3N/r7+gOMxJw=" crossorigin="anonymous" />
<style>
 .loader {
    position: fixed;
    z-index: 99;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: white;
    display: flex;
    justify-content: center;
    align-items: center;
}

.loader > img {
    width: 100px;
}

.loader.hidden {
    animation: fadeOut 1s;
    animation-fill-mode: forwards;
}

@keyframes fadeOut {
    100% {
        opacity: 0;
        visibility: hidden;
    }
}

.thumb {
    height: 100px;
    border: 1px solid black;
    margin: 10px;
}
    img[src="https://cdn.000webhost.com/000webhost/logo/footer-powered-by-000webhost-white2.png"]{
      display:none;
  }
  .ak {
  -webkit-print-color-adjust: exact; 
}
  input[type=text]:focus, input[type=number]:focus, input[type=date]:focus, input[type=time]:focus {
  font-weight: bold;
  
}
  
  input[type=text], input[type=number], input[type=date], input[type=time] {
  border: 3px solid #101C54;
  outline-color: 3px solid green;
  
}
  @media screen and (max-width: 600px) {
  img[src="https://cdn.000webhost.com/000webhost/logo/footer-powered-by-000webhost-white2.png"]{
      display:none;
  }
  
  #mobile{
      display:block!important;
  }
}
</style>
</head>
<body>
    <div class="loader">
    <img src="load.gif" alt="Loading..." />
</div>
          
	<div class="container pt-3" id="h">
		<div class="card-header" style='background:#101c54;color:white'>
			<h5>EventPass Genaration</h5>
		</div>
		<div class="card-body" style='box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);'>
		<div class="row">
			<div class="col-sm-6">
	<form method="post">
	    <lable>Event Name</lable>
	<input type="text" name="event" id="event" class="form-control" placeholder="Enter Event" required="" style="text-transform:uppercase;">
</div>
<div class="col-sm-6">
     <lable>Event Vanue</lable>
	<input type="text" name="vanue" id="vanue" class="form-control" placeholder="Enter Vanue" required="" style="text-transform:uppercase;">
</div>
<div class="col-sm-6 my-2">
    <lable>Event Date</lable>
	<input type="date" name="date" id="date" class="form-control" placeholder="Enter Vanue" required="">
</div>
<div class="col-sm-6 my-2">
    <lable>Event Time</lable>
	<input type="time" name="time" id="time" class="form-control" placeholder="Enter Event" required="">
</div>
<div class="col-sm-6">
    <lable>Number of Pass</lable>
	<input type="number" name="num" id="num" class="form-control"  onblur="test()" placeholder="Enter Number of Pass" required="" style="text-transform:uppercase;">
</div>

<div class="col-sm-6 my-2 pt-3">
	<input type="submit" name="submit" class="btn btn-success" value="Genarate">
	<!--<button type="submit" class="btn btn-success" >Submit</button>-->
</div>
</div>
</div>
</div>
	<div id="mobile" style="display:none"><br><center><h5><font color='red'>Best View in Desktop or Laptop</font></h5></center></div>
	</form>
<?php
if(isset($_POST['submit']) && !empty($_POST['num']) && !empty($_POST['event']) && !empty($_POST['date']) && !empty($_POST['time']) && !empty($_POST['vanue']))
{
    echo "<script>$('#h').hide();</script>";
    echo "<script>document.getElementById('h').style.display = 'none';</script>";
    echo "<script>window.print();</script>";
    error_reporting(0);
	$no=strip_tags(strtoupper($_POST['num']));
	$event=strip_tags(strtoupper($_POST['event']));
	$date=$_POST['date'];
	$time=$_POST['time'];
	$vanue=strip_tags(strtoupper($_POST['vanue']));
require 'vendor2/autoload.php';
$generator = new Picqer\Barcode\BarcodeGeneratorHTML();
for($i=1;$i<=$no/2;$i++)
{
$bar2=time().$i;
$bar3=date('Ymdm').$i;
$barout1=$generator->getBarcode($bar2,$generator::TYPE_CODE_128);
$barout2=$generator->getBarcode($bar3,$generator::TYPE_CODE_128);
echo "<div class='container ak'>";
echo "<div class='row'>";
echo "<div class='col-sm-6'>";
echo "<div class='card-header s1' style='background:#101c54;color:white'>";
echo "<h5>".$event."</h5>";
echo "</div>";
echo "<div class='card-body s2' style='background:#feffe6; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);'>";
echo "<div class='row'>";
echo "<div class='col-sm-6'>";
echo $barout1.$bar2;
echo "</div>";
echo "<div class='col-sm-6'>";
echo "<b><center style='color:red'>SL NO-".$i."</center></b>";
echo "</div>";
echo "<div class='col-sm-6 my-2'>";
echo "<center><lable>Event Name</lable><br>";
echo "<b>".$event."</b></center>";
echo "</div>";

echo "<div class='col-sm-6 my-2'>";
echo "<lable>Event Vanue</lable><br>";
echo "<b>".$vanue."</b>";
echo "</div>";

echo "<div class='col-sm-6 my-3'>";
echo "<b class='btn btn-success'><i class='fa fa-calendar'></i> ".$date."</b>";
echo "</div>";

echo "<div class='col-sm-6 my-3'>";
echo "<center><b class='btn btn-info'><i class='fa fa-clock-o'></i> ".$time."</b></center>";
echo "</div>";


echo "</div>";
echo "</div>";
echo "</div>";
echo "<div class='col-sm-6'>";
echo "<div class='card-header s3' style='background:#101c54;color:white'>";
echo "<h5>".$event."</h5>";
echo "</div>";
echo "<div class='card-body s4' style='background:#feffe6; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);'>";
echo "<div class='row'>";
echo "<div class='col-sm-6'>";
echo $barout2.$bar3;
echo "</div>";
echo "<div class='col-sm-6'>";
echo "<b><center style='color:red'>SL NO-".$i."</center></b>";
echo "</div>";
echo "<div class='col-sm-6 my-2'>";
echo "<center><lable>Event Name</lable><br>";
echo "<b>".$event."</b></center>";
echo "</div>";

echo "<div class='col-sm-6 my-2'>";
echo "<lable>Event Vanue</lable><br>";
echo "<b>".$vanue."</b>";
echo "</div>";

echo "<div class='col-sm-6 my-3'>";
echo "<b class='btn btn-success'><i class='fa fa-calendar'></i> ".$date."</b>";
echo "</div>";

echo "<div class='col-sm-6 my-3'>";
echo "<center><b class='btn btn-info'><i class='fa fa-clock-o'></i> ".$time."</b></center>";
echo "</div>";

echo "</div>";
echo "</div>";
echo "</div>";
echo "</div>";
echo "</div>";
echo "<hr><br>";
}
}
?>
 </body>
 <script type="text/javascript">
 	function test(){
 		var num=$('#num').val();
 	if(no(num)==false){
    toastr.error('Number can not contain characters','Error',{timeOut:2000});
	 return 0;
	 
        }
 		if(num=='')
 		{
 		toastr.error('Pass Required','Error');
 			return 0;	
 		}
 		if(num>1000)
 		{
 			$('#num').val('');
 			//alert('Maximum Pass Genarate 1000 at a Time');
 			toastr.error('Maximum Pass Genarate 1000 at a Time','Error');
 		}
 		if(num<=0)
 		{
 			$('#num').val('');
 			//alert('Maximum Pass Genarate 1000 at a Time');
 			toastr.error('Please Valid input','Error');
 		}
 		
 	}
 	function no(no) {
		  var regex = /^([0-9])+$/;
		  if(!regex.test(no)) {
		    return false;
		  }else{
		    return true;
		  }
		}
 </script>
 <script>
    window.addEventListener("load", function () {
    const loader = document.querySelector(".loader");
    loader.className += " hidden"; // class "loader hidden"
});

</script>
</html>                 
                  