<?php
session_start();
$party='solo';
if((isset($_POST['start']) && !empty($_POST['start'])) && isset($_POST['finish']) && !empty($_POST['finish']))
{
    $startboostmmr=$_POST['start'];
    $finishboostmmr=$_POST['finish'];
    echo ($startboostmmr . "ta" . $finishboostmmr );
}
else {
    exit('wrong');
}
if(!empty($_POST['corestatus']) && empty($_POST['suppstatus']))
{
    $role=$_POST['corestatus'];
    echo ($role);
}
else  {
    $role=$_POST['suppstatus'];
    echo ($role);
}

$link=mysqli_connect("localhost","root","","ana");
if(mysqli_connect_errno())
    exit("this error happend:". mysqli_connect_error());
/*
$query1="SELECT * FROM 'users';";
$result1=mysqli_query($link,$query1);
$row=mysqli_fetch_array($result1);
*/
$username=$_SESSION['username'];
$number=$_SESSION['number'];
$query="INSERT INTO `boostmmr` (`startmmr`, `finishmmr`, `role`, `soloparty` , `username`, `number` ) 
VALUES ('$startboostmmr', '$finishboostmmr', '$role', '$party', '$username', '$number');";
if(mysqli_query($link,$query)===true)
{


    echo("<p style='color:green;'><b>az . $startboostmmr . ta . $finishboostmmr . va . $role </b></p>" );
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
