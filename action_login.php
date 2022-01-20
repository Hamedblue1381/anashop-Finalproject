
<?php
session_start();
$_SESSION["status"]=false;
if(isset($_POST['uname']) && !empty($_POST['uname']) && isset($_POST['psw']) && !empty($_POST['psw']))
{
    $username= $_POST['uname'];
    $password= $_POST['psw'];


}
else
    exit("wrong username or password");
$link=mysqli_connect("localhost","root","","ana");
if(mysqli_connect_errno())
    exit("this error happend:". mysqli_connect_errno());
$query="SELECT * FROM users WHERE username='$username' AND password='$password'";
$result=mysqli_query($link,$query);
$row=mysqli_fetch_array($result);
if($row) {
    $_SESSION["status"]=true;
    $_SESSION['username']=$row['username'];
    $_SESSION['number']=$row['number'];
    $_SESSION['user_type']=$row['user_type'];
    if ($row['user_type']==0)
        $_SESSION['type'] = "public";
    elseif ($row['user_type'] == 1)
        $_SESSION['type'] = "admin";
    ?>
    <script>
        window.alert("Welcome to Site");
        location.replace("index.php");
    </script>
    <?php
}
else
    echo("<h3 style='color:red;'><b> your username is not allowed to login </b></h3>");


?>
