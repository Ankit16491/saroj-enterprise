<?php 
include('config.php');
?>
<?php
//$connection = mysql_connect("localhost", "root", ""); // Establishing Connection with Server
//$db = mysql_select_db("colleges", $connection); // Selecting Database from Server
if(isset($_POST['submit'])){ // Fetching variables of the form which travels in URL
$email_id = $_POST['email_id'];
$mobile = $_POST['mobile'];
$company_name = $_POST['company_name'];
$city_name = $_POST['city_name'];
//
$grade = $_POST['grade'];
$section = $_POST['section'];
$make = $_POST['make'];
$size = $_POST['size'];
//
$length = $_POST['length'];
$kgs = $_POST['kgs'];
$nos = $_POST['nos'];
$delivery = $_POST['delivery'];
$remark = $_POST['remark'];

if($email_id !=''||$mobile !=''){
//Insert Query of SQL
$query = mysql_query("insert into inquirydata(email_id, mobile, company_name, city_name,grade,section,make,size,length,kgs,nos,delivery,remark) values ('$email_id', '$mobile', '$company_name', '$city_name','$grade', '$section', '$make', '$size','$length', '$kgs', '$nos', '$delivery','$remark')");
echo "<script type='text/javascript'>alert('submitted successfully!')</script>";
}
else{
  echo "<script type='text/javascript'>alert('Some Fields are Blank....!!')</script>";

}
}
mysql_close($con); // Closing Connection with Server
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
    <title>Saroj Enterprise</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <!-- Bootstrap theme -->
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">


  </head>
  <body>
  <header class="header">
  		<div class="container">
  			<div class="row">
  				<div class="col-md-8 col-sm-8">
 					<ul class="list-inline">
 						<li><p><i class="fa fa-phone" aria-hidden="true"></i> &nbsp;&nbsp;98797 82826</p></li>
 						<li><p><i class="fa fa-address-card-o" aria-hidden="true"></i>&nbsp;&nbsp;107,Raghuvir Estate Opp.Gujarat</p></li>
 						<li><p><i class="fa fa-envelope-o" aria-hidden="true"></i>&nbsp;&nbsp;sarojenterprise107@gmail.com</p></li>
 					</ul> 					
  				</div>
  				<div class="col-md-4 col-sm-4">
  					<ul class="list-inline pull-right">
 						<li><i class="fa fa-facebook-square" aria-hidden="true"></i></li>
 						<li><i class="fa fa-twitter-square" aria-hidden="true"></i></li>
 						<li><i class="fa fa-linkedin-square" aria-hidden="true"></i></li>
 					</ul> 
  				</div>
  			</div>
  		</div>
  </header>
  <section>
  	<div class="container">
	  	<div class="row">
		  	<div class="col-md-3 col-sm-3">
		  		<div class="logo"><img class="img-responsive" src="images/logo.png"></div>
		  	</div>
		  	<div class="col-md-9 col-sm-9">
		  		<nav class="navbar navbar-default" role="navigation">
				  <div class="container-fluid">
				    <!-- Brand and toggle get grouped for better mobile display -->
				    <div class="navbar-header">
				      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				        <span class="sr-only">Toggle navigation</span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				      </button>
				      <a class="navbar-brand" href="#"></a>
				    </div>

				    <!-- Collect the nav links, forms, and other content for toggling -->
				    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				      <ul class="nav navbar-nav">
				        <li ><a href="index.html">Home</a></li>
				        <li ><a href="aboutus.html">About Us</a></li>
				    
				        <li><a href="#">Photo Gallery</a></li>
				        <li class="active"><a href="stocklist.php">Stock List</a></li>
				        <li><a href="pricelist.php">Price List</a></li>
				        <li><a href="inquiry.html">Inquiry</a></li>
				        <li><a href="contactus.html">Contact Us</a></li>
				      </ul>
				    </div><!-- /.navbar-collapse -->
				  </div><!-- /.container-fluid -->
				</nav>
		  	</div>
	  	</div>
  	</div>
  
  </section>
  <section>
  	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
	  <!-- Indicators -->
	  <ol class="carousel-indicators">
	    <!--<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
	    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
	    <li data-target="#carousel-example-generic" data-slide-to="2"></li>-->
	  </ol>

	  <!-- Wrapper for slides -->
	  <div class="carousel-inner" role="listbox">
	    <div class="item active">
	      <img src="images/stocklistbanner.png" alt="">
	      <div class="carousel-caption">
	        
	      </div>
	    </div>
	   
	    </div>
	  </div>
	  <!-- Controls -->
	  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
	    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
	    <span class="sr-only">Previous</span>
	  </a>
	  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
	    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
	    <span class="sr-only">Next</span>
	  </a>
	</div>
  </section>
  <section class="pricelist">
  	<div class="container">
  		<div class="row">
        <button class="button">DOWNLOAD PRICE LIST</button>
        <div class="pricelist1">
          <p>PLEASE SUBMIT YOUR LOWEST OFFER FOR THE FOLLOWING</p>
        </div>
        
        <form method ="post" action ="submitinq.php">
 
        <br><br>
        <div class="table-responsive">

          <div style="margin-bottom: 50px;">
            <strong>Email :</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="email_id">&nbsp;&nbsp;&nbsp;&nbsp;
            <strong>Mobile : </strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="mobile"></br></br>
            <strong>Company Name  :</strong>&nbsp;&nbsp;&nbsp;<input type="text" name="company_name">&nbsp;&nbsp;&nbsp;&nbsp;
            <strong>City Name : </strong><input type="text" name="city_name">
          </div>

          <table class="table">
           <thead class="thead-inverse">
            <tr>
              <th>Grade</th>
              <th>Section </th>
              <th>Make</th>
              <th>Size</th>
              <th>Length</th>
              <th>Kgs</th>
              <th>Nos</th>
              <th>Delivery From Godown</th> 
              <th>Remark</th>
            </tr> 
           </thead>
         <?php
          if($_SERVER['REQUEST_METHOD'] == "POST")
          { 

            ?>
             <tbody>
             <tr>
                <td width="70%"><input type="text" name="grade" value="<?php echo $_POST["grade"]; ?>" readonly></td>
                <td><input type="text" name="section" value="<?php echo $_POST["section"]; ?>" readonly></td>
                <td><input type="text" name="make" value="<?php echo $_POST["make"]; ?>" readonly></td>         
                <td><input type="text" name="size"></td>
                <td><input type="text" name="length"></td>
                <td><input type="text" name="kgs"></td>                
                <td><input type="text" name="nos"></td>
                <td><input type="text" name="delivery" value="<?php echo $_POST["delivery"]; ?>" readonly></td>         
                <td><input type="text" name="remark"></td>
              </tr>
              </tbody>
        <?php } ?>

        
    
          </table>
          </div>
          <p style="margin-top: 55px;"><strong>WE ARE AGREE FOR FOLLOSING TERMS AND CONDITIONS:</strong></p>
          <p>A.GST/CST 5% WILL BE PAID EXTRA</p>
          <p>B EXCISE MODWATE YES OR NO PLEASE SPECIFY.[ ]</p>
          <p>B, DELIVERY AND LOADING CHARGES WILL BE PAID EXTRA, FROM GODOWN MENTION ABOVE.</p>
          <p>C.PAYENT WILL BE PAID AGAINST PERFORMA, PLEASE MAIL US YOUR PERFORMA INVOICE .</p>
          <p>D.PLEASE SUPLLY NEAREST READY LENGTH OF ABOVE MENTION QUANTITY.</p>
          <center> <br><br><input class="submit" name="submit" type="submit" value="Submit"><br><br></center>
        </form>



  			</div>
  			
  		</div>
  	</div>
  </section>
   <!-- end of product    -->
  <section class="sub-footer">
  	<div class="container">
  		<div class="row">
  			<div class="col-md-3">
  				<img src="images/small_logo.png">
  				<p style="margin-top: 30px;">Saroj Enterprise is the most trusted and reliable source of all kind of industrial raw material since 2000 at Ahmedabad.</p>
  			</div>
  			<div class="col-md-3">
  				<h2>Site Map</h2>
  				<img src="images/bg_content.png" class="img-responsive">
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About Us</a></li>
             <li><a href="#">Products</a></li>
            <li><a href="#">Inquiry</a></li>
            <li><a href="#">Contact Us</a></li>
          </ul>

  			</div>
  			<div class="col-md-3">
  				<h2>Products</h2>
  				<img src="images/bg_content.png" class="img-responsive">
           <ul>
            <li><a href="#">MILD STEEL</a></li>
            <li><a href="#">ALLOY STEEL</a></li>
             <li><a href="#">DIE STEEL</a></li>
            <li><a href="#">ROUND & SQUARE BAR</a></li>
            <li><a href="#">FLAT BAR & HEX BAR</a></li>
            
          </ul>

  			</div>
  			<div class="col-md-3">
  				<h2>Contact Us</h2>
  				<img src="images/bg_content.png" class="img-responsive">
          <p><i class="fa fa-address-book-o" aria-hidden="true"></i>&nbsp;&nbsp;107,Raghuvir Estate Opp.Gujarat Gravures,</br>G.I.D.C,Ahmedabad</p>
          <p><i class="fa fa-envelope" aria-hidden="true"></i>&nbsp;&nbsp;sarojenterprise107@gmail.com</p>
  			</div>
  		</div>
  	</div>
  </section>
  <section class="footer">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <p>© Copyright 2017 Saroj Enterprise. All rights reserved.</p>
        </div>
        <div class="col-md-6">
          <div class="float-right">
            <p>Design By : Shreya Websoft</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section>
  	
  </section>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/productslider.js"></script>
  </body>
</html>