<?php  session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Music Corner</title>
<meta charset="utf-8">

<META NAME="description" CONTENT="information of all branded music instrument of the shop also all the purchase details and all the services like repair and other instruments purchase in udupi and manipal">
<META NAME="keywords" CONTENT="music shop in manipal,music shops in udupi,music instruments,music instruments in udupi,music instruments in manipal,music instruments repair,insrtuments on rent ,cheap music instruments,branded music instruments">
<META NAME="generator" CONTENT="www.onlinemetatag.com">


<link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/layout.css" type="text/css" media="screen">
<script type="text/javascript" src="js/jquery-1.6.min.js"></script>
<script src="js/cufon-yui.js" type="text/javascript"></script>
<script src="js/cufon-replace.js" type="text/javascript"></script>
<script src="js/Open_Sans_400.font.js" type="text/javascript"></script>
<script src="js/Open_Sans_Light_300.font.js" type="text/javascript"></script> 
<script src="js/Open_Sans_Semibold_600.font.js" type="text/javascript"></script>  
<script src="js/FF-cash.js" type="text/javascript"></script>

<!-- gallery pop up box -->

  

  <link href="css_pirobox/black/style.css" media="screen" title="black" rel="stylesheet" type="text/css" />

  <link href="css_pirobox/css_page.css" media="screen" rel="stylesheet" type="text/css" />

  <script src="js/jquery.js" type="text/javascript"></script>
  
  
  
    <script type="text/javascript" src="js/piroBox.1_2.js"></script>

  <script type="text/javascript">

  $(document).ready(function() {

  $().piroBox({

  my_speed: 600, //animation speed

  bg_alpha: 0.5, //background opacity

  radius: 4, //caption rounded corner

  scrollImage : false, // true == image follows the page, false == image remains in the same open position

  pirobox_next : 'piro_next', // Nav buttons -> piro_next == inside piroBox , piro_next_out == outside piroBox

  pirobox_prev : 'piro_prev',// Nav buttons -> piro_prev == inside piroBox , piro_prev_out == outside piroBox

  close_all : '.piro_close',// add class .piro_overlay(with comma)if you want overlay click close piroBox

  slideShow : 'slideshow', // just delete slideshow between '' if you don't want it.

  slideSpeed : 4 //slideshow duration in seconds(3 to 6 Recommended)

  });

  });

  </script>
  
  
  
  <!-- close pop up -->
  
  




<!--[if lt IE 7]>
	<div style=' clear: both; text-align:center; position: relative;'>
		<a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://www.theie6countdown.com/images/upgrade.jpg" border="0"  alt="" /></a>
	</div>
<![endif]-->
<!--[if lt IE 9]>
	<script type="text/javascript" src="js/html5.js"></script>
	<link rel="stylesheet" href="css/ie.css" type="text/css" media="screen">
<![endif]-->
</head>
<body id="page4">
<!-- header -->
	<div class="bg">
		<div class="main">
			<header>
				<div class="row-1">
					<h1>
						<a class="logo" href="index.php">MUSIC CORNER</a>
						<!--<strong class="slog">The most creative ideas</strong> -->
					</h1>
				<!--	<form id="search-form" action="" method="post" enctype="multipart/form-data">
						<fieldset>
							<div class="search-form">					
								<input type="text" name="search" value="Type Keyword Here" onBlur="if(this.value=='') this.value='Type Keyword Here'" onFocus="if(this.value =='Type Keyword Here' ) this.value=''" />
								<a href="#" onClick="document.getElementById('search-form').submit()">Search</a>									
							</div>
						</fieldset>
					</form> -->
				</div>
				<div class="row-2">
					<nav>
						<ul class="menu">
						  <li><a href="index.php">Home Page</a></li>
						  <li><a href="about.php">About Us</a></li>
						  <li><a href="services.php">Our Services</a></li>
						  <li><a class="active" href="products.php">Our Products</a></li>
						  <li class="last-item"><a href="contacts.php">Contact Us</a></li>
						</ul>
					</nav>
				</div>
			</header>
<!-- content --><div class="ic">MUSIC CORNER ALL TYPES OF MUSICAL INSTRUMENTS</div>
			<section id="content">
				<div class="padding">
					<div class="wrapper margin-bot">
						<div class="col-3">
							<div class="indent">
                             <?php
								 if(isset($_GET['ind_id']))
								 {
		
$n=$_GET['ind_id'];
				
			
include "config.php";   

$sql="select * from indian where ind_id=$n" ;
$result=mysql_query($sql);
$row=mysql_fetch_array($result);
echo"<h2>$row[tittle]</h2>";

								 }else if(isset($_GET['west_id']))
								 {
									 $n=$_GET['west_id'];
				
include "config.php";   

$sql="select * from western where west_id=$n " ;
$result=mysql_query($sql);
$row=mysql_fetch_array($result);
	
	echo"<h2>$row[tittle]</h2>";
	
	
			

}
else if(isset($_GET['weid']) && isset($_GET['caid']) ) 
{
	 $a=$_GET['weid'];
	 $b=$_GET['caid'];
	 include "config.php";  
		$sql="select * from west_cata where west_id=$a and west_cata=$b " ;
$result=mysql_query($sql);
$row=mysql_fetch_array($result);
	
	echo"<h2>$row[cata_tittle]</h2>";
		
	
} 

