<?php
session_start();
include ("header.php");
?>

<head>

    <title>Ana boosting | سایت کوچ و بوستینگ آنا</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
    <link rel="apple-touch-icon" sizes="180x180" href="/images/medals/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/images/medals/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/images/medals/favicon-16x16.png">
    <link rel="shortcut icon" href="/images/medals/favicon.ico" />
    <link rel="manifest" href="/site.webmanifest">
    <script src="https://kit.fontawesome.com/60b0ff8bf3.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="/node_modules/focus-visible/dist/focus-visible.min.js"></script>
<script>
    var oldaccstatus=false;
    var newaccstatus=false;
    function oldacc() {

        if(oldaccstatus==false)
        {
            /*
            document.getElementsByClassName('corebtn')[0].style.backgroundColor='#5bc0de';
            document.getElementsByClassName('suppbtn')[0].style.backgroundColor='whitesmoke';
            document.getElementsByClassName('corebtn')[1].style.backgroundColor='#5bc0de';
            document.getElementsByClassName('suppbtn')[1].style.backgroundColor='whitesmoke';
            */
            document.getElementById('oldaccbtn').style.backgroundColor='#5bc0de';
            document.getElementById('newaccbtn').style.backgroundColor='whitesmoke';
            oldaccstatus=true;
            //corestatusmain=true;
            //document.getElementById('corestatus').value='CORE';
            // document.getElementById('corestatusc').value='CORE';
            newaccstatus=false;
            // suppstatusmain=false;
            // document.getElementById('suppstatus').value = '';
        }
        else
        {
            document.getElementById('oldaccbtn').style.backgroundColor='whitesmoke';
            //document.getElementsByClassName('corebtn')[1].style.backgroundColor='whitesmoke';
            oldaccstatus=false;
            //corestatusmain=true;
            // document.getElementById('corestatus').value = '';
            //document.getElementById('corestatusc').value = '';
        }
    }
    function newacc() {
        if(newaccstatus==false) {

            /*
          document.getElementsByClassName('corebtn')[0].style.backgroundColor='#5bc0de';
          document.getElementsByClassName('suppbtn')[0].style.backgroundColor='whitesmoke';
          document.getElementsByClassName('corebtn')[1].style.backgroundColor='#5bc0de';
          document.getElementsByClassName('suppbtn')[1].style.backgroundColor='whitesmoke';
          */
            document.getElementById('newaccbtn').style.backgroundColor='#5bc0de';
            document.getElementById('oldaccbtn').style.backgroundColor='whitesmoke';
            newaccstatus=true;
            //corestatusmain=true;
            //document.getElementById('corestatus').value='CORE';
            // document.getElementById('corestatusc').value='CORE';
            oldaccstatus=false;
            // suppstatusmain=false;
            // document.getElementById('suppstatus').value = '';
        }
        else
        {
            document.getElementById('newaccbtn').style.backgroundColor='whitesmoke';
            //document.getElementsByClassName('corebtn')[1].style.backgroundColor='whitesmoke';
            newaccstatus=false;
            //corestatusmain=true;
            // document.getElementById('corestatus').value = '';
            //document.getElementById('corestatusc').value = '';
        }
    }
    /*
    function oldacc() {
        window.alert('working');
        document.getElementById('oldaccrank').style.display='block';
    }
    function newacc() {

    }

     */
</script>





</head>
<body>
<div class="main" id="main" style="display: block;">

<div class="separator"><h1>Ana Boosting</h1></div>
    <div class="miniform" style="direction: rtl" >
        <div class="separator"><h1>اخبار</h1></div>
        <div class="separator">boost</div>
        <?php

        $link=mysqli_connect("localhost","root","","ana");
        if(mysqli_connect_errno())
            exit("this error happend:". mysqli_connect_error());
        if(isset($_SESSION['status']) && $_SESSION['status']===true)
        {
            $username=$_SESSION['username'];
            $type =  $_SESSION['user_type'];

        $query="SELECT * FROM `boostmmr`  ";
        $result=mysqli_query($link,$query);
        $querycoach="SELECT * FROM `coach`  ";
        $resultcoach=mysqli_query($link,$querycoach);
        $querycalibrate="SELECT * FROM `calibrate` ";
        $resultcalibrate=mysqli_query($link,$querycalibrate);
        }
        ?>
        <?php
