<?php


?>
<head>


    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" type="text/css" href="mystyle.css">
<style>

</style>




        <script>
            $(document).ready(function(){
                $(".tip-top").tooltip({
                    placement : 'top'
                });
                $(".tip-right").tooltip({
                    placement : 'right'
                });
                $(".tip-bottom").tooltip({
                    placement : 'bottom'
                });
                $(".tip-left").tooltip({
                    placement : 'left'
                });
            });

    </script>
    <script>
        var main_status=true;
        var boost_status=false;
        var coach_status=false;
        var calibrate_status=false;
        var singeldraft_status=false;
        var battlecup_status=false;

        function coach() {
            if (coach_status==false){
                document.getElementById("myNav1").style.height = "0%";
                document.getElementById("coachdiv").style.display = 'block';
                document.getElementById('main').style.display = 'none';
                document.getElementById('boost').style.display='none';
                document.getElementById('calibratediv').style.display='none';
                // -> در اپدیت های بعدی سایت اضافه میشود
                document.getElementById('singledraftdiv').style.display='none';
                document.getElementById('battlecupdiv').style.display='none';

                main_status = false;
                coach_status = true;
                calibrate_status = false;
                boost_status = false;

            } else if(coach_status==true && main_status==false) {
                document.getElementById('main').style.display = 'block';
                document.getElementById('calibratediv').style.display = 'none';
                document.getElementById('boost').style.display='none';
                document.getElementById('coachdiv').style.display='none';
                // -> در اپدیت های بعدی سایت اضافه میشود
               document.getElementById('singledraftdiv').style.display='none';
                document.getElementById('battlecupdiv').style.display='none';
                main_status = true;
                coach_status = false;

            }
        }

        function boost() {

            if (boost_status == false) {
                document.getElementById("myNav1").style.height = "0%";
                document.getElementById('boost').style.display='block';
                document.getElementById('main').style.display='none';
                document.getElementById('coachdiv').style.display='none';
                // -> در اپدیت های بعدی سایت اضافه میشود
                document.getElementById('singledraftdiv').style.display='none';
                document.getElementById('battlecupdiv').style.display='none';
                document.getElementById('calibratediv').style.display='none';
                main_status = false;
                calibrate_status = false;
                coach_status = false;
                boost_status = true;
                battlecup_status =false;

            }  else if (boost_status==true && main_status==false) {
                document.getElementById('main').style.display = 'block';
                document.getElementById('boost').style.display = 'none';
                document.getElementById('calibratediv').style.display = 'none';
                document.getElementById('boost').style.display='none';
                document.getElementById('coachdiv').style.display='none';
                document.getElementById('singledraftdiv').style.display='none';
                document.getElementById('battlecupdiv').style.display='none';
                main_status = true;
                boost_status = false;

            }
        }

            function calibrate() {

                if (calibrate_status == false) {
                    document.getElementById("myNav1").style.height = "0%";
                    document.getElementById('calibratediv').style.display='block';
                    document.getElementById('main').style.display='none';
                    document.getElementById('boost').style.display='none';
                    document.getElementById('coachdiv').style.display='none';
                    // -> در اپدیت های بعدی سایت اضافه میشود
                    document.getElementById('singledraftdiv').style.display='none';
                    document.getElementById('battlecupdiv').style.display='none';

                    main_status = false;
                    coach_status = false;
                    boost_status = false;
                    battlecup_status =false;
                    calibrate_status = true;

                } else if (calibrate_status==true && main_status==false) {
                    document.getElementById('main').style.display = 'block';
                    document.getElementById('calibratediv').style.display = 'none';
                    document.getElementById('boost').style.display='none';
                    document.getElementById('coachdiv').style.display='none';
                    // -> در اپدیت های بعدی سایت اضافه میشود
                    document.getElementById('singledraftdiv').style.display='none';
                    document.getElementById('battlecupdiv').style.display='none';
                    main_status = true;
                    calibrate_status = false;

                }
            }
        function battlecup() {
            if (battlecup_status==false){
                document.getElementById("myNav1").style.height = "0%";
                document.getElementById("coachdiv").style.display = 'none';
                document.getElementById('main').style.display = 'none';
                document.getElementById('boost').style.display='none';
                document.getElementById('calibratediv').style.display='none';
                // -> در اپدیت های بعدی سایت اضافه میشود
                document.getElementById('singledraftdiv').style.display='none';
                document.getElementById('battlecupdiv').style.display='block';

                main_status = false;
                battlecup_status = true;
                coach_status = false;
                calibrate_status = false;
                boost_status = false;

            } else if(battlecup_status==true && main_status==false) {
                document.getElementById('main').style.display = 'block';
                document.getElementById('calibratediv').style.display = 'none';
                document.getElementById('boost').style.display='none';
                document.getElementById('coachdiv').style.display='none';
                // -> در اپدیت های بعدی سایت اضافه میشود
                document.getElementById('singledraftdiv').style.display='none';
                document.getElementById('battlecupdiv').style.display='none';
                main_status = true;
                battlecup_status = false;

            }
        }


    </script>


