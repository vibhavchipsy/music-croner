<?php  session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
<title></title>
<meta charset="utf-8">
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
						<a class="logo" href="index.php">Point.co</a>
						<strong class="slog">The most creative ideas</strong>
					</h1>
					<!-- <form id="search-form" action="" method="post" enctype="multipart/form-data">
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
						  <li><a href="news.php">Our News</a></li>
						  <li><a href="services.php">Our Services</a></li>
						  <li><a class="active" href="products.php">Our Products</a></li>
						  <li class="last-item"><a href="contacts.php">Contact Us</a></li>
						</ul>
					</nav>
				</div>
			</header>
<!-- content --><div class="ic">More Website Templates  at TemplateMonster.com!</div>
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

echo "<table  align=center width=\"675\"  > ";                                
$count = 0;  

while($row=mysql_fetch_array($result)){ 
$count++;   
if($count % 2 == 1) echo "<tr >";    ?> 
	<td> <img src="indian/<?php  echo $row['photo'];?>" height=150 width= 200 alt="" /></td>
    <?php
   
	echo"<td><h7>$row[tittle]</h7><p align=left>$row[features]</p></td>";


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
			

}}
else if(isset($_GET['weid']) && isset($_GET['caid']) ) 
{
	 $a=$_GET['weid'];
	 $b=$_GET['caid'];
	 include "config.php";  
		$sql="select * from west_model where west_id=$a and west_cata=$b " ;
$result=mysql_query($sql);
echo "<table  width=\"675\"   > ";                                
$count = 0;  

while($row=mysql_fetch_array($result)){
	$count++;   
if($count % 2 == 1) echo "<tr >";    ?> 
	<td> <img src="western/<?php  echo $row['photo'];?>" height=250 width= 200 alt="" /></td>
    <?php
	
	//echo"$row[details]<br><br>";
	
   
	echo"<td align=\"left\"><h7>$row[tittle]</h7><p align=left> $row[details]</p></td>";


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
									<dt><span>Country:</span>USA</dt>
									<dd><span>City:</span>San Diego</dd>
									<dd><span>Address:</span>Beach st. 54</dd>
									<dd><span>Email:</span><a href="#">lcenter@mail.com</a></dd>
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
									<li><a href="#">Lorem ipsum dolor</a></li>
									<li><a href="#">Aonsect adipisic</a></li>
									<li><a href="#">Eiusmjkod tempor</a></li> 
									<li><a href="#">Incididunt ut labore</a></li>
								</ul>
							</div>
							<div class="col-4">
								<div class="indent3">
									<strong class="footer-logo">Point.<strong>co</strong></strong>
									<strong class="phone"><strong>Toll Free:</strong> 1-800-567-8934</strong>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row-bot">
					<div class="aligncenter">
						<p class="p0"><a rel="nofollow" href="http://www.templatemonster.com/" target="_blank">Website Template</a> by TemplateMonster.com | <a rel="nofollow" href="http://www.html5xcss3.com/" target="_blank">html5xcss3.com<a/></p>
						<a href="http://www.templates.com/product/3d-models/" target="_blank">3D Models</a> provided by Templates.com<br>
						<!-- {%FOOTER_LINK} -->
					</div>
				</div>
			</footer>
		</div>
	</div>
	<script type="text/javascript"> Cufon.now(); </script>
</body>
</html>
