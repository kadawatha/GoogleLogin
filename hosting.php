
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Admoohosting</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
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
        <a href="https://crazzyartist.com/liveproject/" class="navbar-brand">Admoo Host</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav">

                <li class="nav-item">
                    <a class="nav-link" href="#">SHARED HOSTING</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">RESELLER HOSTING</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">CLOUD COMPUTING</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#" >VPS HOSTING</a>
                </li>


            </ul>

            <ul class="nav navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="http://www.admoo.lk/" target="_blank">Other Service</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://www.admoo.lk/digital-marketing-team-sri-lanka/" target="_blank">About Us</a>
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
                <p class="lead">   Get yours hosting package today from Admoohost.</p>
            </div>
            <div class="col-lg-4 col-md-5 col-sm-6">
                <div class="sponsor">
                    <img src="images/Admoo-Host-500x90.png" class="img-fluid" alt="admoohost">

                </div>
                <div class="rooel-klskdjfkj">Best Web Hosting Services of <?php echo date("Y"); ?></div>
            </div>
        </div>
    </div>

    <!-- Progress
    ================================================== -->
    <div class="bs-docs-section">

        <div class="row">
            <div class="col-lg-12">
                <div class="page-header">
                    <h1 align="center">Which hosting plan is best for you?</h1>
                    <p align="center">Websites are stored – or “hosted” – on a publicly-accessible computer (a server). Some websites require an entire server to themselves. Others can share a server with 100s of other websites. The storage space, and the features that come with it, make up your hosting plan.</p>
                </div>

                <div align="center" class="bs-docs-section">
                    <div class="row">

                        <div class="col-md-3 col-sm-6 col-xs-12 bootCols">
                            <div class="card border-primary mb-3" style="max-width: 20rem;min-height: 40em;">
                                <div class="card-header">Header</div>
                                <div class="card-body">
                                    <h4 class="card-title">STARTER</h4>
                                    <p><strong>LKR2000</strong></p>
                                    <h4 class="card-title">BUSINESS</h4>
                                    <p><strong>LKR2000</strong></p>

                                    <p>600MB Web Space</p>

                                    <p>50GB Bandwidth </p>

                                    <p>3 Email Account</p>

                                    <p> FREE Site Building Tools </p>

                                    <p>FREE Marketing & SEO Tools </p>

                                    <p>1 Hosted Domains </p>

                                    <p> 99.9% Service Uptime </p>

                                    <p>30 Day Money Back Guarantee</p>
                                    <button type="button" class="btn btn-success">Submit</button>
                                </div>
                            </div>
                        </div>


                        <div class="col-md-3 col-sm-6 col-xs-12 bootCols">
                            <div class="card border-secondary mb-3" style="max-width: 20rem;min-height: 40em;">
                                <div class="card-header">Header</div>
                                <div class="card-body">
                                    <h4 class="card-title">BUSINESS</h4>
                                    <p><strong>LKR2000</strong></p>

                                    <p>600MB Web Space</p>

                                    <p>50GB Bandwidth </p>

                                    <p>3 Email Account</p>

                                    <p> FREE Site Building Tools </p>

                                    <p>FREE Marketing & SEO Tools </p>

                                    <p>1 Hosted Domains </p>

                                    <p> 99.9% Service Uptime </p>

                                    <p>30 Day Money Back Guarantee</p>


                                    <br> <br> <br>

                                    <button type="button" class="btn btn-info">Submit</button>
                                </div>
                            </div>
                        </div>


                        <div class="col-md-3 col-sm-6 col-xs-12 bootCols">
                            <div class="card border-success mb-3" style="max-width: 20rem;min-height: 40em;">
                                <div class="card-header">Header</div>
                                <div class="card-body">
                                    <h4 class="card-title">PREMIUM</h4>
                                    <p><strong>LKR2000</strong></p>
                                    <h4 class="card-title">BUSINESS</h4>
                                    <p><strong>LKR2000</strong></p>

                                    <p>600MB Web Space</p>

                                    <p>50GB Bandwidth </p>

                                    <p>3 Email Account</p>

                                    <p> FREE Site Building Tools </p>

                                    <p>FREE Marketing & SEO Tools </p>

                                    <p>1 Hosted Domains </p>

                                    <p> 99.9% Service Uptime </p>

                                    <p>30 Day Money Back Guarantee</p>
                                    <button type="button" class="btn btn-warning">Submit</button>
                                </div>
                            </div>

                        </div>

                        <div class="col-md-3 col-sm-6 col-xs-12 bootCols">
                            <div class="card border-danger mb-3" style="max-width: 20rem;min-height: 40em;">
                                <div class="card-header">Header</div>
                                <div class="card-body">
                                    <h4 class="card-title">MASTER</h4>
                                    <p><strong>LKR2000</strong></p>
                                    <h4 class="card-title">BUSINESS</h4>
                                    <p><strong>LKR2000</strong></p>

                                    <p>600MB Web Space</p>

                                    <p>50GB Bandwidth </p>

                                    <p>3 Email Account</p>

                                    <p> FREE Site Building Tools </p>

                                    <p>FREE Marketing & SEO Tools </p>

                                    <p>1 Hosted Domains </p>

                                    <p> 99.9% Service Uptime </p>

                                    <p>30 Day Money Back Guarantee</p>
                                    <button type="button" class="btn btn-danger">Submit</button>
                                </div>
                            </div>
                        </div>


                    </div>


                    <div class="mg-top-top">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="card text-white bg-primary mb-3" style="max-width: 20rem;">
                                    <div class="card-header">Header</div>
                                    <div class="card-body">
                                        <h4 class="card-title">Web Hosting</h4>
                                        <p class="card-text">Budget-friendly shared hosting</p>
                                    </div>
                                </div>
                            </div>



                            <div class="col-lg-4">
                                <div class="card text-white bg-info mb-3" style="max-width: 20rem;">
                                    <div class="card-header">Header</div>
                                    <div class="card-body">
                                        <h4 class="card-title">WordPress Hosting</h4>
                                        <p class="card-text">>Made for speed and ease</p>
                                    </div>
                                </div>
                            </div>


                            <div class="col-lg-4">
                                <div class="card text-white bg-success mb-3" style="max-width: 20rem;">
                                    <div class="card-header">Header</div>
                                    <div class="card-body">
                                        <h4 class="card-title">Business Hosting</h4>
                                        <p class="card-text">Convenient and powerful</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="card text-white bg-danger mb-3" style="max-width: 20rem;">
                                    <div class="card-header">Header</div>
                                    <div class="card-body">
                                        <h4 class="card-title">VPS Hosting</h4>
                                        <p class="card-text">Private-server flexibility and power </p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="card text-white bg-warning mb-3" style="max-width: 20rem;">
                                    <div class="card-header">Header</div>
                                    <div class="card-body">
                                        <h4 class="card-title">Dedicated Servers</h4>
                                        <p class="card-text">The most power and control</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>


                    <h3 id="progress-basic">Spend less</h3>
                    <div class="bs-component">
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <p>Web (or Shared) Hosting is the most budget-friendly type of hosting. Since you're sharing resources — like neighbors in an apartment building — you spend less but have fewer options and less control.</p>
                    </div>

                    <h3 id="progress-alternatives">More power.</h3>


                    <div class="bs-component">
                        <div class="progress">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>

                        <p>Virtual Private Servers (VPS) and Business Hosting dedicate specific portions of a web server’s capacity and processing to each customer. Like a condo, your space (on the server) is yours.</p>


                        <div class="progress">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-warning" role="progressbar" style="width: 75%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>

                    </div>



                    <h3 id="progress-multiple">Maximum power
                    </h3>



                    <div class="bs-component">
                        <p>Dedicated Server Hosting — the mansion of hosting analogies — offers unlimited resources at a premium price. You can choose between full root access or managed plans. It’s all up to you.</p>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                            <div class="progress-bar bg-success" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                            <div class="progress-bar bg-info" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Containers
        ================================================== -->
        <!-- Dialogs
        ================================================== -->


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