</head>
<body>
<div class="header">
<div class="logo">
    <a href="index.php">
    <img src="images/ANA2.png">
    </a>
</div>

    <div id="myNav1" class="overlay1">
        <a href="javascript:void(0)" class="closebtn1" onclick="closeNav()">&times;</a>
        <div class="overlay1-content" style="text-align: center">
            <a href="#" onclick="boost()">بوست MMR</a>
            <a href="#" onclick="coach()">کوچینگ</a>

            <a href="#" onclick="calibrate()">Calibrate</a>
            <a href="#" onclick="singledraft()">Single Draft</a>

        </div>
    </div>
       <?php
/*
        $link=mysqli_connect("localhost","root","","ana");
        if(mysqli_connect_errno())
            exit("this error happend:". mysqli_connect_error());
        if(isset($_SESSION['status']) && $_SESSION['status']===true)
        {
*/
            ?>



<?php


            ?>
        <div id="login">
         <div class="butttonhref">
                <span style="cursor:pointer;color: white;" class="menubut" onclick="openNav()">
                    <img src="menubutton.png" alt="menu">
                </span>
        </div>

            <?php

            $link=mysqli_connect("localhost","root","","ana");
            if(mysqli_connect_errno())
                exit("this error happend:". mysqli_connect_error());
            if(isset($_SESSION['status']) && $_SESSION['status']===true)
            {
            ?>
               <!-- <i class="fas fa-window-close" onclick="logout()"></i> -->
                <a href="#" onclick="logout();" data-toggle="tooltip" class="tip-left" title="logout">
                    <img src="logout.png" style="width: 28px;height: 28px" alt="logout">
                </a>
                <?php
            } else {
            ?>
            <a href="#" onclick="document.getElementById('id01').style.display='block'" data-toggle="tooltip" class="tip-left" title="login" >
                <img src="user.png" style="width: auto;height: auto" alt="login"> </a>
            <?php
            }
            ?>
            <div id="id01" class="modal1">
                <script>
                    if (window.location.hash === '#login') {
                        document.getElementById('id01').style.display='block'
                    }
                </script>

                <form class="modal-content animate" action="action_login.php" method="post">
                    <div class="imgcontainer">
                            <span onclick="close_modal()" class="close"
                                  title="Close Modal">&times;</span>
                        <img src="images/mainlogo.png" alt="Avatar" class="avatar">
                    </div>

                    <div class="container2">
                        <label for="uname"><b>Username</b></label>
                        <input type="text" placeholder="Enter Username" name="uname" id="uname" required>
                        <br/>
                        <label for="psw"><b>Password</b></label>
                        <input type="password" placeholder="Enter Password" name="psw" id="psw" required>
                        <br/>
                        <button type="submit" class="loginbtn">Login</button>
                        <br/>
                        <label>
                            <input type="checkbox" checked="checked" name="remember" > Remember me
                        </label>
                        <p>Do you have a account? Click <a href="signin.php"  style="color:dodgerblue;display: inline">here</a>.</p>
                    </div>

                    <div class="container2" style="background-color:#f1f1f1">
                        <button type="button" onclick="document.getElementById('id01').style.display='none'"
                                class="cancelbtn">Cancel
                        </button>
                        <br/>
                        <span class="psw">Forgot <a href="#" style="color: blue">password?</a></span>
                    </div>
                </form>
            </div>

            <script>
                if (window.location.hash === '#login') {
                    document.getElementById('id01').style.display='block'
                }

                var modal = document.getElementById('id01');


                window.onclick = function(event) {
                    if (event.target === modal) {
                        modal.style.display = "none";
                    }
                }
                function close_modal() {
                    document.getElementById('id01').style.display='none';
                    window.location.replace("index.php");

                }

                function openNav() {
                    document.getElementById("myNav1").style.height = "100%";
                }

                function closeNav() {
                    document.getElementById("myNav1").style.height = "0%";
                }



            </script>



            <a href="#" data-toggle="tooltip" class="tip-left" title="نمونه بوست اخیر"><img src="graphic_png1.png" alt="نمواد"></a>




        </div>


<div class="nav123">






    <ul class="navbar1" >
        <li><a href="#" id="mmr" onclick="boost()">بوست MMR</a></li>

        <li><a href="#" id="coach" onclick="coach()" >کوچینگ</a></li>

        <li><a href="#" id="calib" onclick="calibrate()">کالیبریت</a></li>
        <!-- در اپدیت های بعدی سایت اضافه میشود
             -->
      <li><a href="#" id="battlecup" onclick="battlecup()">بوست بتل کاپ</a></li>

      <li><a href="#" id="singledraft" onclick="singledraft()">سینگل درفت</a></li>

  </ul>
</div>




</div>
</body>