?>

<!-- end of headding -->

                                
                                
                               <!-- display code -->
                                <?php
								 if(isset($_GET['ind_id']))
								 {
		
$n=$_GET['ind_id'];
				
			
include "config.php";   

$sql="select * from indian_types where ind_id=$n" ;
$result=mysql_query($sql);

echo "<table  width=750  > ";                                
$count = 0;  

while($row=mysql_fetch_array($result)){ 
$count++;   
if($count % 2 == 1) echo "<tr >";    ?> 




	<td> <?php echo"<h7 >$row[tittle]</h7>";?><br> 
 <a  href="indian/<?php  echo $row['photo'];?>" class="pirobox_gall" title="<?php echo"$row[tittle]";?>">
     <img src="indian/<?php  echo $row['photo'];?>"  height=200 width= 200 alt="" /></a>
    
	
	<?php echo "<p>FEATURES:<br> $row[features]</p>";?></td>
    <?php
   
	//echo"<td><h7>$row[tittle]</h7><p align=left>$row[features]</p></td>";


if($count % 2 == 0) echo "</tr>";  



	
}
if      ($count % 2 == 1) echo "<td></td><td></td></tr>"; 
else if ($count % 2 == 2) echo "<td></td></tr>";         
echo "</table>";
								 }else if(isset($_GET['west_id']))
								 {
									 $n=$_GET['west_id'];
				
include "config.php";   

$sql="select * from west_cata where west_id=$n " ;
$result=mysql_query($sql);
while($row=mysql_fetch_array($result)){
	echo"<ul class=\"list-2\">";
	echo"<a href=\"product.php?weid=$row[west_id]&caid=$row[west_cata]\"><li> $row[cata_tittle]</li> </a>"; 
	//recipes.php?weid=$row[west_id]&caid=$row1[west_cata]\"
	
	
	
echo"</ul>";
			

}echo" <br><br><br><br><br>

	<img src=\"images/products.png\"/>";
}
else if(isset($_GET['weid']) && isset($_GET['caid']) ) 
{
	 $a=$_GET['weid'];
	 $b=$_GET['caid'];
	 include "config.php";  
		$sql="select * from west_model where west_id=$a and west_cata=$b " ;
$result=mysql_query($sql);
echo "<table  width=750 > ";                                
$count = 0;  

while($row=mysql_fetch_array($result)){
	$count++;   
if($count % 2 == 1) echo "<tr >";    ?> 
	<td ><?php echo"<h7 >$row[tittle]</h7>";?><br> 
    
    <a  href="western/<?php  echo $row['photo'];?>" class="pirobox_gall" title="<?php echo"$row[tittle]";?> ">
     <img src="western/<?php  echo $row['photo'];?>"  height=150 width= 200 alt="" /></a>
   
	
	
	
	
	
	<?php echo "<p>FEATURES:<br> $row[details]</p>";?> </td>
    <?php
	
	//echo"$row[details]<br><br>";
	
   
	//echo"<td align=center><h7>$row[tittle]</h7></td>";


if($count % 2 == 0) echo "</tr>";  



	
	
	//echo"<a href=\"try.php?weid=$row[west_id]&caid=$row[west_cata]\"> $row[cata_tittle] 	 </a><br><br>";
	//recipes.php?weid=$row[west_id]&caid=$row1[west_cata]\"
	
	
	
//echo"$row[tittle]<br><br>";
			

}
if      ($count % 2 == 1) echo "<td></td><td></td></tr>"; 
else if ($count % 2 == 2) echo "<td></td></tr>";         
echo "</table>";

} 

?>

 <!-- end of display code -->
 
 
 
 
                               
     
								</div>
							
						</div>
                        
						<div class="col-4">
							<div class="block-news">
                            
								<h3 class="color-4 p2">Products List</h3>
								<ul class="list-2">
                                
                                <div class="box first">									
											<p class="numb img-indent2">01</p>
                                            
                                           <h3 class="color-1" align="center">Western Instruments</h3>
                                            </div>
                                             <?php
		
	
				
include "config.php";   

$sql="select * from western " ;
$result=mysql_query($sql);
while($row=mysql_fetch_array($result)){
	echo"<li><a href=\"product.php?west_id=$row[west_id]\"> $row[tittle] 	 </a></li>";
	

}echo"<br><br>";
?>
                                
                                
                               		<!--<li><a href="#">Suspendisse urna</a></li>
									<li><a href="#">Vehicula fermentum</a></li>
									<li><a href="#">Etiam turpis arcu</a></li>
									<li><a href="#">Consectetur vel</a></li><br><br> -->
                                    
                                    <div class="box second">									
											<p class="numb img-indent2">02</p>
                                            
                                           <h3 class="color-2" align="center">Indian Instruments</h3>
                                            </div>
                                             <?php
