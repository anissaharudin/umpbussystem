<?php
include("config.php");

$stmta = $dbo->prepare('SELECT * FROM booking_bus');
$stmta->execute();

if(isset($_POST["submit"])) {
	
	header('Location:pay.php?orderid='.$_POST["orderid"]);
	
}

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>eBooking Online UMP Bus</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/business-casual.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<style>
img {
    display: block;
    margin: auto;
    width: 40%;
}
</style>

<body>
<footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <img src="img/rasmi.png" alt="" width="500" height="200" />
					<div class="brand">UMP BUS BOOKING </div>
    <div class="address-bar"><strong>Universiti Malaysia Pahang, Lebuhraya Tun Razak, 26300, Gambang, Kuantan, Pahang Darul Makmur</strong></div>
                </div>
            </div>
        </div>
    </footer>
    
	

    <!-- Navigation -->
    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
                <a class="navbar-brand" href="index.php">Business Casual</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="choose.php">Bookings</a>
                    </li>
                    <li>
                        <a href="contact.php">Contact Us</a>
                    </li>
                    <li>
                        <a href="login.php">Login</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center"> 
                        <strong>Approvals</strong>
						
                    </h2>
					
                    <hr>
				  <h3 class="intro-text text-center"> Please insert your Booking ID
					</h3>
					
					
                </div>
				<form name="pay" role="form" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" >
                	  <div class="form-group">
                        <input type="text" class="form-control" id="orderid" name="orderid" required>
                      </div>
					  <button type="submit" name="submit" class="btn btn-success"><b><span class="glyphicon glyphicon-filter"></span> Submit</b></button>
                </form>
            </div>
            
          </div>
          
                
                <div class="clearfix"></div>
            </div>
        </div>

        

    </div>
    <!-- /.container -->

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                   <p>Copyright &copy; UNIVERSITI MALAYSIA PAHANG 2002 - 2016</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