if( isset($_SESSION['status']) && $_SESSION['status']===true && $type=='1'){
        while($row = mysqli_fetch_array($result)) {

            ?>

        <p style="text-align: center; font-size: 20px;font-weight: bold;">
           شما یک سفارش بوست با مشخصات
            <?php echo $row['startmmr']; ?>
            تا
            <?php echo $row['finishmmr']; ?>
            و رول
            <?php echo $row['role']; ?>
            بصورت
            <?php echo $row['soloparty']; ?>
            داشته اید
        </br>
            وضعیت :
            <span style="text-align: center; font-size: 20px;font-weight: bold;color: red">نامشخص</span>
        </p>
            <?php
        }}
else {
    ?>
    <P style="text-align: center; font-size: 38px; color: #843534">
        اخباری ثبت نشده!    </P>
    <?php
}
        ?>
        <div class="separator">coach</div>
        <?php

        if(isset($_SESSION['status']) && $_SESSION['status']===true && $type=='1' ){
            while($rowc = mysqli_fetch_array($resultcoach)) {

                ?>

            <p style="text-align: center; font-size: 20px;font-weight: bold;">
                شما یک سفارش بوست با رنک
                <?php echo $rowc['coachmmr']; ?>
                و رول
                <?php echo $rowc['role']; ?>
                بصورت
                کوچ
                داشته اید
                </br>
                وضعیت :
                <span style="text-align: center; font-size: 20px;font-weight: bold;color: red">نامشخص</span>
            </p>
            <?php
        }}
else {
    ?>
    <P style="text-align: center; font-size: 38px; color: #843534">
        اخباری ثبت نشده!    </P>
    <?php
}
        ?>
        <div class="separator">Calibrate</div>
        <?php

        if(isset($_SESSION['status']) && $_SESSION['status']===true && $type=='1' ){
            while($rowcalib = mysqli_fetch_array($resultcalibrate)) {

                ?>

                <p style="text-align: center; font-size: 20px;font-weight: bold;">
                    شما یک سفارش calibrate
                    <?php
                    if ($rowcalib['new']=='new') { echo $rowcalib['new']; }
                    else { ?>
                  با رنک قبلی
                    <?php echo $rowcalib['oldrank']; } ?>
                    داشته اید
                    </br>
                    وضعیت :
                    <span style="text-align: center; font-size: 20px;font-weight: bold;color: red">نامشخص</span>
                </p>
                <?php
            }}
        else {
            ?>
            <P style="text-align: center; font-size: 38px; color: #843534">
                اخباری ثبت نشده!
            </P>
            <?php
        }
        ?>
    </div>
<img src="images/dsgfws.png" style=" position: relative;
    margin-left: 0 ;
    margin-right: 0 ;
    float: right;
    width: 50%;
@media screen and (max-width: 652px){

}">

</div>
<script>





</script>

<div class="boostmmr" id="boost" style="display: none">
    <div class="column1">
        <div class="minform2">
           <h1>سفارش شما</h1>
            <div class="boostinfo"
                 style="width: 100%;height: 70px;background-color: gray;text-align: center">

                    <h2 id="start" style="display: inline-block">
                <h2 id="output" style="display: inline-block">تا
                </h2>


                </h2>
                <h2 id="finish" style="display: inline-block">
                    <h2 style="display: inline-block">
                    بوست از
                    </h2>



                    </h2>

            <br/>  &nbsp;
                <div class="separator"><h1>تخفیفات</h1></div>
            </div>

        </div>

    </div>
    <div class="column2" >
        <div class="separator"><h1>رول خود را انتخاب کنید</h1></div>


        <form action="action_boost.php" style="display: block" method="post" name="boostsub">
            <input type="button" value="core" class="corebtn" id="boostbtn" onclick="corebutton()" required>
            <input type="hidden"  id="corestatus" name="corestatus">
            <i class="fas fa-slash"></i>
            <input type="button"  value="support" class="suppbtn" id="boostbtn" onclick="suppbutton()" required>
            <input type="hidden"  id="suppstatus" name="suppstatus">
        <div class="separator"><h1>محدوده بوست</h1></div>

        <div class="container1">


            <!-- Slider -->
            <!-- <span style="float:left; position: relative"> -->
            <label style="text-align: center; display: inline-block" >Start: </label>
            <input type="text" id="value-min" class="inputs" name="start"  readonly/>
            <img src="" id="minmedal">
            <!--  </span> -->
             <!-- <span style="float:left; position: absolute"> -->
            <i class="fas fa-slash"></i>
            &nbsp;
            <label style="text-align: center; display: inline-block">Finish: </label>
            <input type="text" id="value-max" class="inputs" name="finish"  readonly/>
            <img src="" id="maxmedal">
            <!-- </span> -->
            <div id="pmd-slider-value-range"  class="pmd-range-slider" min="1" max="6000"></div>
            <p>&nbsp;</p>
            <?php
           if(isset($_SESSION["status"]) && $_SESSION["status"]===true)
                {
            ?>

            <input type="button" id="boostbtn" value="Submit" onclick="boostsubmit()">
            <?php
            }
            else
            {
            ?>

                <input type="button" id="boostbtn" value="ابتدا وارد شوید" onclick="boostsubmitnotsigned()">
            <?php
            }
            ?>



        </form>





        </div>

    </div>
