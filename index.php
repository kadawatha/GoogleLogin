<?php
session_start();

if (!isset($_SESSION['access_token'])) {
    header('Location: login.php');
    exit();
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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
</head>
<body>


<h3  style="margin-top: 20px" align="center">Please Only Submit Your Details</h3>



<div class="container" style="margin-top: 70px">

    <div class="row">
        <div class="col-md-3">
            <img style="width: 80%;" src="<?php echo $_SESSION['picture'] ?>">
            <input type="hidden" name="picture" value="<?php echo $_SESSION['picture'] ?>">
        </div>

        <form action="index.php" method="post" class="form-inline">

            <div class="col-md-9">
                <table class="table table-hover table-bordered">
                    <tbody>
                    <tr>
                        <td>ID</td>
                        <td>
                            <?php echo $_SESSION['id'] ?>
                            <input type="hidden" name="id" value="<?php echo $_SESSION['id'] ?>">
                        </td>

                    </tr>
                    <tr>
                        <td>First Name</td>
                        <td>
                            <?php echo $_SESSION['givenName'] ?>
                            <input type="hidden" name="givenName" value="<?php echo $_SESSION['givenName'] ?>">
                        </td>
                    </tr>

                    <tr>
                        <td>Last Name</td>
                        <td>
                            <?php echo $_SESSION['familyName'] ?>
                            <input type="hidden" name="familyName" value="<?php echo $_SESSION['familyName'] ?>">
                        </td>
                    </tr>

                    <tr>
                        <td>Email</td>
                        <td>
                            <?php echo $_SESSION['email'] ?>
                            <input type="hidden" name="email" value="<?php echo $_SESSION['email'] ?>">
                        </td>
                    </tr>


                    <tr>
                        <td>Gender</td>
                        <td>
                            <?php echo $_SESSION['gender'] ?>
                            <input type="hidden" name="gender" value="<?php echo $_SESSION['gender'] ?>">
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <div class="form-group mx-sm-3 mb-2">
                                <label for="inputPassword2" class="sr-only">Password</label>
                                <input type="number" name="phone_number" class="form-control" id="inputPassword2" placeholder="Phone Number">
                            </div>
                        </td>
                        <td>
                            <button type="submit" name="submit" class="btn btn-primary mb-2"> Submit Phone Number</button>
                        </td>
                    </tr>


                    </tbody>
                </table>
            </div>



        </form>





    </div>
</div>



<?php

$conn=mysqli_connect("localhost","dhanuska_db","110d220g330j");
mysqli_select_db($conn,"dhanuska_db");


if(!$conn)
{
    die("Connection failed: " . mysqli_connect_error());
}


if(isset($_POST['submit']))
{
    $gmailid=$_POST['id'];
    $firstname=$_POST['givenName'];
    $lastname=$_POST['familyName'];
    $email=$_POST['email'];
    $gender=$_POST['gender'];
    $phonenumber=$_POST['phone_number'];
    $picture=$_POST['picture'];

    $sql = "INSERT INTO singup_gmail(gmailid,picture,firstname,lastname,email,gender,phonenumber)";
    $sql .="VALUES('{$gmailid}','{$picture}','{$firstname}',' {$lastname}','{$email}','{$gender}','{$phonenumber}')";

    $result = mysqli_query($conn,$sql);

    $gourl="https://crazzyartist.com/GoogleLogin/";

    echo '<META HTTP-EQUIV="Refresh" Content="0; URL='.$gourl.'">';
    exit;/**/

}



?>









</body>
</html>