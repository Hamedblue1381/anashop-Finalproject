<?php
session_start();
if((isset($_POST['coach']) && !empty($_POST['coach'])))
{
    $coachmmr=$_POST['coach'];

    echo ($coachmmr);
}
else {
    exit('wrong');
}

if(!empty($_POST['corestatusc']) && empty($_POST['suppstatusc']))
{
    $rolec=$_POST['corestatusc'];
    echo ($rolec);
}
else  {
    $rolec=$_POST['suppstatusc'];
    echo ($rolec);
}

$link=mysqli_connect("localhost","root","","ana");
if(mysqli_connect_errno())
    exit("this error happend:". mysqli_connect_error());
$username=$_SESSION['username'];
$number=$_SESSION['number'];

$query="INSERT INTO `coach` (`coachmmr`, `role`, `username`, `number` )
VALUES ('$coachmmr', '$rolec' , '$username', '$number');";
if(mysqli_query($link,$query)===true) {


    echo("<p style='color:green;'><b>coach baraye . $coachmmr . va . $rolec </b></p>");

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