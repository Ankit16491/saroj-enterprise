<?php include('config.php'); ?>
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
				        <li ><a href="stocklist.php">Stock List</a></li>
				        <li class="active"><a href="pricelist.php">Price List</a></li>
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
  				<p>PRICE LIST</p>
        </div>
          <form name="frmdropdown" method="post" action="">
           <center>     
                  <strong>SEARCH GRADE  : </strong> 
                  <select name="grade"> 
                     <option value=""> -----------ALL----------- </option> 
                  <?php
        
                       $dd_res=mysql_query("Select DISTINCT grade_id,grade_name from grade_master");
                       while($r=mysql_fetch_row($dd_res))
                       {

                        echo "<option value='$r[0]'> $r[1] </option>";

                       }
                   ?>
                    </select>
           <input type="submit" name="find" value="Find"/> 
           <br><br>
        </form>
         <div class="table-responsive">
         <table class="table">
         <tr align="center">
              <th style="text-align:center;">Grade</th>
              <th style="text-align:center;">Section </th>
              <th style="text-align:center;">Make</th>
              <th style="text-align:center;">Quantity</th> 
              <th style="text-align:center;">Rate</th> 
              <th style="text-align:center;">Additional Tax</th> 
              <th style="text-align:center;">Godown</th> 
              <th style="text-align:center;">#</th>
              <th style="text-align:center;">Order</th>
         </tr> 
         <?php
          if($_SERVER['REQUEST_METHOD'] == "POST")
          {
                 $des=$_POST["grade"]; 
                 if($des=="")  // if ALL is selected in Dropdown box
                 { 
                     // "SELECT stock_master.stock_id,stock_master.section,stock_master.make,stock_master.quantity,stock_master.deliver_from_godown, grade_master.grade_name FROM stock_master INNER JOIN grade_master ON stock_master.grade_id=grade_master.grade_id";
                     //$res=mysql_query("Select * from stock_master");
                      $res=mysql_query("SELECT pricelist.price_id,pricelist.section,pricelist.make,pricelist.quantity,pricelist.godown_name, grade_master.grade_name,pricelist.grade_id,pricelist.rate,pricelist.additionalrate FROM pricelist INNER JOIN grade_master ON pricelist.grade_id=grade_master.grade_id");
                      
                 }
                 else
                 { 
                     //$res=mysql_query("Select * from stock_master where grade_id='".$des."'");
                      $res=mysql_query("SELECT pricelist.price_id,pricelist.section,pricelist.make,pricelist.quantity,pricelist.godown_name, grade_master.grade_name,pricelist.grade_id,pricelist.rate,pricelist.additionalrate FROM pricelist INNER JOIN grade_master ON pricelist.grade_id=grade_master.grade_id where pricelist.grade_id='".$des."'");
                 }
          
                 echo "<tr><td colspan='5'></td></tr>";
                
                 while($r=mysql_fetch_row($res))
                 { 
                         echo "<tr>"; ?>
                        <form action="submitorder.php" method="post" id="nameform">
                         <td><input type="text"  name="grade" value="<?php echo $r[5];?>" readonly></td>
                         <td><input type="text"  name="section" value="<?php echo $r[1];?>" readonly></td>
                         <td><input type="text"  name="make" value="<?php echo $r[2];?>" readonly></td>
                         <td><input type="text"  name="quantity" value="<?php echo $r[3];?>" readonly></td>

                         <td><input type="text"  name="rate" value="<?php echo $r[7];?>" readonly></td>
                         <td><input type="text"  name="additionalrate" value="<?php echo $r[8];?>" readonly></td>

                         <td><input type="text"  name="godown_name" value="<?php echo $r[4];?>" readonly></td>
                        
                          <td><input  name="fname" value="<?php echo $r[6];?>"></td>
                          <td align='center'>
                            <button type="submit" form="nameform" value="submit">Submit</button>
                          </td>
                         </form>
                          <?php
                         echo "</tr>";
                }
            }
        ?>
          </table>
          </div>
         </center>
        



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