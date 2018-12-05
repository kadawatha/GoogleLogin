<?php
    require_once "config.php";

	if (isset($_SESSION['access_token'])) {
		header('Location: index.php');
		exit();
	}

	$loginURL = $gClient->createAuthUrl();
?>




<?php



$conn=mysqli_connect("localhost","admoohos_login","110d220g330j");
mysqli_select_db($conn,"admoohos_login");

if(!$conn)
{
    die("Connection failed: " . mysqli_connect_error());
}


if(isset($_POST['submit_form']))
{

    if($_POST['domain'] && $_POST['phone']){

        $domain=$_POST['domain'];
        $name=$_POST['name'];
        $email=$_POST['email'];
        $phone=$_POST['phone'];
        $address=$_POST['address'];
        $message=$_POST['message'];


        $sql  = "INSERT INTO form(domain_name,custormer_name,email,phone,address,message)";
        $sql .="VALUES('{$domain}','{$name}',' {$email}','{$phone}','{$address}','{$message}')";

        $result = mysqli_query($conn,$sql);

        $gourl="http://admoohost.net/GoogleLogin/hosting.php";

        echo '<META HTTP-EQUIV="Refresh" Content="0; URL='.$gourl.'">';
        exit;/**/
    }






}


?>





<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login With Google</title>
    <link rel="stylesheet" href="css/boostswatch.css" media="screen">
      <link rel="stylesheet" href="css/custom.min.css">
    <link rel="stylesheet" href="css/style.css">
          <script>

        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-23019901-1']);
        _gaq.push(['_setDomainName', "bootswatch.com"]);
        _gaq.push(['_setAllowLinker', true]);
        _gaq.push(['_trackPageview']);

        (function() {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
        })();

    </script>

</head>
<body>
    


<div class="navbar navbar-expand-lg fixed-top navbar-dark bg-primary">
    <div class="container">
        <a href="http://admoohost.net/" class="navbar-brand">Admoo Host</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav">

                <li class="nav-item">
                    <a class="nav-link" href="hosting.php">SHARED HOSTING</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="hosting.php">RESELLER HOSTING</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="hosting.php">CLOUD COMPUTING</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="hosting.php" >VPS HOSTING</a>
                </li>

            </ul>

            <ul class="nav navbar-nav ml-auto">
                <li class="nav-item">
                    <input type="button"  onclick="window.location = '<?php echo $loginURL ?>';" value="Log In With Google" class="btn btn-danger">
                </li>
            </ul>

        </div>
    </div>
</div>


<div class="container">

    <div class="page-header" id="banner">
        <div class="row">
            <div class="col-lg-8 col-md-7 col-sm-6">

                <?php

                if (isset($_GET['domain_id'])){
                    $the_post_id = $_GET['domain_id'];
                }

                ?>

                <h1><?php echo $the_post_id; ?></h1>
                <p class="lead">   Get your Domain today from Admoohost.</p>
            </div>
            <div class="col-lg-4 col-md-5 col-sm-6">
                <div class="sponsor">
                    <img src="images/Admoo-Host-500x90.png" class="img-fluid" alt="admoohost">

                </div>
               <div class="rooel-klskdjfkj">Best Web Hosting Services of <?php echo date("Y"); ?></div>
            </div>
        </div>
    </div>



    <div class="bs-component">

        <form action="" method="post" >

            <fieldset>

                <div class="form-group">
                    <label for="exampleInputEmail1">Your Name</label>
                    <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Your name">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" name="email"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">Your Conatact Number</label>
                    <input type="number" name="phone" class="form-control" id="exampleInputPassword1" placeholder="Phone Number">
                </div>

                <input type="hidden" name="domain" value="<?php echo $the_post_id; ?>">

                <div class="form-group">
                    <label for="exampleTextarea">Your Home/Company Address</label>
                    <textarea class="form-control" name="address" id="exampleTextarea" rows="3"></textarea>
                </div>



                <div class="form-group">
                    <label for="exampleTextarea"> Message </label>
                    <textarea class="form-control" name="message" id="exampleTextarea" rows="3"></textarea>
                </div>


                <fieldset class="form-group">
                <button type="submit" name="submit_form" class="btn btn-success btn-lg">Submit Form Details</button>
                <input type="button" onclick="window.location = '<?php echo $loginURL ?>';" value="Log In With Google" class="btn btn-danger btn-lg">
                </fieldset>
            </fieldset>
        </form>
    </div>






    <div class="row">
        <div class="col-lg-12">
            <div class="page-header">
            </div>
            <div class="bs-component">
                <div class="jumbotron">
                    <h1 class="display-3">Domain Investing!</h1>
                    <p class="lead">The right domain isn't just a great web address, it's a great investment</p>
                    <hr class="my-4">
                    <p>Find out how you can sell your unused domains for a profit with free advice from our online experts.</p>
                    <p class="lead">
                        <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
                    </p>
                </div>

            </div>
        </div>
    </div>




    <div id="source-modal" class="modal fade">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Source Code</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <pre contenteditable></pre>
                </div>
            </div>
        </div>
    </div>

    <footer id="footer">
        <div class="row">
            <div class="col-lg-12">

                <ul class="list-unstyled">
                    <li class="float-lg-right"><a href="#top">Back to top</a></li>

                    <li><a href="#" onclick="pageTracker._link(this.href); return false;">SMS Marketing</a></li>
                    <li><a href="http://www.admoo.lk/bulk-sms-marketing-service-sri-lanka/">E Mail Marketing</a></li>
                    <li><a href="http://www.admoo.lk/best-social-media-marketing-agency-sri-lanka/">Social media Marketing</a></li>
                    <li><a href="http://www.admoo.lk/search-engine-marketing-agency-sri-lanka/">Search Engine Marketing</a></li>
                    <li><a href="http://www.admoo.lk/web-design-agency-sri-lanka/">Web Design</a></li>
                    <li><a href="http://www.admoo.lk/web-development-agency-sri-lanka/">Web Development</a></li>

                </ul>

                <p>Email <a href="http://thomaspark.co"> info@admoo.lk </a>.</p>
                <p>Contact Number <a href="#">+94(0)713 612 613 / +94(0)113 612 613</a>.</p>
                <p>Address <a href="#" rel="nofollow">No.379,</a>. Waragoda Road, <a href="#" rel="nofollow">
                        Kelaniya,</a></p>




            </div>
        </div>

    </footer>


</div>


<script src="js/jquery-2.2.3.min.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/custom.js"></script>
    
    
    
</body>
</html>






































































