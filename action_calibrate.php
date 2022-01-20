<?php
session_start();
//if((isset($_POST['calibrate']) && !empty($_POST['calibrate'])))
//{
    $calibstat=$_POST['calibrate'];
    echo ($calibstat);
//}
//else {
   // exit('wrong');
//}

$oldacc='its new';
$newacc='TRUE';
if ($calibstat=='')
{

    $newacc='new';
}
else if(isset($calibstat)) {

    $oldacc=$calibstat;
    $newacc='old account';
}
$link=mysqli_connect("localhost","root","","ana");
if(mysqli_connect_errno())
    exit("this error happend:". mysqli_connect_error());
$username=$_SESSION['username'];
$number=$_SESSION['number'];
echo ($number);
echo ($username);
$query="INSERT INTO `calibrate` (`oldrank`, `new`, `username`, `number`)
VALUES ('$oldacc', '$newacc' , '$username', '$number')";
if(mysqli_query($link,$query)===true) {

    if($calibstat=='new'){
    echo("<p style='color:green;'><b>calibrate rank account  . $newacc  </b></p>");
        }
    else if(isset($calibstat)) {
        echo("<p style='color:green;'><b>calibrate rank account  . $oldacc tavasot $username  </b></p>");
    }
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