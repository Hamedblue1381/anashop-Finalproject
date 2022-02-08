<?php
session_start();
if((isset($_POST['btlcuptier']) && !empty($_POST['btlcuptier'])) && (isset($_POST['btlcupteam']) && !empty($_POST['btlcupteam'])))
{
    $btlcuptier=$_POST['btlcuptier'];
    $btlcupteam=$_POST['btlcupteam'];


    echo ($btlcuptier . "dar team" . $btlcupteam);
}
else {
    exit('wrong');
}

if(!empty($_POST['corestatusbcup']) && empty($_POST['suppstatusbcup']))
{
    $rolebcup=$_POST['corestatusbcup'];
    echo ($rolebcup);
}
else  {
    $rolebcup=$_POST['suppstatusbcup'];
    echo ($rolebcup);
}

$link=mysqli_connect("localhost","root","","ana");
if(mysqli_connect_errno())
    exit("this error happend:". mysqli_connect_error());
$username=$_SESSION['username'];
$number=$_SESSION['number'];

$query="INSERT INTO `battlecup` (`btlcuptier`, `btlcupteam`, `username`, `number` )
VALUES ('$btlcuptier', '$btlcupteam' , '$username', '$number');";
if(mysqli_query($link,$query)===true) {


    echo("<p style='color:green;'><b>Battle cup Baraye Tier . $btlcuptier. Dar role : . $rolebcup </b></p>");

    ?>

    <script>
        window.alert("بزودی با شما تماس حاصل خواهد شد");
        location.replace("index.php")
    </script>

    <?php
}

else
    echo("<p style='color:red;'><b> code is not working </b> </p>");

mysqli_close($link);


?>