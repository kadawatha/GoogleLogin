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


if(isset($_POST['submit_phone_number']))
{

            $domain_name=$_POST['domain_name'];
            $phone_number=$_POST['phone_number'];


            $sql  = "INSERT INTO form(domain_name,phone)";
            $sql .="VALUES('{$domain_name}','{$phone_number}')";

            $result = mysqli_query($conn,$sql);





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
                $the_post_id="";
                if (isset($_GET['domain_id'])){
                    $the_post_id = $_GET['domain_id'];
                }

                ?>

                <h1><?php echo $the_post_id; ?></h1>
                <p class="lead">   Get yours today from Admoohost.</p>
            </div>
            <div class="col-lg-4 col-md-5 col-sm-6">
                <div class="sponsor">
                    <img src="images/Admoo-Host-500x90.png" class="img-fluid" alt="admoohost">

                </div>
                <div class="rooel-klskdjfkj">Best Web Hosting Services of <?php echo date("Y"); ?></div>
            </div>
        </div>
    </div>

    <div class="center_div">
    <form action="" method="post" class="form-inline">
        <div class="form-group mx-sm-3 mb-2">
            <label for="inputPassword2" class="sr-only">Password</label>
            <input type="number" class="form-control" name="phone_number" id="inputPassword2" placeholder="Enter Your Phone Number">
        </div>
        <input type="hidden" value="<?php  echo $the_post_id; ?>" name="domain_name">
        <button type="button" id="ccolbutton" onclick="window.location = '<?php echo $loginURL ?>';" name="submit_phone_number"  class="btn btn-danger mb-2">Enter Your Phone Number</button>
    </form>
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


<script src="vendor/jquery.min.js"></script>
<script src="vendor/popper.min.js"></script>
<script src="vendor/bootstrap.min.js"></script>
<script src="vendor/custom.js"></script>
</body>
</html>