</div>
<div class="calibrate" id="calibratediv" style="display: none">
    <div class="column1">
        <div class="minform2">
            <h1>سفارش شما</h1>
            <div class="boostinfo"
                 style="width: 100%;height: 70px;background-color: gray;text-align: center">

                <h2 id="startcalibrate" style="display: inline-block">

                    <h2 id="output" style="display: inline-block">
 کالیبریت اکانت با رنک
                    </h2>


                </h2>
                <h2 style="display: inline-block">

                </h2>



                </h2>

                <br/>  &nbsp;
            <div class="separator"><h1>تخفیفات</h1></div>
        </div>
        </div>
    </div>
    <div class="column2" >
        <div class="separator"><h1>وضعیت اکانت خود را مشخص کنید</h1></div>

        <div class="container">

            <form action="action_calibrate.php" style="display: block" method="post" name="calibratesub">
                <input type="button" value="New Acc" class="suppbtn" id="boostbtn" onclick="suppbutton()" required>
                <input type="hidden"  id="newacc" name="newacc">
                <i class="fas fa-slash"></i>
                <input type="button"  value="Ranked Acc" class="corebtn" id="boostbtn"  onclick="corebutton()" required>
                <input type="hidden"  id="oldacc"  name="oldacc">
                <div  id="cal-newacc-sep">
                <div class="separator"><h1>درخواست</h1></div>
                </div>
                <div  id="oldaccrank" class="oldaccrank">
                <div class="separator"> <h1>رنک قبلی خود را وارد کنید</h1></div>
                <input type="text"  class="inputs" id="calibrateinput" name="calibrate" onkeydown="calibratetext()"  onkeyup="calibratetext()" maxlength="4">
                </div>
                <?php
                if(isset($_SESSION["status"]) && $_SESSION["status"]===true)
                {
                    ?>

                    <input type="button" id="boostbtn" value="Submit" onclick="calibratesubmit()">
                    <?php
                }
                else
                {
                    ?>

                    <input type="button" id="boostbtn" value="ابتدا وارد شوید" onclick="boostsubmitnotsigned()">
                    <?php
                }
                ?>
            </form>
        </div>
    </div>

</div>
</div>
    <div class="coach" id="coachdiv" style="display: none;">
        <div class="column1">
            <div class="minform2">
                <h1>سفارش شما</h1>
                <div class="boostinfo"
                     style="width: 100%;height: 70px;background-color: gray;text-align: center">

                    <h2 id="startcoach" style="display: inline-block">
                        <h2 id="output" style="display: inline-block">
                        </h2>


                    </h2>
                        <h2 style="display: inline-block">
                            بوست رنک
                        </h2>



                    </h2>

                    <br/>  &nbsp;
                    <div class="separator"><h1>تخفیفات</h1></div>
                </div>

            </div>
        </div>
                <div class="column2" >
                    <div class="separator"><h1>رول خود را انتخاب کنید</h1></div>
        <form action="action_coach.php" style="display: block" method="post" name="coachsub">
            <input type="button" value="core" class="corebtn" id="boostbtn" onclick="corebutton()" required>
            <input type="hidden"  id="corestatusc" name="corestatusc">
            <i class="fas fa-slash"></i>
            <input type="button"  value="support" class="suppbtn" id="boostbtn" onclick="suppbutton()" required>
            <input type="hidden"  id="suppstatusc" name="suppstatusc">
            <div class="separator"> <h1>رنک خود را وارد کنید</h1></div>
            <input type="text" class="inputs" id="coachinput" name="coach" onkeydown="coachtext()" onkeyup="coachtext()" maxlength="4">
            <?php
            if(isset($_SESSION["status"]) && $_SESSION["status"]===true)
            {
                ?>

                <input type="button" class="boostbtn" value="Submit" onclick="coachsubmit()">
                <?php
            }
            else
            {
                ?>

                <input type="button" class="boostbtn" value="ابتدا وارد شوید" onclick="boostsubmitnotsigned()">
                <?php
            }
            ?>
        </form>
        </div>
    </div>