include "config.php";
$sql="select * from indian ";
$result=mysql_query($sql);
while ($row=mysql_fetch_array($result)){

echo "<li><a href=\"product.php?ind_id=$row[ind_id]\"> $row[tittle] 	 </a></li> "; 
//<br>$row[tittle] ";

}

?>

                                
                                    
                                    
                                    
                                    
                                    
									<!--<li><a href="#">Duis id turpis turpis</a></li>
									<li><a href="#">Nulla a magna</a></li>
									<li><a href="#">Tempor molestie</a></li>
									<li><a href="#">Suspendisse urna</a></li>
									<li><a href="#">Vehicula fermentum</a></li>
									<li><a href="#">Etiam turpis arcu</a></li>
									<li><a href="#">Consectetur vel</a></li>
									<li><a href="#">Duis id turpis turpis</a></li>
									<li><a href="#">Nulla a magna</a></li>
									<li><a href="#">Tempor molestie</a></li>
									<li><a href="#">Suspendisse urna</a></li> -->
								</ul>
							</div>
						</div>
					</div>
                    
                    
					<!--<div class="box-bg">
						<div class="wrapper">
							<div class="col-1">
								<div class="box first">
									<div class="pad">
										<div class="wrapper indent-bot">
											<strong class="numb img-indent2">01</strong>
											<div class="extra-wrap">
												<h3 class="color-1"><strong>Careful</strong>Analysis</h3>
											</div>
										</div>
										<div class="wrapper">
											<a class="button img-indent-r" href="#">>></a>
											<div class="extra-wrap">
												Point.co is one of <a class="link" target="_blank" href="http://blog.templatemonster.com/free-website-templates/ ">free website templates</a> created by TemplateMonster.com.
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-1">
								<div class="box second">
									<div class="pad">
										<div class="wrapper indent-bot">
											<strong class="numb img-indent2">02</strong>
											<div class="extra-wrap">
												<h3 class="color-2"><strong>Quick</strong>Research</h3>
											</div>
										</div>
										<div class="wrapper">
											<a class="button img-indent-r" href="#"></a>
											<div class="extra-wrap">
												This <a class="link" target="_blank" href="http://blog.templatemonster.com/2011/06/13/free-website-template-jquery-slider/ ">Template</a> goes with two packages – with PSD files and without them.
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-2">
								<div class="box third">
									<div class="pad">
										<div class="wrapper indent-bot">
											<strong class="numb img-indent2">03</strong>
											<div class="extra-wrap">
												<h3 class="color-3"><strong>New</strong>Strategies</h3>
											</div>
										</div>
										<div class="wrapper">
											<a class="button img-indent-r" href="#">>></a>
											<div class="extra-wrap">
												It has several pages: <a class="link" href="index.html">Home</a>, <a class="link" href="news.html">News</a>, <a class="link" href="services.html">Services</a>, <a class="link" href="products.html">Products</a>, <a class="link" href="contacts.html">Contacts</a>.
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div> -->
                    
				</div>
			</section>
<!-- footer -->
			<footer>
				<div class="row-top">
					<div class="row-padding">
						<div class="wrapper">
							<div class="col-1">
								<h4>Address:</h4>
								<dl class="address">
									<dt><span>Country:</span>INDIA</dt>
									<dd><span>City:</span>UDUPI</dd>
									<dd><span>Address:</span>KALSANKA</dd>
									<dd><span>Email:</span><a href="contacts.php">yash_bhaktha@yahoo.co.in</a></dd>
								</dl>
							</div>
							<div class="col-2">
								<h4>Follow Us:</h4>
								<ul class="list-services">
									<li class="item-1"><a href="https://www.facebook.com/Musiccorner">Facebook</a></li>
									<li class="item-2"><a href="#">Twitter</a></li>
									<li class="item-3"><a href="#">LinkedIn</a></li>
								</ul>
							</div>
							<div class="col-3">
								<h4>Why Us:</h4>
								<ul class="list-1">
									<li><a href="products.php">Original Brand</a></li>
									<li><a href="services.php">Top Music Teachers</a></li>
									<li><a href="services.php">Repair & Services</a></li> 
									<li><a href="services.php">Instruments On Rent</a></li>
								</ul>
							</div>
							<div class="col-4">
								<div class="indent3">
									<strong class="footer-logo">Music  Corner<strong></strong></strong>
									<strong class="phone"><strong>PHONE:</strong> +91 9845147478</strong>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row-bot">
					<div class="aligncenter">
						 <p>Copyright @ 2013<br><a href="http:// www.musiccorner.co " title="">www.musiccorner.co </a> - All Rights Reserved.
  Powered by <a href="http://www.hostkari.com/" title="Hostkari">hostkari.com</a></p>
  <!-- {%FOOTER_LINK} -->
					</div>
				</div>
			</footer>
		</div>
	</div>
	<script type="text/javascript"> Cufon.now(); </script>
</body>
</html>