<!--
        <div class="battlecup" id="battlecupdiv" style="display: none">
        </div>
            <div class="singledraft" id="singledraftdiv" style="display: none">
            </div>
-->

</body>
<!-- Jquery js -->
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<!-- Slider js -->
<script src="http://propeller.in/components/range-slider/js/wNumb.js"></script>
<script src="http://propeller.in/components/range-slider/js/nouislider.js"></script>



<link rel="stylesheet" type="text/css" href="http://propeller.in/components/range-slider/css/nouislider.min.css">

<link rel="stylesheet" type="text/css" href="http://propeller.in/components/textfield/css/textfield.css">

<link rel="stylesheet" type="text/css" href="http://propeller.in/components/checkbox/css/checkbox.css">


<link rel="stylesheet" type="text/css" href="http://propeller.in/components/range-slider/css/range-slider.css">

<script>


    // multiple handled with value
    var pmdSliderValueRange = document.getElementById('pmd-slider-value-range');
    var start= document.getElementById("value-min").value;
    var finish= document.getElementById('value-max').value;

    noUiSlider.create(pmdSliderValueRange, {
        start: [ 1500, 3500 ], // Handle start position
        connect: true, // Display a colored bar between the handles
        tooltips: [ wNumb({ decimals: 0 }), wNumb({ decimals: 0 }) ],
        format: wNumb({
            decimals: 0,
            thousand: '',
            postfix: '',
        }),
        range: { // Slider can select '0' to '100'
            'min': 1,
            'max': 6000
        },
        step: 1,
        pips: {
            mode: 'steps',
            density:15
        }
    });


    var valueMax = document.getElementById('value-max'),
        valueMin = document.getElementById('value-min');
    valuestart = document.getElementById('start');
    valuefinish = document.getElementById('finish');




    // When the slider value changes, update the input and span
    pmdSliderValueRange.noUiSlider.on('update', function( values, handle ) {
        if (handle) {
            var mmr = values[handle];
            valueMax.value = values[handle];
            valuestart.innerHTML = values[handle];

            if (mmr > 0 && mmr < 154) {
                document.getElementById('maxmedal').src = 'images/medals/herald1.png';

            } else if (mmr > 154 && mmr < 308) {
                document.getElementById('maxmedal').src = 'images/medals/herald2.png';
            } else if (mmr > 308 && mmr < 462) {
                document.getElementById('maxmedal').src = 'images/medals/herald3.png';
            } else if (mmr > 462 && mmr < 616) {
                document.getElementById('maxmedal').src = 'images/medals/herald4.png';
            } else if (mmr > 616 && mmr < 770) {
                document.getElementById('maxmedal').src = 'images/medals/herald5.png';
            } else if (mmr > 770 && mmr < 924) {
                document.getElementById('maxmedal').src = 'images/medals/guardian1.png';
            } else if (mmr > 924 && mmr < 1078) {
                document.getElementById('maxmedal').src = 'images/medals/guardian2.png';
            } else if (mmr > 1078 && mmr < 1232) {
                document.getElementById('maxmedal').src = 'images/medals/guardian3.png';
            } else if (mmr > 1232 && mmr <= 1386) {
                document.getElementById('maxmedal').src = 'images/medals/guardian4.png';
            } else if (mmr > 1386 && mmr < 1540) {
                document.getElementById('maxmedal').src = 'images/medals/guardian5.png';
            } else if (mmr > 1540 && mmr < 1694) {
                document.getElementById('maxmedal').src = 'images/medals/crusader1.png';
            } else if (mmr > 1694 && mmr < 1848) {
                document.getElementById('maxmedal').src = 'images/medals/crusader2.png';
            } else if (mmr > 1848 && mmr < 2002) {
                document.getElementById('maxmedal').src = 'images/medals/crusader3.png';
            } else if (mmr > 2002 && mmr < 2156) {
                document.getElementById('maxmedal').src = 'images/medals/crusader4.png';
            } else if (mmr > 2156 && mmr < 2310) {
                document.getElementById('maxmedal').src = 'images/medals/crusader5.png';
            } else if (mmr > 2310 && mmr < 2464) {
                document.getElementById('maxmedal').src = 'images/medals/archon1.png';
            } else if (mmr > 2464 && mmr < 2618) {
                document.getElementById('maxmedal').src = 'images/medals/archon2.png';
            } else if (mmr > 2618 && mmr < 2772) {
                document.getElementById('maxmedal').src = 'images/medals/archon3.png';
            } else if (mmr > 2772 && mmr < 2926) {
                document.getElementById('maxmedal').src = 'images/medals/archon4.png';
            } else if (mmr > 2926 && mmr < 3080) {
                document.getElementById('maxmedal').src = 'images/medals/archon5.png';
            } else if (mmr > 3080 && mmr < 3234) {
                document.getElementById('maxmedal').src = 'images/medals/legend1.png';
            } else if (mmr > 3234 && mmr < 3388) {
                document.getElementById('maxmedal').src = 'images/medals/legend2.png';
            } else if (mmr > 3388 && mmr < 3542) {
                document.getElementById('maxmedal').src = 'images/medals/legend3.png';
            } else if (mmr > 3542 && mmr < 3696) {
                document.getElementById('maxmedal').src = 'images/medals/legend4.png';
            } else if (mmr > 3696 && mmr < 3850) {
                document.getElementById('maxmedal').src = 'images/medals/legend5.png';
            } else if (mmr > 3850 && mmr < 4004) {
                document.getElementById('maxmedal').src = 'images/medals/ancient1.png';
            } else if (mmr > 4004 && mmr < 4158) {
                document.getElementById('maxmedal').src = 'images/medals/ancient2.png';
            } else if (mmr > 4158 && mmr < 4312) {
                document.getElementById('maxmedal').src = 'images/medals/ancient3.png';
            } else if (mmr > 4312 && mmr < 4466) {
                document.getElementById('maxmedal').src = 'images/medals/ancient4.png';
            } else if (mmr > 4466 && mmr < 4620) {
                document.getElementById('maxmedal').src = 'images/medals/ancient5.png';
            } else if (mmr > 4620 && mmr < 4820) {
                document.getElementById('maxmedal').src = 'images/medals/divine1.png';
            } else if (mmr > 4820 && mmr < 5020) {
                document.getElementById('maxmedal').src = 'images/medals/divine2.png';
            } else if (mmr > 5020 && mmr < 5220) {
                document.getElementById('maxmedal').src = 'images/medals/divine3.png';
            } else if (mmr > 5220 && mmr < 5420) {
                document.getElementById('maxmedal').src = 'images/medals/divine4.png';
            } else if (mmr > 5420 && mmr < 6000) {
                document.getElementById('maxmedal').src = 'images/medals/immortal1.png';
            }


        } else {
            var mmr = values[handle];
            valueMin.value = values[handle];
            valuefinish.innerHTML = values[handle];

            if (mmr > 0 && mmr < 154) {
                document.getElementById('minmedal').src = 'images/medals/herald1.png';

            } else if (mmr > 154 && mmr < 308) {
                document.getElementById('minmedal').src = 'images/medals/herald2.png';
            } else if (mmr > 308 && mmr < 462) {
                document.getElementById('minmedal').src = 'images/medals/herald3.png';
            } else if (mmr > 462 && mmr < 616) {
                document.getElementById('minmedal').src = 'images/medals/herald4.png';
            } else if (mmr > 616 && mmr < 770) {
                document.getElementById('minmedal').src = 'images/medals/herald5.png';
            } else if (mmr > 770 && mmr < 924) {
                document.getElementById('minmedal').src = 'images/medals/guardian1.png';
            } else if (mmr > 924 && mmr < 1078) {
                document.getElementById('minmedal').src = 'images/medals/guardian2.png';
            } else if (mmr > 1078 && mmr < 1232) {
                document.getElementById('minmedal').src = 'images/medals/guardian3.png';
            } else if (mmr > 1232 && mmr <= 1386) {
                document.getElementById('minmedal').src = 'images/medals/guardian4.png';
            } else if (mmr > 1386 && mmr < 1540) {
                document.getElementById('minmedal').src = 'images/medals/guardian5.png';
            } else if (mmr > 1540 && mmr < 1694) {
                document.getElementById('minmedal').src = 'images/medals/crusader1.png';
            } else if (mmr > 1694 && mmr < 1848) {
                document.getElementById('minmedal').src = 'images/medals/crusader2.png';
            } else if (mmr > 1848 && mmr < 2002) {
                document.getElementById('minmedal').src = 'images/medals/crusader3.png';
            } else if (mmr > 2002 && mmr < 2156) {
                document.getElementById('minmedal').src = 'images/medals/crusader4.png';
            } else if (mmr > 2156 && mmr < 2310) {
                document.getElementById('minmedal').src = 'images/medals/crusader5.png';
            } else if (mmr > 2310 && mmr < 2464) {
                document.getElementById('minmedal').src = 'images/medals/archon1.png';
            } else if (mmr > 2464 && mmr < 2618) {
                document.getElementById('minmedal').src = 'images/medals/archon2.png';
            } else if (mmr > 2618 && mmr < 2772) {
                document.getElementById('minmedal').src = 'images/medals/archon3.png';
            } else if (mmr > 2772 && mmr < 2926) {
                document.getElementById('minmedal').src = 'images/medals/archon4.png';
            } else if (mmr > 2926 && mmr < 3080) {
                document.getElementById('minmedal').src = 'images/medals/archon5.png';
            } else if (mmr > 3080 && mmr < 3234) {
                document.getElementById('minmedal').src = 'images/medals/legend1.png';
            } else if (mmr > 3234 && mmr < 3388) {
                document.getElementById('minmedal').src = 'images/medals/legend2.png';
            } else if (mmr > 3388 && mmr < 3542) {
                document.getElementById('minmedal').src = 'images/medals/legend3.png';
            } else if (mmr > 3542 && mmr < 3696) {
                document.getElementById('minmedal').src = 'images/medals/legend4.png';
            } else if (mmr > 3696 && mmr < 3850) {
                document.getElementById('minmedal').src = 'images/medals/legend5.png';
            } else if (mmr > 3850 && mmr < 4004) {
                document.getElementById('minmedal').src = 'images/medals/ancient1.png';
            } else if (mmr > 4004 && mmr < 4158) {
                document.getElementById('minmedal').src = 'images/medals/ancient2.png';
            } else if (mmr > 4158 && mmr < 4312) {
                document.getElementById('minmedal').src = 'images/medals/ancient3.png';
            } else if (mmr > 4312 && mmr < 4466) {
                document.getElementById('minmedal').src = 'images/medals/ancient4.png';
            } else if (mmr > 4466 && mmr < 4620) {
                document.getElementById('minmedal').src = 'images/medals/ancient5.png';
            } else if (mmr > 4620 && mmr < 4820) {
                document.getElementById('minmedal').src = 'images/medals/divine1.png';
            } else if (mmr > 4820 && mmr < 5020) {
                document.getElementById('minmedal').src = 'images/medals/divine2.png';
            } else if (mmr > 5020 && mmr < 5220) {
                document.getElementById('minmedal').src = 'images/medals/divine3.png';
            } else if (mmr > 5220 && mmr < 5420) {
                document.getElementById('minmedal').src = 'images/medals/divine4.png';
            } else if (mmr > 5420 && mmr < 6000) {
                document.getElementById('minmedal').src = 'images/medals/immortal1.png';
            }
        }
    })

    function coachtext()
    {
        valuecoach = document.getElementById("coachinput").value;
            document.getElementById('startcoach').innerHTML=valuecoach;
    }


</script>
<script>
    var accstatus = document.getElementById('oldaccrank').style.display;
    var accnew = document.getElementById('cal-newacc-sep').style.display;
    var corestatus=false;
    var suppstatus=false;
    function calibratetext() {
        if (accstatus='block') {
            valuecoach = document.getElementById("calibrateinput").value;
            document.getElementById('startcalibrate').innerHTML =  valuecoach;
        }
        else if(accnew='block') {
            document.getElementById('startcalibrate').innerHTML = "";
            //document.getElementById("calibrateinput").value="new";

        }
    }
    function corebutton() {

        if(corestatus==false)
        {
            if (accstatus='block') {
                valuecoach = document.getElementById("calibrateinput").value;
                document.getElementById('startcalibrate').innerHTML =  valuecoach;
            }
            document.getElementsByClassName('corebtn')[0].style.backgroundColor='#5bc0de';
            document.getElementsByClassName('suppbtn')[0].style.backgroundColor='whitesmoke';
            document.getElementsByClassName('corebtn')[1].style.backgroundColor='#5bc0de';
            document.getElementsByClassName('suppbtn')[1].style.backgroundColor='whitesmoke';
            document.getElementsByClassName('corebtn')[2].style.backgroundColor='#5bc0de';
            document.getElementsByClassName('suppbtn')[2].style.backgroundColor='whitesmoke';
            corestatus=true;
            document.getElementById('oldaccrank').style.display='block';
            document.getElementById('cal-newacc-sep').style.display='none';
            corestatusmain=true;
            document.getElementById('corestatus').value='CORE';
            document.getElementById('corestatusc').value='CORE';
            suppstatus=false;
            suppstatusmain=false;
            document.getElementById('suppstatus').value = '';
            document.getElementById('suppstatusc').value = '';
        }
        else
        {
            document.getElementsByClassName('corebtn')[0].style.backgroundColor='whitesmoke';
            document.getElementsByClassName('corebtn')[1].style.backgroundColor='whitesmoke';
            document.getElementsByClassName('corebtn')[2].style.backgroundColor='whitesmoke';
            corestatus=false;
            document.getElementById('oldaccrank').style.display='none';
            document.getElementById('cal-newacc-sep').style.display='block';
            corestatusmain=true;
            document.getElementById('corestatus').value = '';
            document.getElementById('corestatusc').value = '';
        }
    }
    function suppbutton() {
        if(suppstatus==false) {
            if(accnew='block') {
                document.getElementById('startcalibrate').innerHTML = "";
                //document.getElementById("calibrateinput").value="new";
            }
            document.getElementsByClassName('corebtn')[0].style.backgroundColor='whitesmoke';
            document.getElementsByClassName('suppbtn')[0].style.backgroundColor='#5cb85c';
            document.getElementsByClassName('corebtn')[1].style.backgroundColor='whitesmoke';
            document.getElementsByClassName('suppbtn')[1].style.backgroundColor='#5cb85c';
            document.getElementsByClassName('corebtn')[2].style.backgroundColor='whitesmoke';
            document.getElementsByClassName('suppbtn')[2].style.backgroundColor='#5cb85c';
            suppstatus=true;
            document.getElementById('oldaccrank').style.display='none';
            document.getElementById('cal-newacc-sep').style.display='block';
            suppstatusmain=true;
            document.getElementById('suppstatus').value=' SUPPORT ';
            document.getElementById('suppstatusc').value=' SUPPORT ';
            corestatus=false
            corestatusmain=false
            document.getElementById('corestatus').value = '';
            document.getElementById('corestatusc').value = '';
        }
        else {
            window.alert("its not working");
            document.getElementsByClassName('suppbtn')[0].style.backgroundColor='whitesmoke';
            document.getElementsByClassName('suppbtn')[1].style.backgroundColor='whitesmoke';
            document.getElementsByClassName('suppbtn')[2].style.backgroundColor='whitesmoke';
            suppstatus=false;
            document.getElementById('oldaccrank').style.display='block';
            document.getElementById('cal-newacc-sep').style.display='none';
            suppstatusmain=false;
            document.getElementById('suppstatus').value = '';
            document.getElementById('suppstatusc').value = '';
        }
    }

    var corestatusmain;
    var suppstatusmain;
    function boostsubmit() {

        if(corestatusmain || suppstatusmain == true) {
            document.boostsub.submit();
        }
        else { window.alert('لطفا رول خود را انتخاب کنید'); }

    }
    function boostsubmitnotsigned() {
        window.alert('لطفا ابتدا وارد شوید');
    }
    function coachsubmit() {

        if(corestatusmain || suppstatusmain == true) {
            document.coachsub.submit();
        }
        else { window.alert('لطفا رول خود را انتخاب کنید'); }

    }
    function calibratesubmit() {

        if(corestatusmain || suppstatusmain == true) {
            document.calibratesub.submit();
        }
        else { window.alert('لطفا وضعیت اکانت خود را مشخص کنید'); }
        }
    function logout()
    {


        window.location.replace("logout.php");


    }

</script>



<?php
include('footer.php');
?>
